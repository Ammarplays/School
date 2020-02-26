<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>School Managment - Student - View</title>
</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="Index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Create.php">Create New</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="Delete.php">Delete</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Update.php">Edit</a>
  </li>
</ul>
<?php
include("config.php");

?>

<form action="Delete.php" method="post">

Enter ID to Delete: <input type="text" name="stdid">

<input type="submit" name="submit" value="submit" ><br>

</form>


<?php
//echo $test;

if(isset($_POST['submit'])){
$id = $_POST["stdid"];

$Delete = $rasta->query("DELETE FROM `students` WHERE `students`.`Id` = $id");
if($Delete){
  ?>
  <script>alert("Student Sucessfully Deleted")</script>
  <?php
}else{
?>
<script>alert("Student Not Deleted")</script>
<?php
}

}


?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>