<?php 

/*

$_FILES["file"]["name"] Назив upload-оване датотеке  
$_FILES["file"]["type"] Тип upload-оване датотеке  
$_FILES["file"]["size"] Величина upload-оване датотеке у бајтовима 
$_FILES["file"]["tmp_name"] Назив привремене копије која је сачувана на серверу  
$_FILES["file"]["error"] Код грешке који се добија од upload-оване датотеке 

*/

if ($_FILES["file"]["error"] > 0)   
{   
	echo "Error: " . $_FILES["file"]["error"] . "<br>";   
} 
else   
{   
	echo "Upload: " . $_FILES["file"]["name"] . "<br>";   
	echo "Type: " . $_FILES["file"]["type"] . "<br>";  
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";   
	echo "Stored in: " . $_FILES["file"]["tmp_name"];   
} 







?>