<?php require "../includes/other/navbar.php"; ?>
<!-- Database Connection -->
<?php require "../includes/dbconfig.php"; ?>

<div class="container-fluid register">
	<div class="row register-section-form">
		<div class="col s12 l6 register-section-left hide-on-med-and-down">
			<div class="login-section-image center">
				<img src="../images/svg/chore.svg" class="responsive-img" width="500" alt="">
			</div>
		</div>
<div class="col s12 l6">
	<div class="center">
		<h4>Login in To Your Accoount</h4>
		<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyFieldsield") {
				echo '<div class="red-text">Username is Required</div>';
			} else if ($_GET['error'] == "noUserFound") {
				echo '<div class="red-text">No User Found Please Register First And Try Again</div>';
			} else if ($_GET['error'] == "wrongPassword") {
				echo '<div class="red-text">Ops You Entred Wrong Password...</div>';
			} else if ($_GET['success'] == "loginSuccess") {
				echo "Login Successfull";
			}
		}
		?>
	</div>
	<div class="register-form">
		<div class="row">
			<form class="col s12" action="../includes/login.inc.php" method="POST">
				<div class="row">
					<div class="input-field col s12">
						<input type="text" name="email">
						<label for="email">Username</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="password" name="pswd">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row" style="padding-right: 20px;">
					<button type="submit" name="login-submit" value="Login" class="btn btn-waves waves-effect blue z-depth-0 right">Login !</button>
					<a href="/pratik/users/signup.php">Not Have an Accoount ?</a><br><br>
				</div>
			</form>
		</div>
	</div>
</div>
	</div>
</div>

<!-- Footer Included -->
<?php require "../includes/other/footer.php";?>
