<?php
$title = "home";
include '../includes/head.php';
//include '';
?>
	<form method="post" action="../control/loginController.php">
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-4">
				<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-4">
				<input type="password" name="password" class="form-control" id="inputPassword" placeholder="password123!">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-10 offset-sm-2">
				<button type="submit" class="btn btn-primary">Sign in</button>
			</div>
		</div>
	</form>
	<a href="AddUser.php" class="btn btn-primary">sign up</a>
<?php
include 'includes/footer.php'
?>