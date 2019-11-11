<?php
	session_start();
	
if(isset($_POST["register"]))
{	
	$str="";

	if(isset($_POST["BOM"]))	$str.=$_POST["BOM"]."  ";
	if(isset($_POST["EP"]))	$str.=$_POST["EP"]."  ";
	if(isset($_POST["MJT"]))	$str.=$_POST["MJT"]."  ";
	if(isset($_POST["VLSIFT"]))	$str.=$_POST["VLSIFT"];

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
