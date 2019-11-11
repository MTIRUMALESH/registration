<?php
	session_start();
	
if(isset($_POST["register"]))
{	
	$str="";

	if(isset($_POST["BE"]))	$str.=$_POST["BE"]."  ";
	if(isset($_POST["UTE"]))	$str.=$_POST["UTE"]."  ";
	if(isset($_POST["IPM"]))	$str.=$_POST["IPM"]."  ";
	if(isset($_POST["CEM"]))	$str.=$_POST["CEM"];

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
