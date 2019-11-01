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
  	 <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Username</th>

  </tr>

  <?php  while ($row = mysqli_fetch_array($users)) { ?>
     <tr>
     	  <th><?= $row['id'] ?></th>
        <th><?= $row['name'] ?></th>
        <th><?= $row['email'] ?></th>
        <th><?= $row['role'] ?></th>
        <th><?= $row['username'] ?></th>
       
      </tr>
    <?php } ?>
 <tr>
  
</table>