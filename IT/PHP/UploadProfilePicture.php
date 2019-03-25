<?php
	require "db.php";
	Connect::getInstance();
	$upit = Connect::getInstance()->query("SELECT * FROM users WHERE mail = '" . UserLogin::returnEmail() . "'");
	while($rw = mysqli_fetch_object($upit))
	{
		echo $rw->name;
		echo "<br /><img src=" . $rw->img_path . "><br /><br />";
	}
	
?>	
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="img_upload" id="img" /><br />
	<input type="submit" value="Promeni profilnu sliku" />
</form>