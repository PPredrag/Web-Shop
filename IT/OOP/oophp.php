<!DOCTYPE HTML>
<?php

class Books
{
private $price;
private $title;

public function GetPrice()
	 {
		return $this->price; 
	 }
public function SetPrice($price)
	{
		$this->price=$price;
	}
public function GetTitle()
	 {
		return $this->title; 
	 }
public function SetTitle($title)
	{
		$this->title=$title;
	}
}

$math = new Books;
$physics = new Books;
$chemistry = new Books;

$math->SetPrice(1450);
$math->SetTitle("Algebra");

$physics->SetPrice(1290);
$physics->SetTitle("Psysics for High School");

$chemistry->SetPrice(999);
$chemistry->SetTitle("Advanced Chemistry");

$niz[0][0]= "math";
$niz[0][1]= $math->GetPrice();
$niz[0][2]= $math->GetTitle();

$niz[1][0]= "physics";
$niz[1][1]= $physics->GetPrice();
$niz[1][2]= $physics->GetTitle();

$niz[2][0]= "chemistry";
$niz[2][1]= $chemistry->GetPrice();
$niz[2][2]=$chemistry->GetTitle();


	echo "<table border=1>
		<tr>
		<th>Naziv objekta</th><th>Vrednost atributa price</th><th>Vrednost atributa title</th>
		</tr>";

	for($i=0;$i<3;$i++)
	{
		echo "<tr>";
		for ($j=0;$j<3;$j++)
		{
			echo "<td>".$niz[$i][$j]."</td>";
		}
		echo "</tr>";
	}
	echo"</table>"
?> 

	



<html>
<head>
	<link type="text/css" href="style.css" rel="stylesheet">
<head>
<body>
<br>
<br>
<br>
<br>
  <table>
	  <tr>
		<th>Naziv objekta</th>
		<th>Vrednost atributa price</th>
		<th>Vrednost atributa title</th>
	  </tr>
	  <tr id="blue">
		<th>math</th>
		<td><?php echo $niz[0][1]?></td>
		<td><?php echo $niz[0][2]?></td>
	  </tr>
	  <tr>
		  <th>physics</th>
		  <td><?php echo $niz[1][1]?></td>
		  <td><?php echo $niz[1][2]?></td>
	  </tr>
	  <tr id="blue">
		  <th>chemistry</th>
		  <td><?php echo $niz[2][1]?></td>
		  <td><?php echo $niz[2][2]?></td>
	  </tr>
  </table>
</body>
</html>