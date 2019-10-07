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
		$cities = [1 => 'Da Nang', 
					2 => 'Quang Nam', 3 => 'Hue', 4 => 'Ha Tinh', 5 => 'Ha Noi' ]; 
		$input_required = ['fullName', 'address', 'city', 'gender', 'date-start', 'date-finish', 'start-electricity', 'finish-electricity'];

		$error = [];
		if(isset($_POST['submit'])){
			foreach ($input_required as $name) {
				if(empty($_POST[$name])){
					$error[$name] = $name . " no required";
				}
			}
			if(date($_POST['date-start']) > date($_POST['date-finish']) ){
				$error['date-finish'] = "date-finish than bigger date-start";
				$error['date-start'] = "date-start than smaller date-finish";
			}
			$start = $_POST['start-electricity'];
			$finish = $_POST['finish-electricity'];
			if((int)$start > (int)$finish ){
				$error['start-electricity'] = "finish-electricity than bigger start-electricity";
				$error['finish-electricity'] = "start-electricity than smaller finish-electricity";
			}
			if(count($error) == 0){
				$is_show_info = true;
				$money = 0;
				$num = $finish - $start;
				if($num <= 100){
					$money = $num * 1500;
				}else if($num <= 300 ){
					$money = 100 * 1500 + ($num - 100) * 2100;
				}else if($num > 300 ){
					$money = 100 * 1500 + 200 * 2100 + ($num - 300) * 3500;
				}
			}
		}
	 ?>
	<div class="container">
	  	<?php if($is_show_info == false): ?>
	  		<h2>Form</h2>
		  	<form action="/WAD_PHP/Session3/form3.php" method="post">
			    <div class="form-group">
			      	<label for="fullName">Full name:</label>
			      	<input type="text" class="form-control" id="fullName" placeholder="Enter Full name" name="fullName" value="<?php echo isset($_POST['fullName']) ? $_POST['fullName'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['fullName']) ? $error['fullName'] : '' ?></p>
			    </div>
			    
			    <div class="form-group">
			      	<label for="address">Address:</label>
			      	<input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['address']) ? $error['address'] : '' ?></p>
			    </div>

			    <div class="form-group">
			      	<label for="city">City:</label>
			      	
			      	<select name="city" id="city" class="form-control">
			      			<option value="" >---Select ---</option>
			      		<?php foreach ($cities as $k => $city) : ?>
			      			<option value="<?php echo $k; ?>" <?php echo (isset($_POST['city']) && $_POST['city'] == $k) ? 'selected' : '' ?>><?php echo $city; ?></option>
			      		<?php endforeach ; ?>			      		
			      	</select>
			      	<p class="text-danger"><?php echo isset($error['city']) ? $error['city'] : '' ?></p>
			    </div>
				<div class="form-group">
					<label for="">Gender</label>
				    <div class="checkbox">
				      	<label><input type="radio" name="gender" value="1" <?php echo isset($_POST['gender'] ) && $_POST['gender'] == 1 ? 'checked' : '' ?>> Male</label>
				       	<label><input type="radio" name="gender" value="2" <?php echo isset($_POST['gender'] ) && $_POST['gender'] == 2 ? 'checked' : '' ?>> Female</label>
				    </div>
				    <p class="text-danger"><?php echo isset($error['gender']) ? $error['gender'] : '' ?></p>
				</div>
				<div class="form-group">
			      	<label for="date-start">Date Start:</label>
			      	<input type="date" class="form-control" id="date-start" placeholder="Enter date start" name="date-start" value="<?php echo isset($_POST['date-start']) ? $_POST['date-start'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['date-start']) ? $error['date-start'] : '' ?></p>
			    </div>
			    <div class="form-group">
			      	<label for="date-finish">Date Finish:</label>
			      	<input type="date" class="form-control" id="date-finish" placeholder="Enter date finish" name="date-finish" value="<?php echo isset($_POST['date-finish']) ? $_POST['date-finish'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['date-finish']) ? $error['date-finish'] : '' ?></p>
			    </div>
			    <div class="form-group">
			      	<label for="start-electricity">Start electricity:</label>
			      	<input type="number" class="form-control" id="start-electricity" placeholder="Enter start electricity" name="start-electricity" value="<?php echo isset($_POST['start-electricity']) ? $_POST['start-electricity'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['start-electricity']) ? $error['start-electricity'] : '' ?></p>
			    </div>
			    <div class="form-group">
			      	<label for="finish-electricity">Finish electricity:</label>
			      	<input type="number" class="form-control" id="finish-electricity" placeholder="Enter finish electricity" name="finish-electricity" value="<?php echo isset($_POST['finish-electricity']) ? $_POST['finish-electricity'] : '' ?>">
			      	<p class="text-danger"><?php echo isset($error['finish-electricity']) ? $error['finish-electricity'] : '' ?></p>
			    </div>
			    <button type="submit" class="btn btn-default" name="submit">Submit</button>
		  	</form>
	  	<?php else : ?>
			<h2>PHIẾU TÍNH TIỀN ĐIỆN</h2>
			<p><?php echo $_POST['gender'] == 1 ? 'Ông' : 'Bà' ?> <?php echo $_POST['fullName']; ?> </p>
			<p>Giới tính: <?php echo $_POST['gender'] == 1 ? 'Nam' : 'Nữ'; ?></p>
			<p>Địa chỉ: <?php echo $_POST['address']; ?></p>
			<p>Tỉnh: <?php echo $cities[$_POST['city']]; ?></p>
			<p>Date Start: <?php echo $_POST['date-start']; ?></p>
			<p>Date Finish: <?php echo $_POST['date-finish']; ?></p>
			<p>Start electricity: <?php echo $_POST['start-electricity']; ?></p>
			<p>Finish electricity: <?php echo $_POST['finish-electricity']; ?></p>
			<p><b>Tổng tiền điện: </b> <?php echo $money ?></p>
	  	<?php endif; ?>
	</div>
</body>
</html>