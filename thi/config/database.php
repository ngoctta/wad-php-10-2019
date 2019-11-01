<?php 
	class Connect {

		protected $server = 'localhost';
		protected $username = 'root';
		protected $password = '';
		protected $database = 'computer_shop';

		public function connect() {
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
			mysqli_set_charset($connect,"utf8");
			return $connect;
		}

	}
?>