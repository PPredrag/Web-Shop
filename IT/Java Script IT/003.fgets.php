<?php
/*
fgets() враћа линију датотеке на коју показује показивач  

Уколико је наведена дужина читања, функција враћа стринг до $length-1 дужине стринга; у сваком другом случају (грешке) функција враћа false
*/

	$handle = @fopen("002.txt", "r"); 
	if ($handle) 
	{
		while (($buffer = fgets($handle, 4096)) !== false)      
		{         
			echo $buffer;     
		}     
		if (!feof($handle))      
		{
			echo "Error: unexpected fgets() fail\n";     
		}     
		fclose($handle); 
	} 


 
?>