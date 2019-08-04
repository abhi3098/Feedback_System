<?php
$servername ="localhost";
$dbname = "feedback";
$user= "root";
$pass= "";
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$contact = $_POST["contact"];
// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO register (username, password, email, contact, gender, account)
VALUES ('$username', '$password', '$email', '$contact', '$gender','2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: 404 ! server Not found";
}
$conn->close();
?>