<?php

	class Database {

		private $servername;
		private $username;
		private $password;
		private $dbname;

		public function __construct ($servername, $username, $password, $dbname) {

			$this->servername = $servername;
			$this->username = $username;
			$this->password = $password;
			$this->dbname = $dbname;

			$conn = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);

			if ($conn->connect_error) {

				die ("Connection failed: " . $conn->connect_error);

			} else {

				//echo "Database setup successfully";
				return $conn;
			}
		}
	}