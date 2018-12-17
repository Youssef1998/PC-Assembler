<?php
require_once("navig.php");
require_once('connect.php');
$dbb = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  or die('Error communicating to MySQL server.');
if(isset($_POST['submit'])){
  if(isset($_POST['department'])){
    $department=$_POST['department'];
    $querye = "INSERT INTO tbl_name (department) VALUES ('$department')";
    $sql=mysqli_query($dbb,$querye);
    mysqli_close($dbb);                     
  }
}
?>