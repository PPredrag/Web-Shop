<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Obrada</title>
	</head>
	<body>
	<p><a href='vezba.html' style='text-decoration:none'>Nazad</a></p>
	<?php

		$host ="localhost";
		$user ="root";
		$pass ="";
		$db ="kip";
		
		$conn = new mysqli($host,$user,$pass,$db);
		if($conn->connect_errno)
		{
			echo "Greška:".$conn->connect_error;
		} 
		switch($_POST['zadaci'])
		{
				case "1":
				$result = $conn->query("SELECT K.NASLOV, I.NAZIV, KI.IZDANJE, KI.GODINA, KI.TIRAZ FROM K JOIN KI ON KI.K_SIF = K.K_SIF JOIN I ON KI.I_SIF = I.I_SIF WHERE KI.TIRAZ BETWEEN 4000 AND 8000;");
				echo "1. Sva izdanja sa tiražem između 4ooo i 8ooo.";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Naslov knjige</th>
					  <th align='center'>Naziv izdavača</th>
					  <th align='center'>Izdanje</th>
					  <th align='center'>Godina</th>
					  <th align='center'>Tiraž</th>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td>" . $red['NASLOV'] . "</td>";
					echo "<td >" . $red['NAZIV'] . "</td>"; 
					echo "<td align='center'>" . $red['IZDANJE'] . "</td>";
					echo "<td align='center'>" . $red['GODINA'] . "</td>";
					echo "<td align='center'>" . $red['TIRAZ'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				break;
				
				case "2":
				$result = $conn->query("SELECT K.NASLOV FROM K JOIN KP ON K.K_SIF = KP.K_SIF JOIN P ON P.P_SIF = KP.P_SIF WHERE P.DRZAVA = 'Jugoslavija';");
				echo "2. Naslovi knjiga jugoslovenskih pisaca.";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Naslov knjige</th>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td>" . $red['NASLOV'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				
				case "3":
				$result = $conn->query("SELECT K.NASLOV FROM K JOIN KP ON KP.K_SIF = K.K_SIF JOIN P ON KP.P_SIF = P.P_SIF JOIN KI ON KI.K_SIF = K.K_SIF JOIN I ON KI.I_SIF = I.I_SIF WHERE P.DRZAVA = 'ENGLESKA' AND I.DRZAVA = 'JUGOSLAVIJA';");
				echo "3. Naslovi knjiga engleskih pisaca u izdanju jugoslovenskih izdavača.<br>";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Naslov knjige</th>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td>" . $red['NASLOV'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				
				case "4":
				$result = $conn->query("SELECT CONCAT(I.DRZAVA,' ','(',I.NAZIV,')'),CONCAT(P.DRZAVA,' ' ,'(', P.IME,')') FROM P JOIN KP ON P.P_SIF = KP.P_SIF JOIN KI ON KI.K_SIF = KP.K_SIF JOIN I ON I.I_SIF = KI.I_SIF WHERE  P.DRZAVA <> I.DRZAVA ;");
				echo "4. Parovi država takve da izdavač iz prve država izdaje knjigu pisca iz druge države.<br>";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Država izdavača</th>
					  <th align='center'>Država Pisca</th>
					  </tr>";
				while($red = $result->fetch_array())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td align='center'>" . $red[0] . "</td>";
					echo "<td align='center'>" . $red[1] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				
				case "5":
				$result = $conn->query("SELECT distinct P.P_SIF FROM P JOIN KP ON P.P_SIF = KP.P_SIF JOIN KI ON KI.K_SIF = KP.K_SIF JOIN I ON KI.I_SIF = I.I_SIF WHERE I.DRZAVA = 'Jugoslavija';");
				echo "5. Šifre pisaca kojima je bar jednu knjigu izdao neki jugoslovenski izdavač.<br><br>";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Šifra pisca</th>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td>" . $red['P_SIF'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				
				case "6":
				$result = $conn->query("SELECT I.NAZIV FROM I JOIN KI ON KI.I_SIF = I.I_SIF JOIN K ON K.K_SIF = KI.K_SIF WHERE K.NASLOV IN(SELECT K.NASLOV FROM K JOIN KI ON K.K_SIF = KI.K_SIF JOIN I ON KI.I_SIF = I.I_SIF WHERE I.I_SIF = 'i3')AND I.I_SIF NOT IN('I3');");
				echo "6. Nazivi izdavača koji su izdali sve knjige koje je izdao i izdavač sa šifrom i3.<br>";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Naslov izdavača</th>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td>" . $red['NAZIV'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				
				case "7":
				$result = $conn->query("SELECT P.IME, SUM(TIRAZ)FROM K JOIN KI ON KI.K_SIF = K.K_SIF JOIN KP ON KP.K_SIF = K.K_SIF JOIN P ON P.P_SIF = KP.P_SIF WHERE P.P_SIF = 'P2';");
				echo "7. Ukupan tiraž knjiga čiji je jedan od autora pisac sa šifrom p2.<br>";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Ime pisca</th>
					  <th align='center'>Ukupan tiraž</th>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td>" . $red['IME'] . "</td>";
					echo "<td>" . $red['SUM(TIRAZ)'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				
				case "8":
				$result = $conn->query("SELECT K.NASLOV FROM K JOIN KI ON KI.K_SIF = K.K_SIF JOIN I ON KI.I_SIF = I.I_SIF WHERE I.I_SIF = 'I1';");
				echo "8. Naslovi knjiga koje je izdao samo izdavač sa šifrom i1.";
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <th align='center'>Naslov knjige</th>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td>" . $red['NASLOV'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				default:
				echo "Niste platili račun za internet!";
		}
		
	?>
	</body>
</html>