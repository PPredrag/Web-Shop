<?php
	
	if((!isset($_POST['brisanje']))||(!isset($_POST['naziv_slike']))||($_POST['naziv_slike'])==null)
		header('Location:../index.php?page_id=1');
	
	else{
		$naziv_slike=mysql_real_escape_string($_POST['naziv_slike']);
		$naziv_slike=strip_tags($naziv_slike);		
		}
		
	$iterator=new DirectoryIterator("../images/slide_show");
		foreach($iterator as $file){
			if(($file->getFilename())==$naziv_slike)
				unlink("../images/slide_show/".$naziv_slike);
			}
			
	header('Location:./index.php');

?>