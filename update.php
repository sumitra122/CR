
<!DOCTYPE html>
<html>
<?php session_start();
include 'dbcon.php';
$studentid = '';
if (isset($_GET['id'])) {
    $studentid = $_GET['id'];
    // get the student detail for id rquested
    echo "select * from form where studentid = $studentid";
    $student_fetch_query = "select * from form where studentid = $studentid";

    $result_student = mysqli_query($con, $student_fetch_query);
    $sudent_row_array = mysqli_fetch_array($result_student);

    $sqlcat = 'select * from category_master';
    $resultcat = mysqli_query($con, $sqlcat);
    
}
?>
	<head>
		<title></title>

		<?php   include 'css/style.css' ?>
		<?php   include 'links/links.php' ?>
		
	</head>
	<body>
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			<img src="images/crud.svg" alt=""/>
			<h3>Welcome</h3>
			<p>Please fill all the details carefully. This form can change your life.</p>
			<a href="select.php">Check Form</a>  <br/>
		</div>

<div class="col-md-9 register-right">
	
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<h3 class="register-heading">Apply for Company placement </h3>
		
		<form  action="" method="POST">
			<div class="row register-form">


<?php


include 'dbcon.php';

$studentid = $_GET['id'];

$selectquery = " select * from form where studentid=$studentid";

$query = mysqli_query($con,$selectquery );

$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){

	$studentid = $_GET['id'];
    
	$uname = isset($_REQUEST['uname']) ? $_REQUEST['uname'] : '';
	$mobile =  mysqli_real_escape_string( $con,  $_POST['mobile']);
	$refer =  mysqli_real_escape_string( $con,  $_POST['refer']); 
	$gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
	$category = isset($_REQUEST['category']) ? $_REQUEST['category'] : '';
	$Degree = isset($_REQUEST['Degree']) ? $_REQUEST['Degree'] : '';
	$Email = isset($_REQUEST['Email']) ? $_REQUEST['Email'] : '';
	$post = isset($_REQUEST['post']) ? $_REQUEST['post'] : '';
	$religion = isset($_REQUEST['religion']) ? $_REQUEST['religion'] : '';
	$paddress = isset($_REQUEST['paddress']) ? $_REQUEST['paddress'] : '';
	$peraddress =  isset($_REQUEST['peraddress']) ? $_REQUEST['peraddress'] : '';


	$updatequery = " update form set name='$uname', mobile='$mobile', 
	refer='$refer', gender='$gender', category='$category', Degree='$Degree',Email='$Email',
	post='$post',religion='$religion',paddress='$paddress',peraddress='$peraddress' where studentid=$studentid ";

	$query = mysqli_query($con, $updatequery);

	if($query){
	?>
	<script>
		alert('updated successfull');
	</script>

	<?php
}else{
	?>
	<script>
		alert('No updated ');
	</script>

	<?php
}

}
?>
				<div class="col-md-6">
				<div class="form-group">
				<label for="exampleFormControlFile1"><b>Student photo </b></label>
				<input type="file" id="myfile" name="studentphoto">
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Enter Your FullName </b></label>
					<input type="text" class="form-control" placeholder="Enter your name *" name="uname" 
						value="<?php  echo $result['name'];  ?>" required/>
					</div>
					
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Phone Number *</b></label>
					<input type="tel" class="form-control" placeholder="Mobile number *" name="mobile" 
						value="<?php  echo $result['mobile'];  ?>" required/>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Any Reference* </b></label>
					<input type="text" class="form-control" placeholder=" Any references *" name="refer" 
						value="<?php  echo $result['refer'];  ?>" required/>
						
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Gender</b></label><br>
					<div class="form-check-inline">
                            <input type="radio" name="gender" id="male" <?php
                                    if (is_numeric($studentid) and $sudent_row_array['gender'] == 'male') echo 'checked';
                                    else echo '';
                                    ?> value="male">

                            <label class="form-check-label" for="inlineRadio1">male</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="gender" id="female" <?php
                                    if (is_numeric($studentid) and $sudent_row_array['gender'] == 'female')
                                    echo 'checked';
                                    else
                                     echo '';
                                    ?> value="female">
                            <label class="form-check-label" for="inlineRadio2">female</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="gender" id="others" value="other" <?php
                                    if (is_numeric($studentid) and $sudent_row_array['gender'] == 'others') echo 'checked';
                                    else echo '';
                                    ?>>
                            <label class="form-check-label" for="inlineRadio3">others</label>
                        </div>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Category</b></label><br>
					<?php
                    $cat_selected = '';
                    $sqlcat = 'select * from category_master';
                    $resultcat = mysqli_query($con, $sqlcat);
                    while ($fetched_data = mysqli_fetch_array($resultcat)) {
                        if (is_numeric($studentid))
                            if ($fetched_data['category_id'] == $sudent_row_array['category']) {
                                $cat_selected = 'checked';
                            } else {
                                $cat_selected = '';
                            }
                    ?>
                        <label style="margin-top: 1rem; margin-left: 2px;">
                            <input type="radio" name="category" id="category" value="<?php echo $fetched_data['category_id'] ?>" 
							<?php if(isset($_GET['id'])){ echo $cat_selected ; } ?>>
                            <?php echo $fetched_data['category_name'] ?>
                        </label>
                    <?php
                    }
                    ?>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Enter Your Highest Qualification</b></label>
					<input type="text" class="form-control" placeholder="Enter your qualification *" 
						name="Degree" value="<?php  echo $result['Degree'];  ?>" required/>
					
					</div>
					
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Email ID</b></label>
					<input type="text" class="form-control" placeholder="Enter your qualification *" 
						name="Email" value="<?php  echo $result['Email'];  ?>" required/>
					
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Prefered Language</b></label>
					<input type="text" class="form-control" placeholder="Enter your qualification *" 
						name="post" value="<?php  echo $result['post'];  ?>" required/>
						
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Regilion </b></label>
					<input type="text" class="form-control" placeholder="Enter your qualification *" 
						name="religion" value="<?php  echo $result['religion'];  ?>" required/>
						
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Present Address </b></label>
					<input type="text" class="form-control" placeholder="Enter your qualification *" 
						name="paddress" value="<?php  echo $result['paddress'];  ?>" required/>
					
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Permanent Address</b></label>
					<input type="text" class="form-control" placeholder="Enter your qualification *" 
						name="peraddress" value="<?php  echo $result['peraddress'];  ?>" required/>
				
					</div>
					
					<input type="submit" class="btnRegister"  name="submit" value="Submit"/>
				</div>
			</div>
				
		</form>
	</div>
</div>
</div>
	</div>
</div>


	</body>
</html>


<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter your name *" name="uname" 
						value="<?php  echo $result['name'];  ?>" required/>
					</div>
					
					<div class="form-group">
						<input type="tel" class="form-control" placeholder="Mobile number *" name="mobile" 
						value="<?php  echo $result['mobile'];  ?>" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder=" Any references *" name="refer" 
						value="<?php  echo $result['refer'];  ?>" required/>
					</div>
					<div class="form-group">
					<div class="form-check-inline">
                            <input type="radio" name="gender" id="male" <?php
                                    if (is_numeric($studentid) and $sudent_row_array['gender'] == 'male') echo 'checked';
                                    else echo '';
                                    ?> value="male">

                            <label class="form-check-label" for="inlineRadio1">male</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="gender" id="female" <?php
                                    if (is_numeric($studentid) and $sudent_row_array['gender'] == 'female')
                                    echo 'checked';
                                    else
                                     echo '';
                                    ?> value="female">
                            <label class="form-check-label" for="inlineRadio2">female</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="gender" id="others" value="other" <?php
                                    if (is_numeric($studentid) and $sudent_row_array['gender'] == 'others') echo 'checked';
                                    else echo '';
                                    ?>>
                            <label class="form-check-label" for="inlineRadio3">others</label>
                        </div>
					</div>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Category</b></label><br>
					<?php
                    $cat_selected = '';
                    $sqlcat = 'select * from category_master';
                    $resultcat = mysqli_query($con, $sqlcat);
                    while ($fetched_data = mysqli_fetch_array($resultcat)) {
                        if (is_numeric($studentid))
                            if ($fetched_data['category_id'] == $sudent_row_array['category']) {
                                $cat_selected = 'checked';
                            } else {
                                $cat_selected = '';
                            }
                    ?>
                        <label style="margin-top: 1rem; margin-left: 2px;">
                            <input type="radio" name="category" id="category" value="<?php echo $fetched_data['category_id'] ?>" 
							<?php if(isset($_GET['id'])){ echo $cat_selected ; } ?>>
                            <?php echo $fetched_data['category_name'] ?>
                        </label>
                    <?php
                    }
                    ?>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter your qualification *" 
						name="Degree" value="<?php  echo $result['Degree'];  ?>" required/>
					</div>
					
					<div class="form-group">
						<input type="email" class="form-control"  placeholder="Email id *" name="Email" value="<?php  echo $result['Email'];  ?>" required />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder=" Prefered language" name="post" value="<?php  echo $result['post'];  ?>" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder=" Any references *" name="refer" value="<?php  echo $result['religion'];  ?>" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder=" Any references *" name="refer" value="<?php  echo $result['paddress'];  ?>" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder=" Any references *" name="refer" value="<?php  echo $result['peraddress'];  ?>" required/>
					</div>
					
					<input type="submit" class="btnRegister"  name="submit" value="update"/>
				</div>
			</div>