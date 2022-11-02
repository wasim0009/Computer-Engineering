<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link href="style1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style1.css">


</head>
<body>
	<center>
	<!-- <center><br><br>
	<h3>Student Management System</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="student_login" value="Student Login" required>
	</form> -->
	<body class="img js-fullheight" style="background-image: url(https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section"><b>School Management System<b></h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="" class="signin-form" method="POST">
		      		<div class="form-group">
		      			<input type="submit" class="form-control" name="admin_login" placeholder="" value="Admin Login" required>
		      		</div>
					OR
	            <div class="form-group">
	              <input type="submit" class="form-control" name="student_login" placeholder="" value="Student Login" required>
	              
	            </div>
	            <!-- <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	             -->
	            
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="https://www.facebook.com/login/" class="px-2 py-2 mr-md-1 rounded"><span class= "ion-logo-facebook mr-2"></span>Facebook</a>
	          	<a href="https://twitter.com/i/flow/login" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>
