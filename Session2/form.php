<style>
  .error{
    color: red;
  }
</style>
<?php 
  if(isset($_POST['register'])){
    if(empty($_POST['name'])){
      $error_name = "Name no required";
    }
    if(empty($_POST['email'])){
      $error_email = "Email no required";
    }
    if(empty($_POST['password'])){
      $error_pass = "Password no required";
    }
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
      echo "Đăng kí thành công";
    }
   
  }
 ?>
<form action="" method="post">
  <div>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" >  
    <p class="error"> <?php echo $error_name ?? '' ?></p>
  </div>
  <div>
    <label for="psw"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >
    <p class="error"><?php echo $error_email ?? '' ?></p>
  </div> 
   <div>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >
    <p class="error"><?php echo $error_pass ?? '' ?></p>
  </div> 
  <div class="container" >
    <button type="submit" name="register">Register</button>   
  </div>
</form>