<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "cruddb";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
	<script>
		alert('connection successfull');
	</script>

	<?php
}else{
	?>
	<script>
		alert('No connection ');
	</script>

	<?php
}


?>