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
	if($pass==$conformpassword){
		$sql= "SELECT * FROM `signup` WHERE `username`='$user'";
		$result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
       
        if($count == 0) {
   
        	$sql = "INSERT INTO `signup` (`username`, `email`, `password`) VALUES ('$user', '$email', '$pass')";
		
			if ($conn->query($sql)) {
	   			echo "New record created successfully";
	    	 	header("location: login.php");
			} 
			else {
	   			echo "Something went wrong " ;

			}	
              
        }
        else{
        	echo "User alredy exists";
        }
		
	}
	else{
		echo("password not equal");
	}
	
	$conn->close();

?>
