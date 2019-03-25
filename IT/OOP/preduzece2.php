<?php
$host="localhost";
$user="root";
$pass = "";

$povezivanje = mysql_connect($host, $user , $pass);
	if(!$povezivanje)
	{
		die('Greska('. mysql_errno() . '):' . mysql_error());
	}
	$baza=mysql_select_db("mydb");
	$upit=mysql_query("SELECT  idRadnik, Ime , Prezime  FROM Radnik");
	
		 while ($niz = mysql_fetch_array($upit))
		 {
			echo "ID Radnika Je:" . $niz['idRadnik'] . "Ime mu je:" . $niz['Ime'] . "Preziva se: " . $niz['Prezime'] . "<br>";
		 
		 }		
					mysql_free_result($upit);
		
?>

