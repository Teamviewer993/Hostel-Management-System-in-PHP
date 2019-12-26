<?php
if(isset($_POST['login-submit'])){
	require('../includes/dbconfig.php');

	$mailuid = $_POST['email'];
	$password = $_POST['pswd'];
	if (empty($mailuid || empty($password))) {
		header("location: ../users/login.php?error=emptyFields");
		exit();
	} else {
		$sql = "SELECT * FROM user_table WHERE uidUser=? OR emailUser=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../users/login.php?error=sqlError");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$checkpswd = password_verify($password, $row['pswd']);
				// If password match
				if ($checkpswd == false) {
					header("location: ../users/login.php?error=wrongPassword");
					exit();
				} else if ($checkpswd == true) {
					session_start();
					$_SESSION['userId'] =  $row['idUser'];
					$_SESSION['loggedUser'] =  $row['uidUser'];
					// User Get a Success Message
					header("location: ../users/profile.php?username=".$mailuid);
					exit();
				}
			} else {
				header("location: ../users/login.php?error=noUserFound");
				exit();
			}
		}
	}

} else {
	header("location: ../users/login.php?");
	exit();
}
