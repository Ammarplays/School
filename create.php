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
    <a class="nav-link active" href="Create.php">Create New</a>
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

?>

<form action="create.php" method="post">

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Info</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td><input type="text" name="stdname"></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input type="email" name="stdemail" ></td>
    </tr>
    <tr>
      <th scope="row">Course</th>
      <td><input type="text" name="stdcourse" ></td>
    </tr>
  
  </tbody>
</table>

<input type="submit" name="submit" value="submit" ><br>

</form>


<?php
//echo $test;

if(isset($_POST['submit'])){
$name = $_POST["stdname"];
$email = $_POST["stdemail"];
$course = $_POST["stdcourse"];

$insert = $rasta->query("INSERT INTO `students`(`name`, `course`, `email`) VALUES ('$name','$course','$email')");
if($insert){
 header("location:index.php");
}else{
?>
<script>alert("Student Not Added")</script>
<?php
}

}


?>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>