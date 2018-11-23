<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="reg.css ">
	<link rel="icon" type="image" href="logo.jpg">
</head>
<style>

</style>
<body background="tag2.jpg">
	
	<div id="my_div">
		<form method="post" action="Register Page.php" align="center">
			<!--display errors=-->
			<?php include('errors.php'); ?>
			<input type="email" name="email" placeholder="Email"><br><br>
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="Password" name="pass" placeholder="Password"><br><br>
			<input type="Password" name="cpass" placeholder="Confirm Password"><br><br>
			Registering As<br>
		 	<input type="radio" name="user" value="student">Student
			<input type="radio" name="user" value="teacher">Teacher<br><br>
			<input type="submit" name="register">
			<input type="reset">
			<p>
				Already a memeber? <a href="login.html">Sign In</a>
			</p>
		</form>
	</div>
	<pre style="color:black">"Research is what I'm doing,<br> when I don't know what I'm doing."<br>               -Wernhen Von Braun</pre> 


</body>
</html>