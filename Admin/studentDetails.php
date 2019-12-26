<?php
	require "admin-includes/header.php";
	require "admin-includes/dbconfig.php";
?>

<div class="center">
	<h4>Welcome Admin Following Details of Users</h4>
</div>

<div class="container rac-table">
	<div class="back-btn">

	</div>
<div class="">
	<table class="highlight centered responsive-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Surname</th>
				<th>username</th>
				<th>Contact Number</th>
				<th>Email ID</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php
	$sql = "SELECT * FROM `user_table`;";;
	$result = mysqli_query($conn, $sql);

	if(!$result) {
		echo "No Data Found";
	} else {
		while ($row = mysqli_fetch_array($result)) {
?>

		<tr>
			<td><?php echo "{$row['ractor_id']}"; ?></td>
			<td><?php echo "{$row['ractor_fname']}"; ?></td>
			<td><?php echo "{$row['ractor_lname']}"; ?></td>
			<td><?php echo "{$row['ractor_uid']}"; ?></td>
			<td><?php echo "{$row['ractor_mobile']}"; ?></td>
			<td><?php echo "{$row['ractor_email']}"; ?></td>
			<td><a href="" class="btn btn-waves waves-effect red z-depth-0 black-text"><i class="material-icons">delete</i></a></td>
		</tr>


<?php		}
	}
?>
		</tbody>
		</table><br>
		<a href="../admin" class="btn btn-waves waves-effect right black-text green z-depth-0" name="submit" ><i class="material-icons left">chevron_left</i> Go Back</a>
	</div>
</div>

<?php
	require "admin-includes/footer.php";
?>
