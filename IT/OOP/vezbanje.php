<?php 

class Books 
{
	private $price;
	private $title;
	private $terms;
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
		return $this->title=$title;
	}
	public function GetTerms()
	{
	  return $this->terms;
	}
	public function SetTerms($terms)
	{
	    $this->terms=$terms;
	}
}
	$mat = new Books;
	$phy = new Books;
	$chy = new Books;
	$phy1 = new Books;
	$chy1 = new Books;
 
    $mat->SetPrice(1456);
	$mat->SetTitle("Matematika");
	$mat->SetTerms ("Pet Dana");
	
	$phy->SetPrice(2656);
	$phy -> SetTitle("Fizika");
	$phy->SetTerms ("Pet Dana");
	
	$chy -> SetPrice(6546);
	$chy-> SetTitle("hemija");
	$chy->SetTerms ("Pet Dana");
	
	$phy1->SetPrice(265622);
	$phy1 -> SetTitle("Fizikaaaaaa");
	$phy1->SetTerms ("Pet Dana");
	
	$chy1 -> SetPrice(65462222);
	$chy1-> SetTitle("hemijaaaaaaa");
	$chy1->SetTerms ("Pet Dana");
	
	
$niz[0][0]= "math";
$niz[0][1]= $mat->GetPrice();
$niz[0][2]= $mat->GetTitle();
$niz[0][3]=$mat->GetTerms();

$niz[1][0]= "physics";
$niz[1][1]= $phy->GetPrice();
$niz[1][2]= $phy->GetTitle();
$niz[1][3]=$phy->GetTerms();

$niz[2][0]= "chemistry";
$niz[2][1]=$chy->GetPrice();
$niz[2][2]=$chy->GetTitle();
$niz[2][3]=$chy->GetTerms();   


  echo "<table border=1>
		<tr>
		<th>Naziv objekta</th><th>Vrednost atributa price</th><th>Vrednost atributa title</th><th>Termin Isporuke</th>
		</tr>";
    for ($i=0; $i<3; $i++)
	{
	   echo "<tr>";
		for ($k=0; $k<4; $k++)
		{
		   echo "<td>" . $niz[$i][$k] . "</td>";
		}
		echo "<tr>";
	}
	echo "</table>";
?>
<html>
<head>
	<link type="text/css" href="styleoop.css" rel="stylesheet">
<head>
<body>

</body>
</html>

