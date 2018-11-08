<?php
	session_start();
	$username="";
	$email="";
	$user="";
	$errors=array();
	//connect to database
	$db=mysqli_connect('localhost','root','','registration');

	//if submit is clicked
	if(isset($_POST['register']))
	{
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$pass=mysqli_real_escape_string($db,$_POST['pass']);
		$cpass=mysqli_real_escape_string($db,$_POST['cpass']);
		@$user=$_POST['user'];

		//ensure all fields are filled
		if($username=="")
		{
			array_push($errors,"Username is required");
		}
		if($email=="")
		{
			array_push($errors,"Email is required");
		}
		if($pass=="")
		{
			array_push($errors,"Password is required");
		}
		if($user=="")
		{
			array_push($errors,"User type is required");
		}
		if($pass != $cpass)
		{
			array_push($errors,"The two passwords don't match");
		}

		//if no errors save to database
		if(count($errors)==0)
		{
			$password=md5($pass); //encrypt password
			$sql="INSERT INTO users (username,email,password,user) 
					VALUES ('$username','$email','$password','$user')";
			mysqli_query($db,$sql);
			$_SESSION['username']=$username;
			$_SESSION['success']="You are noe logged in";
			header('location: home.php'); //redirect to homepage
		}
	}
?>