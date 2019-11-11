<html>
<body>


		<form action="27.php" method="post">
		
		<h1>Subjects to Register</h1>

		<?php
			session_start();
			$_SESSION['branch']="MME";
		?>		
		<input type="checkbox" name="BOM"
		 value="BOM"  />Business Organisation Management<br>
		<input type="checkbox" name="EP"
		 value="EP" />EP<br>
		<input type="checkbox" name="MJT"
		 value="MJT" />MJT<br>
		<input type="checkbox" name="VLSIFT"
		 value="VLSIFT" />VLSIFT<br>
	        <input type="submit" name="register" value="register" />
		</form>


</body>
</html>