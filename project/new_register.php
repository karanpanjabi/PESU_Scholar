<?php include('server.php'); ?>
<?php include('errors.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="new_style.css">
	<link rel="icon" type="image" href="logo.jpg">
</head>
<body background="tag2.jpg">
	<div class="main">&nbsp;&nbsp;&nbsp;Register
			<span>
			<a href="index.html" class="navi">Home</a>&nbsp;|
			<a href="login.html" class="navi">Your Profile</a>&nbsp;|
			<a href="contactus.html" class="navi">Contact Us</a>&nbsp;|
			<a href="about.html" class="navi">About</a>&nbsp;&nbsp;</span>
	</div>

<!-- ******************************************************************************************************** -->
	<form method="post" action="new_register.php" align="center">
			<input type="text" name="name" placeholder="Full Name" required=""><br>
			<input type="email" name="email" placeholder="Email" required=""><br>
			<input type="text" name="phone" placeholder="Phone number"><br>
			<input type="text" name="photo" placeholder="Profile Picture Link"><br>
			<input type="text" name="username" placeholder="Username" required=""><br>
			<input type="Password" name="pass" placeholder="Password" required=""><br>
			<input type="Password" name="cpass" placeholder="Confirm Password" required=""><br>
			Registering As<br>
		 	<input type="radio" name="user" value="student">Student
			<input type="radio" name="user" value="teacher">Teacher<br>
			<input type="submit" name="register">
			<input type="reset">
			<p>
				Already a memeber? <a href="login.php" style="color:blue;">Sign In</a> 
			</p>
	</form>
	<pre>"Research is what I'm doing,<br> when I don't know what I'm doing."<br>               -Wernhen Von Braun</pre>




</body>
</html>