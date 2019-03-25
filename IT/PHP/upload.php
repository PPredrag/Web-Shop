<?php
	require "db.php";

	$allowedExt = array("jpg","jpeg","png","gif");
	$explodeArray = explode(".", $_FILES['img_upload']["name"]);
	$ext = end($explodeArray);
	
	if((
		($_FILES['img_upload']["type"] == "image/gif")
		|| ($_FILES['img_upload']["type"] == "image/jpeg")
		|| ($_FILES['img_upload']["type"] == "image/png")
		|| ($_FILES['img_upload']["type"] == "image/pjpeg")
		|| ($_FILES['img_upload']["type"] == "image/jpg")
	)	
	&&
		($_FILES['img_upload']["size"] < 2000000)
		&& in_array($ext, $allowedExt)
	)
	{
		if($_FILES['img_upload']['error'] > 0)
		{
			echo "Error: " . $_FILES['img_upload']['error'] . "<br />";
		}
		else
		{
			echo "Upload: " . $_FILES['img_upload']["name"] . "<br />";
			echo "Type: " . $_FILES['img_upload']["type"] . "<br />";
			echo "Upload: " . ($_FILES['img_upload']["size"] / 1024) . "kb <br />";
			echo "Upload: " . $_FILES['img_upload']["tmp_name"] . "<br />";
			
			if(file_exists("upload/" . $_FILES['img_upload']["name"]))
			{
				echo "<p>" . $_FILES['img_upload']["name"] . " alredy exists</p>";
			}
			else
			{
				$filepath = "upload/" . $_FILES['img_upload']["name"];
				$_SESSION["img"] = $filepath;
				move_uploaded_file($_FILES['img_upload']["tmp_name"], $filepath);
				$_SESSION["img"] = $filepath;
				header("Location: yourPage.php");
				
			}
			
			
		}
	}
	else 
	{
		echo "Neisparvna datoteka";
	}

?>