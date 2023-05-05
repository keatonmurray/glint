<?php

	require_once ('../Classes/Validation.php');

	if (isset($_POST['submit'])) {

		$fields = array ('fname' => $_POST['fname'], 
						'lname' => $_POST['lname'], 
						'email' => $_POST['email'], 
						'password' => $_POST['password']);

		$validate = new Validation;
		$error = $validate->validate_signup($fields['fname'], $fields['lname'], $fields['email'], $fields['password']);

	}