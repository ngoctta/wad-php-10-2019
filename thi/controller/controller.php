<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$id = isset($_GET['user_id'])?$_GET['user_id']:null;
			$model = new Model();
			switch ($action) {
				case 'home':
					include 'view/home.php';
					break;
				case 'news':
					$newsList = $model->getNews();
					include 'view/news.php';
					break;
				case 'products':
				
					// End check login
				  $productList = $model->getProductList();
					include 'view/products.php';
					break;
				case 'users':
					// End check login
				  	$users = $model->getUsers();
					include 'view/users.php';
					break;
				case 'contact':
					include 'view/contact.php';
					break;
				case 'add_user':
					// Check login
		
					// End check login
					if (isset($_POST['add_user'])) {
						$p = $_POST;
						$create = $model->addUser($p);
						header('Location: index.php?action=users');
					}
					include 'view/add_user.php';
					break;	
				/*case 'delete_product':

					// Check login
					if (!isset($_SESSION['login'])) {
						header('Location: index.php?action=login');
					}
					$id = isset($_GET['id'])?$_GET['id']:null;
					// End check login
					if (isset($id)) {
						$delete = $model->deleteProduct($id);
						header('Location: index.php?action=products');
					}
					include 'view/add_product.php';
					break;	*/
				case 'detail_product':
					

					// End check login
					if (isset($id)) {
				
						$product = $model->getProductById($id);
						var_dump($product);
						header('Location: index.php?action=detail_product');
					}
					include 'view/detail_product.php';
					break;	
				case 'login':
					$errorLogin = '';
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						if (!empty($model->checkLogin($username, $password))) {
							$_SESSION['login'] = $username;
							header('Location: index.php?action=products');
						}
						$errorLogin = 'Wrong username or password';
					}
					include 'view/login.php';
					break;
				case 'logout':
					unset($_SESSION['login']);
					header('Location: index.php?action=login');
					break;
				default:
					include 'view/home.php';
					break;
			}
		}
	}
?>