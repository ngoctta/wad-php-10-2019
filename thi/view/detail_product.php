<h2>Detail</h2>
<table>
<?php $product = mysqli_fetch_array($product) ?>
	<tr>
		<td>Name</td>
		<td><?= $product['name'] ?></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><?= $product['description'] ?></td>
	</tr>
	<tr>
		<td>Image</td>
		<td><img src="<?= $product['images'] ?>" alt=""></td>
	</tr>
	<tr>
		<td>Price</td>
		<td><?= $product['price'] ?></td>
	</tr>

</table>