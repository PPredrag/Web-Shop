<?php 
 
include_once 'baza.php';
?>
 
 
<!DOCTYPE HTML>
<html>
    <head>
        <title>Zadatak1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="style.css" />
      </head>
    <body>
    <div style="width:800px; margin:0 auto; border:1px solid black">
       <form action="tabela.php" method="GET">
       <legend>Formu popunjava:</legend>    
        <input type="text" name="student" placeholder = "Unesi Ime i Prezime"/><br /><br />
         
        <legend>Razno:</legend> 
        <input type="text" name="unos" /><br><br /><br />
        <input type="submit" value="Obradi" /><br /><br />
         </form>
         <?php 
             if(isset($_GET['student']))
        {
            $name = $_GET['student'];
             
            $name = strtolower($name);
            echo "<table>
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
                elseif ($name == "*")
                {
                    for($k=0; $k<count($data); $k++)
                    {
                    echo "<tr>";
                    echo "<td>" . $data[$k]['ime_prezime'] . "</td>";
                    echo "<td>" . $data[$k]['poeni'] . "</td>";
                    echo "<td>" . $data[$k]['oznaka_Smera'] . "</td>";
                    echo "<td>" . $data[$k]['index'] . "</td>";
                    echo "<td>" . $data[$k]['email'] . "</td>";
                    echo "</tr>";
                         
                    }
                     
                }
              
            } echo "<table>";
        }       
        ?>
           
    </div>
     
     
      
    </body>
    </html>