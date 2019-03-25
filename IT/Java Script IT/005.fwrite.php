<?php
/*
	Коришћењем функције file_exists() може да се провери да ли је датотека креирана
*/

  $fp = fopen('data.txt', 'w');   
  fwrite($fp, '1');   
  fwrite($fp, '23');  
  fclose($fp);  

?>