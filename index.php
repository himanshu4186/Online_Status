<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Log_In</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php session_start(); ?>

	<header>
		
	</header>

		<div class="container class123">


			<?php
		
	
		 if(isset($_SESSION['msg']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center> <i>';
			echo $_SESSION['msg'];
			echo "</i></center></font></p>";
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['error']))
		{
			echo '<p class="error-message"> <font size="6" color="White"> <center><i>';
			echo $_SESSION['error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['error']);
		}
		 if(isset($_SESSION['reg']))
		{
			echo '<p class="message"> <font size="5" color="White"><center> <i>';
			echo $_SESSION['reg'];
			echo "</i> <center></font></p>";
			unset($_SESSION['reg']);
		}
		if(isset($_SESSION['reg_error']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['reg_error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['reg_error']);
		}
		if(isset($_SESSION['change']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['change'];
			echo "</i> </center></font></p>";
			unset($_SESSION['change']);
		}
		
		?>
		
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
			<section class="main">
				<form class="form-4" action="check.php" method ="POST" >
				 
				    <p>
				        Email
				        <input type="email" class="form-control" name="Email" placeholder="eg:abc@gmail.com" required>
				    </p>
				    <p>
				        Password
				        <input type="password" class="form-control" name='Password' placeholder="eg:your password" required>
				    </p>
				        <input type="submit" class="btn btn-primary" name="submit" value="Sign In">
				
				</form>​
				

			</section>

			
			<div class='modal fade' id='div_mo'> 
		<div class='modal-dialog'>
			<div class='modal-content'> 
				<div class='modal-header'>
				<h1>Register a new user</h1>
				<button class='close' data-dismiss='modal'>&times;</button>
				</div>
				<div class='modal-body'> 
					<form action="register.php" method ="POST" id='u_f'> 
						<div class='form-group'>
						<label for="div3">Username</label> 
						<input type="text" class='form-control' name="Username" id='div5' required>
						</div>
						
						<div class='form-group'>
						<label for="div3">E-Mail</label> 
						<input type="email" class='form-control' name="Email" id='div3' required>
						</div>
						
						<div class='form-group'>
						<label for="div4">Password</label> 
						<input type="password" class='form-control' name="Password" id='div4' required>
						</div>
									
				</div>
				<div class='modal-footer'>
				<input type="submit" class='form-control btn btn-success' value="Register" name='sub'>
				</div>
				</form>
			</div>
		</div>
	</div>
		<button class='btn btn-primary ' data-toggle='modal' data-backdrop='static' data-target='#div_mo'>Register now</button><br>	<br><br><br>
			
	</div>
		

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	
</body>

</html>