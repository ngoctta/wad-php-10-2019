<h2>Add product</h2>
<form action="index.php?action=add_product" method="POST">
	<input type="text" name="title"><br>
	<input type="text" name="description"><br>
	<select name="product_category_id" id="">
		<option value="">-- select --</option>
		<?php  while ($row = mysqli_fetch_array($categoryList)) { ?>
		<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
		 <?php } ?>
	</select><br>
	<input type="number" name="price"><br>
	<input type="number" name="discount"><br>
	<input type="submit" name="add_product">
</form>