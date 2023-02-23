

<!DOCTYPE html>
<html>
<?php
session_reset();
include 'dbcon.php';
//include 'header.php';

$sql_student = "select * from form";

$result = mysqli_query($con, $sql_student);
?>
<head>
	<title></title>
	<?php  include 'css/style.css';  ?>
	<?php  include 'links/links.php'; ?>
</head>
<body>
<?php
		include 'templates/navbar.php';
		?>
<div class="main-div">
	<h1>List of candidates for web developer job</h1>
	<div class="center-div">		
		<div class="table-responsive">
		<table>
			<thead>
			    <th>ID</th>
				<th>Student Photo</th>
				<th>Candidate Name</th>
				<th>Mobile</th>
				<th>Reference</th>
				<th>Gender</th>
				<th>Category</th>
				<th>Degree</th>
				<th>Email</th>
				<th>Prefered Language</th>
				<th>Religion</th>
				<th>Present Address</th>
				<th>Parmanent Address</th>
				<th colspan="2">Action</th>
			</thead>
			<tbody>
	<?php

	include 'dbcon.php';

	$selectquery = " select * from form ";

	$query = mysqli_query($con,$selectquery );

	while($result = mysqli_fetch_assoc($query)){

	?>
				<tr>
				
				<td><?php  echo $result['studentid'];  ?> </td>
				<td><?php  echo $result['studentphoto'];  ?> </td>
					<td><?php  echo $result['name'];  ?> </td>
					<td><?php  echo $result['mobile'];  ?> </td>
					<td><?php  echo $result['refer'];  ?> </td>
					<td><?php  echo $result['gender'];  ?> </td>
					<td><?php  echo $result['category'];  ?> </td>
					<td><?php  echo $result['Degree'];  ?> </td>
					<td><?php  echo $result['Email'];  ?> </td>
					<td><?php  echo $result['post'];  ?> </td>
					<td><?php  echo $result['religion'];  ?> </td>
					<td><?php  echo $result['paddress'];  ?> </td>
					<td><?php  echo $result['peraddress'];  ?> </td>
					<td><a href="update.php?id=<?php  echo $result['studentid'];  ?>"> <i class="fa fa-edit"> </i> </a></td>
					<td><a href="delete.php?id=<?php  echo $result['studentid'];  ?>"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
				</tr>
	<?php 
				
		}

	?>

			</tbody>
		</table>
	</div>
</div>
</div>
</body>
</html>
