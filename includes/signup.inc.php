<?php
if (isset($_POST['signup-submit'])) {
	require "dbconfig.php";

// Take Input From User
	$username = $_POST['uid'];
	$email = $_POST['email'];
	$pswd = $_POST['pswd'];
	$re_pswd = $_POST['pswd_repeat'];
// Validations
	if (empty($username) || empty($email) || empty($pswd)) {
		header("location: ../users/signup.php?error=emptyFieldsield&uid=".$username."&mail=".$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-A0-9]*$/", $username)) {
		header("location: ../users/signup.php?error=inValidmail2&uid=");
		exit();
	}

	// Find Valid Username
	// else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	// 	header("location: ../users/signup.php?error=inValidMail&uid=".$username);
	// 	exit();
	// }

	// Find Valid email
	else if (!preg_match("/^[a-zA-A0-9]*$/", $username)) {
		header("location: ../users/signup.php?error=inValidMail&mail=".$email);
		exit();
	}

	// Check if password and re-entered Passwords Are Matched
	else if ($password == $re_pswd) {
		header("location: ../users/signup.php?error=passwordCheck&uid=".$username."&mail".$email);
		exit();
	} else {
		// If User is Already Exits
		$sql = "SELECT uidUser FROM user_table WHERE uidUser=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../users/signup.php?error=sqlerror");
			exit();
		} else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows();
			if ($resultCheck > 0) {
				header("location: ../users/signup.php?error=userTaken&mail".$email);
				exit();
			} else {
				$sql = "INSERT INTO user_table (uidUser, emailUser, pswd) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("location: ../users/signup.php?error=sqlerror");
					exit();
				} else {
					// Hash(Hide the Password into massaive character)
					$hidePswd = password_hash($pswd, PASSWORD_DEFAULT);
					// Store User Into The Session
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hidePswd);
					mysqli_stmt_execute($stmt);
					header("location: ../index.php?success=SignupSuccessful");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("location: ../users/signup.php?");
	exit();
}
