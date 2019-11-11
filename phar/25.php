<?php
	session_start();
	
if(isset($_POST["register"]))
{	
	$str="";

	if(isset($_POST["AE"]))	$str.=$_POST["AE"]."  ";
	if(isset($_POST["MV"]))	$str.=$_POST["MV"]."  ";
	if(isset($_POST["CADM"]))	$str.=$_POST["CADM"]."  ";
	if(isset($_POST["BOM"]))	$str.=$_POST["BOM"]."  ";
	if(isset($_POST["CADM LAB"]))	$str.=$_POST["CADM LAB"];

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
