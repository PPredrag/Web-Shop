<?php
	
	$host = $_POST["host"];
	$user = $_POST["username"];
	$pass = $_POST["lozinka"];
	$baza = $_POST["ime_baze"];
	
	
	
	$ime = $_POST["ime"];
	$e_mail = $_POST["e_mail"];
	
	$conn = new mysqli($host,$user,$pass,$baza); 
	if($conn->connect_errno)
	   {
		   echo "Greska:" . $mysqli->connect_error;
	   }
	
	$query = "INSERT INTO korisnik (ime, e_mail) 
				VALUES ('$ime', '$e_mail')";
	$result=$conn->query($query);
	
	$iD = "SELECT idKorisnik FROM kip.korisnik WHERE ime= '$ime' ";
	$result_iD = $conn->query($iD);
	$idKorisnik = $result_iD-> fetch_assoc();
	echo "Korisnik :"  . $ime . " je zaveden pod idKorisnik: " . $idKorisnik['idKorisnik'] . " u bazi podataka .<br><br>";

	
	$allowedExts = array("jpg","jpeg","gif", "png");
	$explodeArray = explode(".",$_FILES["file"]["name"]);
	$extension = end($explodeArray);
	
	if ((
		($_FILES["file"]["error"] == "image/gif")
		|| ($_FILES["file"]["error"] == "image/jpeg")
		|| ($_FILES["file"]["error"] == "image/png")
		|| ($_FILES["file"]["error"] == "image/pjpeg")
		)
		&& ($_FILES["file"]["error"] < 50000)
		&& in_array($extension,$allowedExts)
		)
	{
		if ($_FILES["file"]["error"] >0)
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		}
		else 
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . "kB<br>";
			echo "Stored in: " . $_FILES["file"]["tmp_name"] . "<br>";
			
			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				echo "<p style='color: #FF0000;'>" . $_FILES["file"]["name"] . "already exists.</p>";
			}
			else 
			{
				$filePath ="upload/" . $_FILES["file"]["name"];
				move_uploaded_file($_FILES["file"]["tmp_name"],$filePath);
				echo "Stored in: $filePath";
			}
		}
		
	}
	else
	{
		echo "Neispravna datoteka";
	}
	

?>