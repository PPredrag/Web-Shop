<?php
	
	if((!isset($_POST['ime']))||(!isset($_POST['email']))||(!isset($_POST['tekst']))){
		header('Location:../index.php?page_id=1');
		die;
		}
	
	else if((($_POST['ime'])==null)||(($_POST['email'])==null)||(($_POST['tekst'])==null))
		{
			echo "<script>alert('Nisu popunjena sva polja u formi.');
				window.location='../index.php?page_id=19';</script>";
		}	

	else{
		$ime=mysql_real_escape_string($_POST['ime']);
		$email=mysql_real_escape_string($_POST['email']);
		$tekst=mysql_real_escape_string($_POST['tekst']);
		$ime=strip_tags($ime);
		$email=strip_tags($email);	
		$tekst=strip_tags($tekst);
		$tekst=wordwrap($tekst, 70);
	} 
	
	require('../classes/external/PHPMailer/class.PHPMailer.php');
	
	$email_slanje=new PHPMailer();
	
	$email_slanje->IsSMTP();
	$email_slanje->From      = $email;
	$email_slanje->Subject   = "Poruka sa sajta";
	$email_slanje->Body      = "Poruka od:".$ime."\r\n\r\n".$tekst;
	$email_slanje->AddAddress('ivonadimitrijevic@yahoo.com');
	$email_slanje->Send();
		
	echo "<script>alert('Vaša poruka je uspešno poslata.');
		window.location='../index.php?page_id=19';</script>";	
    	
?>