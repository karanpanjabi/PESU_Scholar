<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="new_style.css">
</head>
<body background="tag2.jpg">
	<div class="main">&nbsp;&nbsp;&nbsp;Register
			<span>
			<a href="login.html" class="navi">Your Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="" class="navi">Contact Us</a>&nbsp;&nbsp;|&nbsp;
			<a href="" class="navi">About</a>&nbsp;&nbsp;</span>
	</div>

<!-- ******************************************************************************************************** -->
	<form method="post" action="new_register.php" align="center">
			<input type="text" name="name" placeholder="Full Name" required=""><br>
			<input type="email" name="email" placeholder="Email" required=""><br>
			<input type="text" name="phone" placeholder="Phone number" required=""><br>
			<input type="text" name="photo" placeholder="Profile Picture Link" required=""><br>
			<input type="text" name="username" placeholder="Username" required=""><br>
			<input type="Password" name="pass" placeholder="Password" required=""><br>
			<input type="Password" name="cpass" placeholder="Confirm Password" required=""><br>
			Registering As<br>
		 	<input type="radio" name="user" value="student">Student
			<input type="radio" name="user" value="teacher">Teacher<br>
			<input type="submit" name="register">
			<input type="reset">
			<p>
				Already a memeber? <a href="login.php">Sign In</a> 
			</p>
	</form>
	<pre>"Research is what I'm doing,<br> when I don't know what I'm doing."<br>               -Wernhen Von Braun</pre>




</body>
</html>