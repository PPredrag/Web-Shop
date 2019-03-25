<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Obrada formulara</title>
	</head>
	<body>
	<?php

		$host = $_POST['host'];
		$korisnik = $_POST['korisnik'];
		$password = $_POST['password'];
		$baza = $_POST['baza_podataka'];
		$tabela = $_POST['tabela'];
		$naslov_knjige = $_POST['knjiga'];
		$oblast = $_POST['oblast'];
		switch($oblast)
		{
			case 'roman': 
			$oblast = 1;
			break;
			case 'poezija':
			$oblast = 2;
			break;
			case 'leksikografija';
			$oblast = 3;
			break;
			case 'racunarstvo';
			$oblast = 4;
			break;
			default:
			echo "Nepostojeca oblast knjige.";
			
		}
		
		$povezivanje = mysql_connect($host,$korisnik,$password);
		if(!$povezivanje)
		{
			die('Greska('. mysql_errno() . '):' . mysql_error());
		}
		
		$db = mysql_select_db($baza);
        $query = mysql_query("INSERT INTO " . $tabela . "(NASLOV, ID_OBLAST) VALUES('" . $naslov_knjige . "','" . $oblast . "');");
		$query1 = mysql_query("SELECT * FROM KNJIGA;");
		echo "Uspesno ste dodali knjigu!";
		echo "<br>";
		echo "Ukupan broj knjiga:" . mysql_num_rows($query1);
	
		
	?>
	</body>
</html>