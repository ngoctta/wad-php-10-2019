<h2>Login</h2>
<p><?php echo $errorLogin;?></p>
<form action="index.php?action=login" method="POST">
	<p>Username: <input type="text" name="username"></p>
	<p>Pass: <input type="password" name="password"></p>
	<input type="submit" name="login" value="Login">
</form>