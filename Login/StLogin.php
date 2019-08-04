<?php
$servername ="localhost";
$dbname = "feedback";
$user= "root";
$pass= "";
$username = $_POST["username"];
$password = $_POST["password"];
// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT username, password FROM student WHERE username ='$username' and password='$password'";
$result= $conn->query($sql);
$row= $result->fetch_assoc();
setcookie("username",$username,time()+(86400*30),"/");
setcookie("password",$password,time()+(86400*30),"/");
    if ($row["username"]==$username && $row["password"]==$password)
    {
        header("Location:feedback.php");
} 
    else
    {
    echo "Invalid Username or Password";
        header("Refresh:1;URL=StuLog.html");
    }
   $conn->close();
?>