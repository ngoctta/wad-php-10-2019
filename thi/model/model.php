<?php 
	include 'config/database.php';
 class Model extends Connect {
 		public function getNews() {
 			return 'news get from db';
 		}

 		public function getProductList() {
 			$sql = "SELECT * FROM products";
 			return mysqli_query($this->connect(), $sql);
 		}
 		public function getUsers() {
 			$sql = "SELECT * FROM users";
 			return mysqli_query($this->connect(), $sql);
 		}

		public function getCategoryList() {
 			$sql = "SELECT * FROM product_categories ";
 			return mysqli_query($this->connect(), $sql);
 		}

		public function getProductById($id) {
 			$sql = "SELECT * FROM products  where id = '" . $id . "'";

 			return mysqli_query($this->connect(), $sql);
 		}
 		public function checkLogin($username, $password) {
 			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
 			$check = mysqli_query($this->connect(), $sql);
 			return mysqli_fetch_array($check);
 		}

 		public function deleteProduct($id) {
 			$sql = "Delete from products WHERE id ='$id'";
 			$check = mysqli_query($this->connect(), $sql);
 			return $check;
 		}

 		public function addUser($p){
 			
 			$sql = "INSERT INTO users(name, email, role, username, password) VALUES ('" . $p['name'] ."','" . $p['email'] ."','" . $p['role'] ."','" . $p['username'] ."','" . $p['password'] ."')";

 			return mysqli_query($this->connect(), $sql);
 		}

 		public function editProduct($id, $p){
 			$sql = "UPDATE `products` SET `product_category_id`='" . $p['product_category_id'] ."',`title`='" . $p['title'] ."',`description`='" . $p['description'] ."',`price`='" . $p['price'] ."',`discount`='" . $p['discount'] ."' WHERE `id`= '$id'";
 			return mysqli_query($this->connect(), $sql);
 		}

 }
?>