<?php 
include_once 'db_conn.php';
 ?>
 <?php 
$title = $_POST['titlee'];
$content = $_POST['contentt'];
$insertsql = "INSERT INTO blog (title, details) VALUES ('$title',$content);";
mysqli_query('$conn','$insertsql');
header("Location: ../blog_list.php");
  ?>