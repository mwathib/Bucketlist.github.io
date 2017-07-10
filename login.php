<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>Bucketlist</title><meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="css/matrix-login.css" />
		<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

	</head>
	<body>
		<!-- start Login page-->
		<div id="loginbox">            
			<form id="loginform" class="form-vertical" action="index.php">
				 <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>



				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
						</div>
					</div>

				</div>



			   
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" />
						</div>
					</div>
				</div>


				<div class="form-actions">
					<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Sign Up</a></span>
					<span class="pull-right"><a type="submit" href="index2.php" class="btn btn-success" /> Sign In</a></span>
				</div>
			<!--End login page-->
			</form>
		<!--Start Registration page-->
			<form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your Username, Email address and password.</p>
				
				   
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" />
						</div>
					</div>
				
					<br>


					 <div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
						</div>
					</div>
					<br>

					
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" />
						</div>
					</div>
				
					<br>
			   
				<div class="form-actions">
					<span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
					<span class="pull-right"><a class="btn btn-info" href="login.php"/>Register</a></span>
				</div>
		<!--End registration page-->
			</form>
		</div>
		
		<script src="js/jquery.min.js"></script>  
		<script src="js/matrix.login.js"></script> 
	</body>

</html>
