<html>
<body>


		<form action="26.php" method="post">
		
		<h1>Subjects to Register</h1>

		<?php
			session_start();
			$_SESSION['branch']="CHEM";
		?>		
		<input type="checkbox" name="FE"
		 value="FE"  />Fluidization Engineering<br>
		<input type="checkbox" name="PPCT"
		 value="PPCT" />Petrolium and Petro Chemical Technology<br>
		<input type="checkbox" name="POCE"
		 value="POCE" />Process Optimization Chemical Engineering<br>
		<input type="checkbox" name="IPM"
		 value="IPM" />Infrastructure Planning and Management<br>
	        <input type="submit" name="register" value="register" />
		</form>


</body>
</html>