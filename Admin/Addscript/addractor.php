<?php
include_once "../admin-includes/dbconfig.php";

$first = $_POST['ractor_fname'];
$last = $_POST['ractor_lname'];
$username = $_POST['uid'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pswd = $_POST['pwd'];

$sql = "INSERT INTO `hms_ractor`(`ractor_fname`, `ractor_lname`, `ractor_uid`, `ractor_mobile`, `ractor_email`, `ractor_password`) VALUES ('$first', '$last',  '$username', '$mobile', '$email', '$pswd')";
mysqli_query($conn, $sql);

header("location: ../Addnewractor?Ractor=Added");
?>
