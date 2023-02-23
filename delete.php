<?php

include 'dbcon.php';

$studentid = $_GET['id'];

$deletequery = "delete from form where studentid=$studentid";

$query = mysqli_query($con, $deletequery);

if($query){
	?>
	<script>
		alert('deleted successfull');
	</script>

	<?php
	header('location:select.php');
}else{
	?>
	<script>
		alert('Not deleted ');
	</script>

	<?php
}


?>