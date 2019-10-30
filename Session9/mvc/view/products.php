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
    <th>Title</th>
    <th>Category</th>
    <th>Description</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  <?php  while ($row = mysqli_fetch_array($productList)) { ?>
     <tr>
     	  <th><?= $row['id'] ?></th>
        <th><?= $row['title'] ?></th>
        <th><?= $row['category_name'] ?></th>
        <th><?= $row['description'] ?></th>
        <th><?= $row['image'] ?></th>
        <th><a href="?action=edit_product&id=<?= $row['id'] ?>">Edit</a></th>
        <th><a href="?action=delete_product&id=<?= $row['id'] ?>">Delete</a></th>
      </tr>
    <?php } ?>
 <tr>
  
</table>