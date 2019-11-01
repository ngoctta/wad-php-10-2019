<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$id = isset($_GET['user_id'])?$_GET['user_id']:'';

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
					// End check login
					if (isset($_POST['add_user'])) {
						$p = $_POST;
						$create = $model->addUser($p);
						header('Location: index.php?action=users');
					}
					include 'view/add_user.php';
					break;	
				
				case 'detail_product':
					//var_dump($id);

					if (isset($id)) {
						$product = $model->getProductById($id);
					
					}
					include 'view/detail_product.php';
					break;	
			
				default:
					include 'view/home.php';
					break;
			}
		}
	}
?>