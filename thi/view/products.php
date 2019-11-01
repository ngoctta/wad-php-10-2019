<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<h2>List Porduct</h2>
<p><a href="index.php?action=add_product">Add product</a></p>
<p><a href="index.php?action=logout">Logout</a></p>
<table>
  <tr>
  	 <th>id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Image</th>
    <th>Price</th>
    <th>detail</th>
    
  </tr>

  <?php  while ($row = mysqli_fetch_array($productList)) { ?>
     <tr>
     	  <th><?= $row['id'] ?></th>
        <th><?= $row['name'] ?></th>
        <th><?= $row['description'] ?></th>
        <th><?= $row['images'] ?></th>
        <th><?= $row['price'] ?></th>
        <th><a href="?action=detail_product&user_id=<?= $row['id'] ?>">Detail</a></th>
       
      </tr>
    <?php } ?>
 <tr>
  
</table>