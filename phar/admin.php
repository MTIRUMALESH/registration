<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <h1>Students Details</h1>
    <style>
    body{
      background:url(f1.jpg);
      background-size:cover;
      margin:0;
    }
    h1{
      text-align: center;
      color: lightgreen;
    }
    table, th, td {
      border: 2px solid black;
      width:350px;
      padding: 5px;
      border-collapse: collapse;
      text-align: center;
      color: black;

    }
    table{
      margin: 4% 35%;
    }
    </style>



  </head>
  <body>

    	<div style="text-align: right;">
    	<a href="login.php" style="background-color:#AFEEEE;color:black;padding:11px 9px;margin:8px 0;border:none;cursor:pointer;width:auto;   text-decoration:none;text-align:right;"><b>LOGOUT<b></a>
    	</div>
    <?php
    		session_start();
    		if(isset($_SESSION['login_user'])){
    			$user=$_SESSION['login_user'];
    			$servername = "localhost";
      			$username = "root";
    			$password = "";
    			$dbname="medical";


    			$conn = new mysqli($servername, $username, $password, $dbname);
    			if ($conn->connect_error) {
    	   		 die("Connection failed: " . $conn->connect_error);
    			}


    			$sql="SELECT * FROM `register`";

    	 		$result = mysqli_query($conn,$sql);

          		$count = mysqli_num_rows($result);
          		if($count>0){



    	 			$sql = "SELECT * FROM `register` ";
          			$result = mysqli_query($conn,$sql);

          				echo "<table>";
          				echo "<tr>";
          				echo "<th>Student name</th>";
                  echo "<th>Branch</th>";
          				echo "<th>Registered subjects</th>";
          				echo "</tr>";
          			while($row=mysqli_fetch_array($result)){

          				echo "<tr>";
          				echo "<td>";
          				echo $row['username'];
          				echo "</td>";
                  echo "<td>";
                  echo $row['branch'];
          				echo "</td>";
                  echo "<td>";
          				echo $row['subjects'];
          				echo "</td>";
          				echo "</tr>";


          			}
          			echo "</table>";
      			}
      			else{
      				echo "error";

      			}




    		}
    ?>
  </body>
</html>
