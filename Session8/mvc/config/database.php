<?php 
	class Connect {

		protected $server = '127.0.0.1';
		protected $username = 'root';
		protected $password = '';
		protected $database = 'wad';

		public function connect() {
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
			mysqli_set_charset($connect,"utf8");
			return $connect;
		}

	}
?>