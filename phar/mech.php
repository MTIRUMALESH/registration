<html>
<body>


		<form action="25.php" method="post">
		
		<h1>Subjects to Register</h1>

		<?php
			session_start();
			$_SESSION['branch']="MECH";
		?>		
		<input type="checkbox" name="AE"
		 value="AE"  />Auto Mobile<br>
		<input type="checkbox" name="MV"
		 value="MV" />Mechanical Vibrations<br>
		<input type="checkbox" name="CADM"
		 value="CADM" />Computer Aided Design and Manufaturing<br>
		<input type="checkbox" name="BOM"
		 value="BOM" />Business Organisation Management<br>
		<input type="checkbox" name="CADM LAB"
		 value="CADM LAB" />CADM LAB<br>
	        <input type="submit" name="register" value="register" />
		</form>


</body>
</html>
