<!DOCTYPE html>

<?php include_once ('../Includes/Validation.inc.php'); ?>

<html>
	<head>
		<title>Create an account</title>
		<link rel="stylesheet" href="../Public/Style.css">
		<link rel="icon" type="image/x-icon" href="../Public/favicon.png">
		<img src="../Public/logo.png" id="logo">
	</head>
	<body>
		<nav>
			<ul>
				<a href="Login.php">Login</a>
				<a href="../Index.php">Home</a>
			</ul>
		</nav>
		<hr>
		<div id="form-page-margin">
		<div class="error">
			<small><?php echo $error ?? '' ?></small><br>
		</div>
			<h2>Create an account</h2>
			<form method="post" action="">
				<label class="labels">First Name</label><br>
				<input class="inputs" type="text" name="fname"><br><br>
				<label class="labels">Last Name</label><br>
				<input class="inputs" type="text" name="lname"><br><br>
				<label class="labels">Email Address</label><br>
				<input class="inputs" type="email" name="email"><br><br>
				<label class="labels">Password</label><br>
				<input class="inputs" type="password" name="password"><br><br>
				<button type="submit" name="submit"><small><a href="">Signup</a></small></button>
				<button type="submit" name="close"><small><a href="../Index.php">Cancel</a></small></button>
			</form>
			<div class="hyperlinks">
				<p>
					<i><a href="Login.php">Already have an account?</a></i>
				</p>
			</div>
		</div>
	</body>
</html>