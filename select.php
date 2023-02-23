

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'css/style.css';  ?>
	<?php  include 'links/links.php'; ?>
</head>
<body>

<div class="main-div">
	<h1>List of candidates for web developer job</h1>
	<div class="center-div">		
		<div class="table-responsive">
		<table>
			<thead>
				<th >id</th>
				<th>name</th>
				<th>Email</th>
				<th>mobile</th>
				<th>Degree</th>
				<th>refer</th>
				<th>post</th>
				<th colspan="2">Operation</th>
			</thead>
			<tbody>
	<?php

	include 'dbcon.php';

	$selectquery = " select * from registration ";

	$query = mysqli_query($con,$selectquery );

	while($result = mysqli_fetch_assoc($query)){

	?>
				<tr>
					<td><?php  echo $result['id'];  ?> </td>
					<td><?php  echo $result['name'];  ?> </td>
					<td><?php  echo $result['email'];  ?> </td>
					<td><?php  echo $result['mobile'];  ?> </td>
					<td><?php  echo $result['degree'];  ?> </td>
					<td><?php  echo $result['refer'];  ?> </td>
					<td><?php  echo $result['lang'];  ?> </td>
					<td><a href="update.php?id=<?php  echo $result['id'];  ?>"> <i class="fa fa-edit"> </i> </a></td>
					<td><a href="delete.php?ids=<?php  echo $result['id'];  ?>"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>
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