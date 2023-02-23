<?php 
session_start();

include 'dbcon.php';
echo '<pre>';
mysqli_select_db($con, 'cruddb');
print_r($_SESSION);
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$sql_query="select * from login where username='$username' && password='$password' ";
$result=mysqli_query($con,$sql_query);
$rows=mysqli_num_rows($result);
if($rows==1){
   $_SESSION['username'] = $username;
   header('location:Home.php');
   $_SESSION['logged_in']=TRUE;

}else {
    echo 'invalid username and password';
    header('location:signin.php');
    session_unset();  
}
?>