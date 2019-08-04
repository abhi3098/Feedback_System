<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'feedback'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM fb';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Student review's</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}
		/* Table Footer */
		.bg
		{
			padding:10px;
            width:80%;
            text-align: center;
            margin: 30px;
            margin-left:130px;
            background-color: #ffcccc;
			font-size: 14px;
            transition: all .5s;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 15px;
        }
        .bg:hover{
			background-color: #ffffa2;
			border-color: #ffff0f;
        }
	</style>
</head>
<body>
	<h1>Student Review's</h1>
    <?php
    $no=0;
		while ($row = mysqli_fetch_array($query))
		{
            $no++;
	    echo '<div class="bg"><q>'.$row['f_name'].'</q></div>';
	    echo '<div class="bg"><q>'.$row['course'].'</q></div>';
	    echo '<div class="bg"><q>'.$row['sem'].'</q></div>';
	    echo '<div class="bg"><q>'.$row['comuni'].'</q></div>';
	    echo '<div class="bg"><q>'.$row['know_end'].'</q></div>';
	    echo '<div class="bg"><q>'.$row['effort'].'</q></div>';
	    echo '<div class="bg"><q>'.$row['overall'].'</q></div>';
            echo '<div class="bg"><q>'.$row['comment'].'</q></div>';
        }?>
    </body>
</html>