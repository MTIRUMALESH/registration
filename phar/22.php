<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">

	</head>
	<body>
		<?php
			session_start();

		if(isset($_POST["register"]))
		{
			$str="";

			if(isset($_POST["AI"]))	$str.=$_POST["AI"]."  ";
			if(isset($_POST["DIP"]))	$str.=$_POST["DIP"]."  ";
			if(isset($_POST["OOAD"]))	$str.=$_POST["OOAD"]."  ";
			if(isset($_POST["ES"]))	$str.=$_POST["ES"];

		}


			$servername ="localhost";
			$username ="root";
			$password ="";
			$dbname ="medical";
			$name=$_SESSION['login_user'];
			$branch=$_SESSION['branch'];

			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

		$Query = "INSERT INTO register(username,branch,subjects) VALUES('$name','$branch','$str')";

		if ($conn->query($Query) === TRUE) {
			    echo "registered successfully";


			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

		?>
		<div style="text-align: right;">
		<a href="branch.php" style="background-color:red;color:black;padding:11px 9px;margin:8px 0;border:none;cursor:pointer;width:auto;   text-decoration:none;text-align:right;"><b>LOGOUT<b></a>

	</body>
</html>
