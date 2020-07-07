<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	  <!--favicone-->
	  <link rel="shortcut icon" href="favicon.png" />
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="signup.php">Sign up</a>
		</p>
		<p>forgot password: <a href = "setting.php">click here!</a> </p>
	</form>


</body>
</html>