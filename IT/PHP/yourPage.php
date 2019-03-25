<?php

	require "db.php";
	Connect::getInstance();
	$img_path = $_SESSION["img"];
	
	//echo $img_path;
	
	$dbId = Connect::getInstance()->query("SELECT * FROM users WHERE user_id = '" . $_SESSION['id'] . "'");
	
	
	$id = $_SESSION['id'];
	echo "Vas id je: ";
	echo $id;
	
	
	while($rw = mysqli_fetch_object($dbId))
	{
		Connect::getInstance()->query("UPDATE users SET img_path = '" . $img_path . "' WHERE user_id = '" . $id . "'");
		echo "<br /><h1>Dobro dosli: </h1><br />";
		echo "<img src=" . $img_path . " alt='' width='200'/>";
	}
	

?>
<hr><br /><a href="#">Odjavi me</a><br /><br />
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="img_upload" id="img" /><br /><br />
	<input type="submit" value="Promeni profilnu sliku" />
</form>

