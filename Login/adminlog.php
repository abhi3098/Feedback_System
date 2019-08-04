<?php
$username = $_POST["username"];
$password = $_POST["password"];
$user="admin";
$pass="123";
if ($user==$username && $pass==$password)
    {
    header("Location:admin.php");
} 
    else
    {
    echo "Invalid Username or Password";
    header("Refresh:1;URL=admin.html");
    }
?>