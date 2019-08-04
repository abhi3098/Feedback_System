

<html>
<head>
<title>login</title>
<style>
.box{
width: 600px;
height:1000px;
border:5px solid black;
margin-left:20%;
margin-top:5%;
padding-left:10px;
background-color:#F9F9F9;
background-image:FB/Image/s.jpg;
}
.box p{
font size: 30%;
}
p{
font size:40%;
}
.box button{
background:black;
color:#fff;
}
.box1{
width:400px;
height:380px;
border:5px solid black;
margin-left:20%;
margin-top:5%;
padding:10px;
}
</style>

</head>
<body>
<?php
$servername ="localhost";
$dbname = "feedback";
$user= "root";
$pass= "";
//variables
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];


// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT username, password FROM fb WHERE username ='$username' and password='$password'";
$result= $conn->query($sql);
$row= $result->fetch_assoc();

if ($row["username"]==$username && $row["password"]==$password)
{
echo "<h1>YOU ALREADY SUBMITED</h1>";
header('refresh:2;URL=../MAinPage.html');
}
else
echo '
<div class="box">
<form method="post" action="student.php">
<p>
<center style="font-size:130%;">Feedback<hr></center>
<br>
Faculty Name</p>
<input type="text" name="fname"placeholder="Faculty Name" required> 
<p>Course Code</p>
<input type="text" name="course" placeholder="Subject" required>
<br>
<p>Semister</p>
<input type="text" name="sem" placeholder="semister" maxlength="1" required>
<br>
<br>
<div style="padding-bottom: 18px;">1.Level of communication<br/>
<select name="comuni" style="width : 500px;" required>
<option value="5">Very good</option>
<option value="4">Good</option>
<option value="3">Fair</option>
<option value="2">Poor</option>
<option value="1">Very poor</option>
</select>
</div>
<br>
    
<div style="padding-bottom: 18px;">
2.Level of knowledge on start of course<br/>
<select name="know" style="width : 500px;" required>
<option value="5">Very good</option>
<option value="4">Good</option>
<option value="3">Fair</option>
<option value="2">Poor</option>
<option value="1">Very poor</option>
</select>
</div>
    
<br>
<div style="padding-bottom: 18px;">3.Level of effort invested in course<br/>
<select name="know_end" style="width : 500px;" required>
<option value="5">Very good</option>
<option value="4">Good</option>
<option value="3">Fair</option>
<option value="2">Poor</option>
<option value="1">Very poor</option>
</select>
</div>

<br>
<div style="padding-bottom: 18px;">4.Level of knowledge at the end of the course<br/>
<select name="effort" style="width : 500px;"required>
<option value="5">Very good</option>
<option value="4">Good</option>
<option value="3">Fair</option>
<option value="2">Poor</option>
<option value="1">Very poor</option>
</select>
</div>

<br>
<div style="padding-bottom: 18px;">5.Overall teaching experience<br/>
<select name="overall" style="width : 500px;" required>
<option value="5">Very good</option>
<option value="4">Good</option>
<option value="3">Fair</option>
<option value="2">Poor</option>
<option value="1">Very poor</option>
</select>
</div>
    
<br>
<label for="comments">
Comments:</label><br>
<textarea type="textarea" name="comment"placeholder="Your Comments" maxlength="600" rows="7" cols="70" required></textarea>
<br>
<br>
<input type="Submit" value="Submit">
</form>
</div>';
    ?>
</body>
</html>