<?php

	$filename = 'test.txt';  
	$somecontent = "Tekst koji dodajemo preko PHPa\n";  
	// Provera da li je omogucen upis u datoteku  
	if (is_writable($filename))   
	{   
		/* $filename se otvara u append modu, tj. pokazivac je na    kraju datoteke, te ce odatle da krene upis novog sadrzaja*/   
		if (!$handle = fopen($filename, 'a'))    
		{     
			echo "Cannot open file ($filename)";     
			exit;   
		}   

		if (fwrite($handle, $somecontent) === FALSE)    
		{    
			echo "Cannot write to file ($filename)";    
			exit;   
		}   

		echo "Jej, sadrzaj ($somecontent) je upisan u datoteku ($filename)";   
		fclose($handle);  
	}                      
	else   
	{   
		echo "Upis sadrzaja u datoteku $filename nije moguc";  
	} 

?>