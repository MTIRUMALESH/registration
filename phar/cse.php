<html>
<body>


		<form action="22.php" method="post">
		
		<h1>Subjects to Register</h1>

		<?php
			session_start();
			$_SESSION['branch']="CSE";
		?>		
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


</body>
</html>