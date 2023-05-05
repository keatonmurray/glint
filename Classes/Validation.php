<?php

	class Validation {

		private $fields = array ();
		protected $error = "All fields must be filled out. Please try again!";

		public function validate_signup ($fname, $lname, $email, $password) {

			$this->fields = $fname;
			$this->fields = $lname;
			$this->fields = $email;
			$this->fields = $password;

			if (empty(trim($_POST['fname']))) {

				return $this->error;
			}
		}
	}

	//arguments are not yet finished 