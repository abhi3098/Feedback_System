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
$sql = "SELECT username, password FROM faculty WHERE username ='$username' and password='$password'";
$result= $conn->query($sql);
$row= $result->fetch_assoc();
    if ($row["username"]==$username && $row["password"]==$password)
    {
    header("Location:Faculty.php");
} 
    else
    {
         echo "<h1>Invalid Username Or Password</h1>";
         header("Refresh:1; URL=faclog.php");
   $conn->close();
    }
?>