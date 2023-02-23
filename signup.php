<?php 
session_start();
header("location: userlogin.php");
include 'dbcon.php';
echo '<pre>';
mysqli_select_db($con, 'cruddb');

$username=$_POST['username'];
$password=$_POST['password'];
$sql_query="select * from login where username='$username' && password='$password' ";
$result=mysqli_query($con,$sql_query);
$rows=mysqli_num_rows($result);
if($rows==1){
   echo "duplicate data";
  
}else {
    $qy = "insert into login(username, password)values('$username','$password')";
    mysqli_query($con, $qy);   
   
}
?>