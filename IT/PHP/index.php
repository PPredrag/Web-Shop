<!doctype html>
<head>
	<title>Idemo Igramo</title>
	<meta charset="UTF-8" />
	<?php
	require "db.php";
	
	?>
</head>
<body>
	<form action="login.php" method="POST" enctype="multipart/form-data">
		Email: <br />
		<input type="text" name="email" id="email" /><br />
		Password: <br />
		<input type="text" name="password" id="password" /><br />
		<input type="submit" value="Login" />
	</form>
	
	<a href="register.php">Registrujte se</a>
	
</body>
</html>

