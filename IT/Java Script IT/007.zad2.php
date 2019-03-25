<?php  
	$filename = "newfile.txt";  
	$file = fopen($filename, "w");  

	if( $file === false )  
	{     
		echo ( "Greska u otvaranju datoteke" );     
		exit();  
	}  

	fwrite( $file, "Primer teksta koji se nalazi u datoteci.\n" );  
	fclose($file); 
?> 

<html>  
	<head>   
		<title>PHP I/O</title>  
	</head>  
	<body>   
		<?php   

		if(file_exists($filename))   
		{      
			$filesize = filesize($filename);      
			$msg = "Kreirana je datoteka sa nazivom $filename";      
			$msg .= ", velicine $filesize bajtova";     
			echo ($msg);   
		}   
		else   
		{      
			echo ("Datoteka $filename ne postoji" );   
		}   
		
		?>  
	</body> 
</html> 