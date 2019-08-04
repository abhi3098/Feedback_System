<?php
	$con= mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	if(!mysqli_select_db($con,'feedback'))
	{
		echo 'Database Not Selected';
	}
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
  $gender=$_POST['gender'];
  $contact=$_POST['contact'];
	$password=$_POST['password'];
	$sql="INSERT INTO student (username,password,email,contact,gender) VALUES ('$username','$password','$email','$contact','$gender')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
		//header("Refresh: 1;Url=../MainPage.html");
	}
?>
