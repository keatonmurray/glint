<!DOCTYPE html>

<?php require_once ('../Includes/LoginForm.inc.php'); ?>

<html>
	<head>
		<title>Get in touch</title>
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
			<h2>Contact Us</h2>
			<form method="post" action="">
				<label class="labels">Name</label><br>
				<input class="inputs" type="text" name=""><br><br>
				<label class="labels">Email Address</label><br>
				<input class="inputs" type="email" name=""><br><br>
				<label class="labels">Message</label><br>
				<textarea class="msg-box" type="text" name="msg"></textarea><br><br>
				<button type="submit" name="send"><small><a href="">Send</a></small></button>
			<button type="submit" name=""><small><a href="../Index.php">Cancel</a></small></button>
			</form>
		</div>
	</body>
</html>