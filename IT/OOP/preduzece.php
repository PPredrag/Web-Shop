
<?php 
$host=$_POST['host'];
$user=$_POST['username'];
$pass=$_POST['lozinka'];
$kupac=$_POST['kupac'];
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$email=$_POST['email'];
$telefon=$_POST['telefon'];


$povezi=mysql_connect($host,$user,$pass); 

	if(!$povezi)
	{
		die('Greska('. mysql_errno() . '):' . mysql_error());
    }
$baza=mysql_select_db("mydb");
$query=mysql_query("INSERT INTO " . $kupac ."(Ime, Prezime, Email, Brtelefona) VALUES ('" . $ime . "','" . $prezime . "' , '" . $email . "' , '" . $telefon . "')" );

echo "Uspesno ste dodali kupca!";
$query1=mysql_query("SELECT Ime FROM Kupac");
echo "Ukupno imamo: " . mysql_num_rows($query1);
?>
