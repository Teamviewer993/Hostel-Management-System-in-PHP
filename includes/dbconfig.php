<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
	die('mysqli error'. mysqli_connect_error());
}
