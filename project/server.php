<?php
	session_start();
	$username="";
	$email="";
	$user="";
	$errors=array();

	//database stuff
	require("dbinfo.php");
	$table = "accountinfo";

	//if submit is clicked
	if(isset($_POST['register']))
	{
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$pass=mysqli_real_escape_string($db,$_POST['pass']);
		$cpass=mysqli_real_escape_string($db,$_POST['cpass']);
		$user=$_POST['user'];
		$fullname = $_POST['name'];
		$profurl = $_POST['photo'];
		$phone = $_POST['phone'];

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
			
			$loginid = md5(time().$username);
			setcookie("loginId", $loginid, time() + 60*60); //logged in for an hour
			setcookie("username", $username, time() + 60*60);
			setcookie("profgetusername", $username); //this cookie determines whose profile opens up when the person opens profile_page.php

			$sql="INSERT INTO $table (username,email,password,acctype,loginid,fullname,profpicurl,phno) 
					VALUES ('$username','$email','$password','$user', '$loginid', '$fullname','$profurl','$phone')";
			mysqli_query($db,$sql);
			$_SESSION['username']=$username;
			$_SESSION['success']="You are noe logged in";
			header('location: profile_page.php'); //redirect to homepage
		}
	}
?>