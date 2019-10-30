<h2>Products page</h2>
<p><a href="index.php?action=add_product">Add product</a></p>
<?php
  while ($row = mysqli_fetch_array($productList)) {
  	echo $row['title'].'---'.$row['price'].'<br>';
  }
?>