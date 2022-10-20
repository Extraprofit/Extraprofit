<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login and Registration
		System - LAMP Stack
	</title>
	
	<link rel="stylesheet" type="text/css"
			href="style.css">
			
							


</head>
<body background="images/bg4.jpg">
	<div class="header" style="background-image:url(images/bg.jpg)">
		<h2>Login Here!</h2>
	</div>
	
	<form method="post" action="login.php" style="background-image:url(images/bg3.jpg)">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group" >
			<label>Enter Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
						name="login_user">
				Login
			</button>
		</div>
		


<p>
			New Here?
			<a href="register.php">
				Click here to register!
			</a>
	  </p>



	</form>
</body>

</html>
