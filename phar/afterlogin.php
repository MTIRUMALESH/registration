
<html>
<body>	
		<style>
			table, th, td {
  			border: 2px solid black;
  			width:200px;
  			padding: 5px;
  			border-collapse: collapse;
  			text-align:center;
  			text-decoration:none;
			}
		</style>

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
		<form action="22.php" method="post">
		
		<h1>Subjects to Register</h1>
		
		<input type="checkbox" name="AI"
		 value="AI"  />Artificial Inteligence<br>
		<input type="checkbox" name="DIP"
		 value="DIP" />Digital Image Processing<br>
		<input type="checkbox" name="OOAD"
		 value="OOAD" />Object Oriented Analysis Degin<br>
		<input type="checkbox" name="ES"
		 value="ES" />Environmental Science<br>
	        <input type="submit" name="register" value="register" />
		</form>

		<?php
			}
		}
		?>

	<div style="text-align: right;">
	<a href="login.php" style="background-color:#AFEEEE;color:black;padding:11px 9px;margin:8px 0;border:none;cursor:pointer;width:auto;   text-decoration:none;text-align:right;"><b>LOGOUT<b></a>
</body>
</html>
