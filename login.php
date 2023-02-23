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
		<?php
		include 'templates/navbar.php';
		?>
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
		<h3 class="register-heading">Apply for Company placement  </h3>
		
		<form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<?php if (isset($_SESSION['user'])) {
                    echo 'you have login successfully', $_SESSION['user'];
                }
                ?>
			<div class="row register-form">
				
				<div class="col-md-6">
				<div class="form-group">
				<label for="exampleFormControlFile1"><b>Student photo </b></label>
				<input type="file" id="myfile" name="studentphoto">
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Enter Your FullName </b></label>
						<input type="text" class="form-control" placeholder="Enter your name *" name="uname" value="" required/>
					</div>
					
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Phone Number *</b></label>
						<input type="tel" class="form-control" placeholder="Mobile number *" name="mobile" value="" required/>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Any Reference* </b></label>
						<input type="text" class="form-control" placeholder=" Any references *" name="refer" value="" required
						/>
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
						<input type="text" class="form-control" placeholder="Enter your qualification *" name="Degree" value="" required
					/>
					</div>
					
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Email ID</b></label>
						<input type="email" class="form-control"  placeholder="Email id *" name="Email" value="" required 
					/>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Prefered Language</b></label>
						<input type="text" class="form-control" placeholder=" Prefered language" name="post" value=""
						/>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Regilion </b></label>
						<input type="text" class="form-control" placeholder=" Religion" name="religion" value="" 
						/>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Present Address </b></label>
						<input type="text" class="form-control" placeholder=" Present Address" name="paddress" value=""
					/>
					</div>
					<div class="form-group">
					<label for="exampleFormControlFile1"><b>Permanent Address</b></label>
						<input type="text" class="form-control" placeholder=" Permanent Address" name="peraddress" value=""
				/>
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

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$photo=$_FILES['studentphoto'];
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
	$peraddress =  mysqli_real_escape_string( $con,  $_POST['peraddress']); 

    $photo_ar=$_FILES['studentphoto'];
    $photonm=$photo_ar['name'];
    $time=time();
    $filename=$time.$photonm;
    move_uploaded_file($photo_ar['tmp_name'],"upload_image/$filename");

	$insertquery = "insert into form(studentphoto,name,mobile,refer,gender,category,Degree,Email,post,religion,paddress,peraddress) 
	values('$photo','$uname', '$mobile', '$refer', '$gender', '$category', '$Degree','$Email','$post','$religion','$paddress','$peraddress') ";

	$query = mysqli_query($con, $insertquery);

	if($query){
	?>
	<script>
		alert('Inserted successfull'); 
	</script>

	<?php
    }else{
	?>
	<script>
		alert('No Inserted ');
	</script>

	<?php
}


}


?>

<?php
include 'templates/footer.php';
?>