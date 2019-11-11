<html>
<body>


		<form action="24.php" method="post">
		
		<h1>Subjects to Register</h1>

		<?php
			session_start();
			$_SESSION['branch']="CIVIL";
		?>		
		<input type="checkbox" name="BE"
		 value="BE"  />Bridge Engineering<br>
		<input type="checkbox" name="UTE"
		 value="UTE" />Urban Transportation Engineering<br>
		<input type="checkbox" name="IPM"
		 value="IPM" />Infrostructure and Planning and Management<br>
		<input type="checkbox" name="CEM"
		 value="CEM" />Construction Economics and Management<br>
	        <input type="submit" name="register" value="register" />
		</form>


</body>
</html>