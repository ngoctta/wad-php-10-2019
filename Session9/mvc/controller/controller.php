<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
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
					// Check login
					if (!isset($_SESSION['login'])) {
						header('Location: index.php?action=login');
					}
					// End check login
				  $productList = $model->getProductList();
					include 'view/products.php';
					break;
				case 'contact':
					include 'view/contact.php';
					break;
				case 'add_product':
					// Check login
					if (!isset($_SESSION['login'])) {
						header('Location: index.php?action=login');
					}
					$categoryList = $model->getCategoryList();
					// End check login
					if (isset($_POST['add_product'])) {
						$p = $_POST;
						$categoryList = $model->addProduct($p);
						header('Location: index.php?action=products');
					}
					include 'view/add_product.php';
					break;	
				case 'delete_product':

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
					break;	
				case 'edit_product':

					// Check login
					if (!isset($_SESSION['login'])) {
						header('Location: index.php?action=login');
					}

					$id = isset($_GET['id'])?$_GET['id']:null;
					// End check login
					if (isset($id)) {
						$categoryList = $model->getCategoryList();
						$product = $model->getProductById($id);
						$delete = $model->deleteProduct($id);
						if (isset($_POST['add_product'])) {
							$p = $_POST;
							$categoryList = $model->addProduct($p);
							header('Location: index.php?action=products');
						}
						header('Location: index.php?action=edit_product');
					}
					include 'view/add_product.php';
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