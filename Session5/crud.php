<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
	<?php 
	
		$is_show_info = false;

		$input_required = ['title', 'description', 'image', 'price', 'discount'];
		$input_number = ['price', 'discount'];
		$error = [];
		if(isset($_POST['submit'])){
			foreach ($input_required as $name) {
				if(empty($_POST[$name])){
					$error[$name] = $name . " no required";
				}
			}
			foreach ($input_number as $name) {
				if(!preg_match("/^[0-9]*$/", $_POST[$name]) ){
					$error[$name] = $name . " not is a numbers";
				}
			}

			if(isset($_FILES["image"])){
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				
				
			       try{
			       	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			       } catch (Exception $e){
 						echo 'Caught exception: ',  $e->getMessage(), "\n";
			       }
			}
			
			if(count($error) == 0){
				die('ok');
			}
		}
	 ?>
	<div class="container">
	 
	  		<h2>Form</h2>
		  	<form action="#" method="post"  enctype="multipart/form-data">
			    <div class="form-group">
			      	<label for="title">Title:</label>
			      	<input type="text" class="form-control" id="fullName" placeholder="Enter title" name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['title']) ? $error['title'] : '' ?></p>
			    </div>
			    
			    <div class="form-group">
			      	<label for="description">Desctiption:</label>
			      	<input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="<?php echo isset($_POST['description']) ? $_POST['description'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['description']) ? $error['description'] : '' ?></p>
			    </div>
  				<div class="form-group">
			    	<label for="image">Image:</label>
    				<input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg">
    				<p class="text-danger"><?php echo isset($error['image']) ? $error['image'] : '' ?></p>
			    </div>
			    <div class="form-group">
			      	<label for="price">Price:</label>
			      	<input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo isset($_POST['price']) ? $_POST['price'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['price']) ? $error['price'] : '' ?></p>
			    </div>
				  <div class="form-group">
			      	<label for="discount">Discount:</label>
			      	<input type="number" class="form-control" id="discount" placeholder="Enter discount" name="discount" value="<?php echo isset($_POST['discount']) ? $_POST['discount'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['discount']) ? $error['discount'] : '' ?></p>
			    </div>
			
			  
			    <button type="submit" class="btn btn-default" name="submit" >Submit</button>
		  	</form>
	  
	</div>
</body>
</html>