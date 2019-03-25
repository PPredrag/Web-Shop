<?php

	if((!isset($_FILES['upload_slike']))||(!isset($_POST['submit'])))
		header('Location:../index.php?page_id=1');
		
	else if((($_FILES['upload_slike']['type'] == 'image/gif')
		|| ($_FILES['upload_slike']['type'] == 'image/jpeg')
		|| ($_FILES['upload_slike']['type'] == 'image/jpg')
		|| ($_FILES['upload_slike']['type'] == 'image/pjpeg')
		|| ($_FILES['upload_slike']['type'] == 'image/x-png')
		|| ($_FILES['upload_slike']['type'] == 'image/png'))
		&& ($_FILES['upload_slike']['size'] < 8000000)){
			 if(file_exists("../images/slide_show/".$_FILES['upload_slike']['name'])){
				echo "<script>alert('Veæ postoji slika sa tim nazivom.');
				window.location='./admin_ss.php';</script>";
				}
			else{move_uploaded_file($_FILES['upload_slike']['tmp_name'], "../images/slide_show/".$_FILES['upload_slike']['name']);	
				header('Location:./index.php');
				}	
			}
				
	else echo "<script>alert('Ovaj fajl ne može da se uèita.');
				window.location='./index.php';</script>";		

?>