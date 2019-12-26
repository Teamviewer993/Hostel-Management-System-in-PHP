<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostel Management System</title>
    <!-- Logo -->
    <link rel="icon" href="http://cityhostel.axiomthemes.com/wp-content/uploads/2017/03/hostel_fav.png" type="image/x-icon" />
    <link rel="shortcut icon" href="http://cityhostel.axiomthemes.com/wp-content/uploads/2017/03/hostel_fav.png" type="image/x-icon " />
    <link rel="stylesheet " href="../main/css/index.css ">
    <link rel="stylesheet" href="../main\css\users.css">
    <link rel="stylesheet " href="../main/css/materialize.min.css ">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons " rel="stylesheet ">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
<!-- Navigation Bar Start -->
<nav class="z-depth-0 transparent ">
        <div class="nav-wrapper ">
            <a href="../ " class="brand-logo black-text left " style="margin-left: 60px; ">HMS</a>
            <a href="# " data-target="mobile-demo " class="sidenav-trigger show-on-large nav-icon"><i class="material-icons black-text ">sort</i></a>
            <ul class="right hide-on-med-and-down ">
                <li><a class="black-text btn transparent z-depth-0 nav-link " href="# "><i class="material-icons left">location_on</i> LDRP Hostel, gandhinagar, Gujrat</a></li>
                <li><a class="black-text btn transparent z-depth-0 nav-link " href="# "><i class="material-icons left">contacts</i>+91 0000000000</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav " id="mobile-demo ">
	    <?php
	    if (isset($_SESSION['userId'])) {
	    	echo '<li><a href="users/profile.php" class="black-text">My Profile</a></li>
		<li><a href="includes/logout.inc.php">Logout</a></li>
	   <div class="divider"></div>
        <li><a class="black-text " href="# ">About Us</a></li>
        <li><a class="black-text " href="# ">Contact Us</a></li>';
   } else {
   	echo '<li><a class="black-text " href="signup.php ">Register</a></li>
        <li><a class="black-text " href="login.php ">Login</a></li>
	   <div class="divider"></div>
        <li><a class="black-text " href="# ">Ractor Login</a></li>
        <li><a class="black-text " href="# ">About Us</a></li>
        <li><a class="black-text " href="# ">Contact Us</a></li>';
   }
	    ?>
    </ul>


    <script src="../main/javascripts/jquery-3.4.1.min.js "></script>
    <script src="../main/javascripts/materialize.min.js "></script>
    <script src="../main/javascripts/main.js "></script>
    <script>
    </script>
