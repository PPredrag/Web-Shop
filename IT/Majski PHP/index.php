<?php 

include_once 'baza.php';
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
      </head>
    <body>
	<div style="width:400px; margin:0 auto; border:1px solid black">
	   <form action="index.php" method="GET">
	   <span>Formu popunjava:</span>	
		<input type="text" name="student" />
		<input type="submit" value="Obradi" /><br>
		<span>Razno:</span>	
		<input type="text" name="unos" />
		 </form>
		 <?php 
		     if(isset($_GET['student']))
		{
		    $name = $_GET['student'];
			
			$name = strtolower($name);
			echo "<table border=1>
			<tr>
                <th>Student Ime i Prezime</th>	
				<th>Poeni</th>	
				<th>Oznaka Smera</th>		
                <th>Br. Indeksa</th>	
                <th>e-mail adresa</th>
			</tr>";	
				
			for ($i=0; $i<count($data); $i++)
			{   
		        echo "<tr>";
				$sredjena = strtolower($data[$i]['ime_prezime']);
				if($name == $sredjena)
				{
					echo "<td>" . ucfirst($name) . "</td>";
					echo "<td>" . $data[$i]['poeni'] . "</td>";
					echo "<td>" . $data[$i]['oznaka_Smera'] . "</td>";
					echo "<td>" . $data[$i]['index'] . "</td>";
					echo "<td>" . $data[$i]['email'] . "</td>";
					echo "</tr>";
					
					
				}
			} echo "<table>";
        }		
		?>
		  
	</div>
	
	
	 
	</body>
	</html>