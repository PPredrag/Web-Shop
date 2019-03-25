<?php
	$filename = "tmp.txt";  
	$file = fopen($filename, "r");
	
	if($file == false)  
	{     
		echo ("Greska pri otvaranju datoteke");     
		exit();  
	}  
	
	$filesize = filesize($filename);  
	$filetext = fread($file, $filesize);  
	
	fclose($file);  
	
	echo "Duzina datoteke: $filesize bytes";  
	echo "Sadrzaj datoteke: $filetext";
?>