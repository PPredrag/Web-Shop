<?php
	/*
		Rešenje ovog zadatka nije dobro!
		Skript radi, ali postoji dosta prostora za njegovo unapređenje
		Na sledećem kursu ćemo se baviti arhitekturom rešenja i videti kako zapravo treba da se piše jedna aplikacija
	*/
	
	if (!ISSET($_POST["submit"]))
	{
		header("Location:zad3.html");
		exit;
	}

	$tableID = 0;
	if (ISSET($_POST["tabela"]))
	{
		$tableID = $_POST["tabela"];
	}
	
	$tableName = "";
	switch($tableID)
	{
		case 1:
			$tableName = "K";
			break;
		case 2:
			$tableName = "I";
			break;
		case 3:
			$tableName = "P";
			break;
	}
	
	if ($tableName == "")
	{
		echo "Niste odabrali odgovarajuću vrednost";
		exit;
	}

	$mysqli = mysqli_connect("localhost", "root", "", "kip");
	if(mysqli_errno($mysqli) > 0)
	{
		echo "Greska pri povezivanju sa bazom: ";
		echo mysqli_error($mysqli);
		exit;
	}
	
	$query = "SELECT * FROM $tableName";
	$result = mysqli_query($mysqli, $query);
	
	$insertQueries = "INSERT INTO $tableName VALUES ";
	$i = 0;
	while ($niz = mysqli_fetch_assoc($result))
	{
		if ($i != 0)
		{
			$insertQueries .= ",";
		}
		$insertQueries .= "(";
		$j = 0;
		foreach ($niz as $kolona)
		{
			if ($j != 0)
			{
				$insertQueries .= ",";
			}
			$insertQueries .= "'" . $kolona . "'";
			$j++;
		}
		$insertQueries .= ")";
		$i++;
	}
	$insertQueries .= ";"; 
	
	
	/*
		Vezba: 
			* Prosirite zadatak tako da se u zasebnoj datoteci nalazi funkcije za generisanje datoteke (koristite include)
			* Umesto da se kod nalazi u funkciji, pokusajte da kod postavite u klasu
		
	*/
	$filename = "$tableName.export.sql";  
	$fp = fopen($filename, "w");   
	fwrite($fp, $insertQueries);   
	fclose($fp);
	
?>