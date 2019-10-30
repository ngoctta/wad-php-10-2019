<?php 
	include 'config/database.php';
 class Model extends Connect {
 		public function getNews() {
 			return 'news get from db';
 		}

 		public function getProductList() {
 			$sql = "SELECT p.* , `c`.`id` as category_id , `c`.`name` as 'category_name' FROM products as p INNER JOIN product_categories as c ON `c`.`id` = `p`.`product_category_id`";
 			return mysqli_query($this->connect(), $sql);
 		}

		public function getCategoryList() {
 			$sql = "SELECT * FROM product_categories ";
 			return mysqli_query($this->connect(), $sql);
 		}

		public function getProductById($id) {
 			$sql = "SELECT p.* , `c`.`id` as category_id , `c`.`name` as 'category_name' FROM products as p INNER JOIN product_categories as c ON `c`.`id` = `p`.`product_category_id` where p.id = $id";
 			return mysqli_fetch_array($check);
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

 		public function addProduct($p){
 			$sql = "INSERT INTO products(title, product_category_id, description, price, discount) VALUES ('" . $p['title'] ."','" . $p['product_category_id'] ."','" . $p['description'] ."','" . $p['price'] ."','" . $p['discount'] ."')";
 			return mysqli_query($this->connect(), $sql);
 		}

 		public function editProduct($id, $p){
 			$sql = "UPDATE `products` SET `product_category_id`='" . $p['product_category_id'] ."',`title`='" . $p['title'] ."',`description`='" . $p['description'] ."',`price`='" . $p['price'] ."',`discount`='" . $p['discount'] ."' WHERE `id`= '$id'";
 			return mysqli_query($this->connect(), $sql);
 		}

 }
?>