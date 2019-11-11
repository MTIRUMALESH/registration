<html>
<body>


		<form action="23.php" method="post">
		
		<h1>Subjects to Register</h1>

		<?php
			session_start();
			$_SESSION['branch']="ECE";
		?>		
		<input type="checkbox" name="MC"
		 value="MC"  />Mobile Communication<br>
		<input type="checkbox" name="RC"
		 value="RC" />Radar Communicaton<br>
		<input type="checkbox" name="BOM"
		 value="BOM" />Business and Organisation Management <br>
		<input type="checkbox" name="VLSIDVT"
		 value="VLSIDVT" />VLSIDVT<br>
	        <input type="submit" name="register" value="register" />
		</form>


</body>
</html>