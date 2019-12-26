<!-- Navigation Bar -->
<?php require "../includes/other/navbar.php"; ?>
<!-- Database Connection -->

<div class="container-fluid register">
	<div class="row register-section-form">
		<div class="col s12 l6 register-section-left hide-on-med-and-down">
			<div class="register-section-image center" style="marign-top: 100px!important;">
				<img src="../images/pngs/computer-guy.png" class="responsive-img" width="300" alt="">
			</div>
		</div>
		<div class="col s12 l6">
			<div class="center">
				<h4>Signup To Take Admission</h4>
				<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyFieldsield") {
						echo '<div class="red-text">Username is Required</div>';
					} else if ($_GET['error'] == "inValidmail2") {
						echo '<div class="red-text">Email is Required to Contact You...Please Fill That</div>';
					} else if ($_GET['error'] == "passwordCheck") {
						echo '<div class="red-text">Password and ReEnter Password Are Required to Match</div>';
					} else if ($_GET['error'] == "inValidMail") {
						echo '<div class="red-text">Invalid Email!!</div>';
					} else if ($_GET['error'] == "sqlerror") {
						echo '<div class="red-text">There Are Problem With the website Please Contact Admin</div>';
					} else if ($_GET['error'] == "userTaken") {
						echo '<div class="green-text">Username Has been Taken</div>';
					}
				}
				?>
			</div>
			<div class="register-form">
				<div class="row">
					<form class="col s12" action="../includes/signup.inc.php" method="post">
						<div class="row">
							<div class="input-field col s12">
								<input type="text" name="uid">
								<label for="uid">Username</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="email" name="email">
								<label for="email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input type="password" name="pswd">
								<label for="password">Password</label>
							</div>
							<div class="input-field col s6">
								<input type="password" name="pswd_repeat">
								<label for="password">Re-enter Password</label>
							</div>
						</div>
						<div class="row" style="padding-right: 20px;">
							<button type="submit" name="signup-submit" value="Register !" class="btn btn-waves waves-effect blue z-depth-0 right ">Register Now !</button>
							<a href="/pratik/users/login.php">Already Have an Accoount ?</a><br><br>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer Included -->
<?php require "../includes/other/footer.php";?>
