
<html>
	<body>
		<style>
			body{
				background:url(f1.jpg);
				background-size:cover;
				margin:0;
			}


			table, th, td {
  			border: 2px solid black;
  			width:200px;
  			padding: 5px;
  			border-collapse: collapse;
  			text-align:center;
  			text-decoration:none;
				color:white;
			}
			table{
				margin: 4% 40%;
			}
		</style>

		<div style="text-align: right;">
		<a href="login.php" style="background-color:#AFEEEE;color:black;padding:11px 9px;margin:8px 0;border:none;cursor:pointer;width:auto;   text-decoration:none;text-align:right;"><b>LOGOUT<b></a>

	<?php
		session_start();
		if(isset($_SESSION['login_user'])){
			$user=$_SESSION['login_user'];
			$servername = "localhost";
  			$username = "root";
			$password = "";
			$dbname="medical";
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql="SELECT * FROM `register` WHERE username='$user'";
	 		$result = mysqli_query($conn,$sql);
      		$count = mysqli_num_rows($result);
      			if($count>0){
	 				$sql = "SELECT subjects FROM `register` WHERE username='$user'";
      				$result = mysqli_query($conn,$sql);
      				echo "<table>";
	      			echo "<tr>";
    	  			echo "<th>registerd subjects</th>";
      				echo "</tr>";
      				while($row=mysqli_fetch_array($result)){
      				echo "<tr>";
      				echo "<td>";
      				echo $row['subjects'];
 	     			echo "</td>";
    	  			echo "</tr>";
      			}
	   			echo "</table>";

  				}
  				else{


		?>

			<nav>
				<ul>
					<li><a href="cse.php">CSE</a></li>
					<li><a href="ece.php">ECE</a></li>
					<li><a href="mech.php">MECH</a></li>
					<li><a href="civil.php">CIVIL</a></li>
					<li><a href="mme.php">MME</a></li>
					<li><a href="chem.php">CHEM</a></li>
					<li><a href="#">BRANCHES</a></li>
				</ul>
			</nav>
		<?php
				}

		}
		?>

	</body>
</html>
