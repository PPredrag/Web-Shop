<?php

	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$explodedArray = explode(".", $_FILES["file"]["name"]);
	$extension = end($explodedArray);

	if ((
			($_FILES["file"]["type"] == "image/gif") 
			|| ($_FILES["file"]["type"] == "image/jpeg") 
			|| ($_FILES["file"]["type"] == "image/png") 
			|| ($_FILES["file"]["type"] == "image/pjpeg")
		)
		&& ($_FILES["file"]["size"] < 20000)
		&& in_array($extension, $allowedExts)
		)
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		}
		else
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			echo "Stored in: " . $_FILES["file"]["tmp_name"];
			
			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				echo "<p style='color: #FF0000;'>" . $_FILES["file"]["name"] . " already exists. </p>";
			}
			else
			{
				$filePath = "upload/" . $_FILES["file"]["name"];
				move_uploaded_file($_FILES["file"]["tmp_name"], $filePath);
				echo "Stored in: $filePath";
			}
		}
	}
	else
	{
		echo "Neispravna datoteka";
	}

	//jpg datoteke se drugacije prepoznaju od razl. pregledaca: IE:pjpeg, FF:jpeg
?>

