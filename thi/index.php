<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>My page</title>
</head>
<body>
	<?php include 'controller/controller.php'; ?>
	<h1>My website!</h1>
	<a href="index.php?action=users">Users</a>
	 | <a href="index.php?action=add_user">Add User</a>
	 | <a href="index.php?action=products">Products</a>
	 | <a href="index.php?action=contact">Contact</a>
	 <?php 
	 	$controller = new Controller();
	 	$controller->handleRequest();
	 ?>
</body>
</html>