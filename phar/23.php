<?php
	session_start();
	
if(isset($_POST["register"]))
{	
	$str="";

	if(isset($_POST["MC"]))	$str.=$_POST["MC"]."  ";
	if(isset($_POST["RC"]))	$str.=$_POST["RC"]."  ";
	if(isset($_POST["BOM"]))	$str.=$_POST["BOM"]."  ";
	if(isset($_POST["VLSIDVT"]))	$str.=$_POST["VLSIDVT"];

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
