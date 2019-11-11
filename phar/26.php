<?php
	session_start();
	
if(isset($_POST["register"]))
{	
	$str="";

	if(isset($_POST["FE"]))	$str.=$_POST["FE"]."  ";
	if(isset($_POST["PPCT"]))	$str.=$_POST["PPCT"]."  ";
	if(isset($_POST["POCE"]))	$str.=$_POST["POCE"]."  ";
	if(isset($_POST["IPM"]))	$str.=$_POST["IPM"];

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
