<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Obrada formulara</title>
	</head>
	<body>
	<p><a href='zadatak1.html' style='text-decoration:none'>Nazad</a></p>
	<?php

		$host ="localhost";
		$user ="root";
		$pass ="";
		$db ="kip";
		
		$conn = new mysqli($host,$user,$pass,$db);
		if($conn->connect_errno)
		{
			echo "Greska:".$conn->connect_error;
		}
		
		$sifra = $_POST['sifra'];
		$naslov = $_POST['knjiga'];
		$oblast = $_POST['oblast'];
		
		
		if($sifra && $naslov && $oblast)
		{
			$result2 = $conn->query("SELECT K_SIF FROM K");
			while($red = $result2->fetch_assoc())
			{
				if($red['K_SIF'] == $sifra)
				{
				die("Uneli ste postojecu sifru!");
				}
			}
			$result = $conn->query("INSERT INTO KIP.K (K_SIF, NASLOV, OBLAST) VALUES('" . $sifra . "','" . $naslov . "','" . $oblast . "');");
			echo "Uspesno ste dodali novu knjigu!";
		}
		else
		{
			echo "Niste popunili sva polja!";
		}
		
	
	
		
	
		
	?>
	</body>
</html>