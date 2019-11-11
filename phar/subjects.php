<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medical";
	$user=$_POST["name"];	
	$email = $_POST["email"];
	$pass=$_POST["password"];
	$conformpassword =$_POST["conformpassword"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	if($pass==$conformpassword)
	{
	$sql = "INSERT INTO rigister (username, email, password)
	VALUES ('$user', '$email', '$pass')";
	}
	else
	{
		die("password not equal");
	}
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header("Location: login.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
