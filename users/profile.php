<?php require "../includes/other/navbar.php";
require "../includes/dbconfig.php";
	if (isset($_SESSION['userId']) == true) {
		$username = $_SESSION['userId'];
		$sql = "SELECT * FROM user_table WHERE uidUser = $username";
		$userQuery = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($userQuery)) {
				$row['uidUser'];
			}
	} else {
		echo 0;
	}
?>

<?php require "../includes/other/footer.php";?>
