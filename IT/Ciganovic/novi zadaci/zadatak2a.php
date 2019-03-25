<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Izdavač</title>
	</head>
	<body>
		
			<style>
				#wrapper {
					width:800px;
					margin:0 auto;
				}
			</style>
			<h2>Stranica za pregled Izdavača</h2>
			<form  action="#" method="POST">
			
				<br>
				Prikaži izdavača po: 
				<select name="izdavac">
					<option name="izdavac" value="naziv">nazivu izdavača</option>
					<option name="izdavac" value="status">statusu izdavača</option>
				</select>
				<input type="submit" name="potvrdi" value="Potvrdi" />
			
			</form>
		
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
		if(isset($_POST['izdavac']))
		{
			switch($_POST['izdavac'])
			{
				case "naziv":
				$result = $conn->query("SELECT I_SIF, NAZIV, DRZAVA FROM I");
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <td>Sifra izdavaca</td>
					  <td>Status izdavaca</td>
					  <td>Drzava izdavaca</td>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td align='center'>" . $red['I_SIF'] . "</td>";
					echo "<td align='center'>" . $red['NAZIV'] . "</td>"; 
					echo "<td align='center'>" . $red['DRZAVA'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				break;
				case "status":
				$result = $conn->query("SELECT I_SIF, STATUS, DRZAVA FROM I");
				echo "<table border='1' style='background:#aaaaaa;'>
					  <tr style='background:#fff;'>
					  <td>Sifra izdavaca</td>
					  <td>Status izdavaca</td>
					  <td>Drzava izdavaca</td>
					  </tr>";
				while($red = $result->fetch_assoc())
				{
					echo "<tr style='background:#fff;'>";
					echo "<td align='center'>" . $red['I_SIF'] . "</td>";
					echo "<td align='center'>" . $red['STATUS'] . "</td>"; 
					echo "<td align='center'>" . $red['DRZAVA'] . "</td>";
					echo"</tr>";
					echo "<br>";
				}
				echo "</table>";
				break;
				default:
				echo "Greska jer niste platili racun za korišćenje interneta.";
			}
		}
		
	?>
	</body>
</html>