



<?php
	
  	$servername = "localhost";
  	$username = "root";
	$password = "";
	$dbname="medical";
	session_start();

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}   


      if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $user = $_POST['name'];
      $pass = $_POST['password']; 
      if($_POST['option1']=="user"){
      
          $sql = "SELECT * FROM `signup` WHERE username='$user' and password='$pass'";
          $result = mysqli_query($conn,$sql);
          $count = mysqli_num_rows($result);
          if($count == 1) {
        
               $_SESSION['login_user'] = $user;  
               header("location:branch.php");
           }
          else {
              $error = "Your Login Name or Password is invalid";
              echo $error;
           }

	       
      }
		  else if($_POST['option1']=="admin"){
          if($user=="admin" and $pass=="123"){
             $_SESSION['login_user'] = $user; 
             header("location:admin.php");
           }
           else{
             echo "Wrong details";
           }

        }
      
   }
?>
