<?php
$servername ="localhost";
$dbname = "feedback";
$user= "root";
$pass= "";
//variables
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];
$fname=$_POST["fname"];
$course = $_POST["course"];
$sem = $_POST["sem"];
$comuni = $_POST["comuni"];
$know_end = $_POST["know_end"];
$effort = $_POST["effort"];
$overall = $_POST["overall"];
$comment = $_POST["comment"];
// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO fb (username, password, f_name, course, sem, comuni, know_end, effort, overall, comment) VALUES ('$username', '$password', '$fname', '$course', '$sem', '$comuni', '$know_end', '$effort', '$overall', '$comment')";

if ( $conn->query($sql)=== TRUE) {
    echo "<h1>Thanks For Your FeedBack.</h1>";
header('refresh:2;URL=../MAinPage.html');
}
else {
    echo "<h1>Error: 404 ! server Not found</h1>";
}
$conn->close();
?>