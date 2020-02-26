<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>School Managment - Student - View</title>
</head>
<body>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="Index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Create.php">Create New</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Delete.php">Delete</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Update.php">Edit</a>
  </li>
</ul>

<?php
include("config.php");
$fetch = $rasta->query("SELECT * FROM `students`");

?>

<table class="table table-striped table-dark"><thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Course</th>
<th scope="col">Email</th>
</tr>
</thead>
<tbody>
<?php foreach($fetch as $std) { ?>
    <tr>
      <th scope="row"><?php echo $std['Id'] ?></th>
      <td><?php echo $std['name'] ?></td>
      <td><?php echo $std['course'] ?></td>
      <td><?php echo $std['email'] ?></td>
    </tr>
<?php }?>
</tbody>
</table>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>