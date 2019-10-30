<h2>Add product</h2>
<?php $product = mysqli_fetch_array($categoryList) ?>
<form action="index.php?action=add_product" method="POST">
	<input type="text" name="title" value="<?= $product['title'] ?>"><br>
	<input type="text" name="description" value="<?= $product['description'] ?>"><br>
	<select name="product_category_id" id="">
		<option value="">-- select --</option>
		<?php  while ($row = mysqli_fetch_array($categoryList)) { ?>
		<option value="<?= $row['id'] ?>" <?= $row['id'] == $product['product_category_id'] ? 'selected' :'' ?>><?= $row['name'] ?></option>
		 <?php } ?>
	</select><br>
	<input type="number" name="price" value="<?= $product['price'] ?>"><br>
	<input type="number" name="discount" value="<?= $product['discount'] ?>"><br>
	<input type="submit" name="add_product">
</form>