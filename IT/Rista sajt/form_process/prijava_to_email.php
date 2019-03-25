<?php
		
	if((!isset($_POST['ime']))||(!isset($_POST['prezime']))||(!isset($_POST['mesec']))||(!isset($_POST['dan']))||(!isset($_POST['godina']))
		||(!isset($_POST['mesto']))||(!isset($_POST['fikstel']))||(!isset($_POST['mobtel']))||(!isset($_POST['email']))||(!isset($_POST['znanje']))
		||(!isset($_POST['iskustvo_pis']))||(!isset($_POST['iskustvo_usm']))||(!isset($_POST['cena_pis']))||(!isset($_POST['cena_kon']))
		||(!isset($_POST['cena_sim']))||(!isset($_FILES['fajl']))){
		header('Location:../index.php?page_id=1');
		die;
		}
	
	else if((($_POST['ime'])==null)||(($_POST['prezime'])==null)||(($_POST['mesec'])==null)||(($_POST['dan'])==null)||(($_POST['godina'])==null)
		||(($_POST['mesto'])==null)||(($_POST['mobtel'])==null)||(($_POST['email'])==null)||(($_POST['iskustvo_pis'])==null)
		||(($_POST['iskustvo_usm'])==null))	
		{
			echo "<script>alert('Nisu popunjena sva obavezna polja u formi');
				window.location='../index.php?page_id=20';</script>";
		}	

	else{
		function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
		}
		
		$niz=array();
		
		$ime=mysql_real_escape_string($_POST['ime']);
		$prezime=mysql_real_escape_string($_POST['prezime']);
		$mesec=mysql_real_escape_string($_POST['mesec']);
		$dan=mysql_real_escape_string($_POST['dan']);
		$godina=mysql_real_escape_string($_POST['godina']);
		$mesto=mysql_real_escape_string($_POST['mesto']);
		$fikstel=mysql_real_escape_string($_POST['fikstel']);
		$mobtel=mysql_real_escape_string($_POST['mobtel']);
		$email=mysql_real_escape_string($_POST['email']);
		$znanje=mysql_real_escape_string($_POST['znanje']);
		$iskustvo_pis=mysql_real_escape_string($_POST['iskustvo_pis']);
		$iskustvo_usm=mysql_real_escape_string($_POST['iskustvo_usm']);
		$cena_pis=mysql_real_escape_string($_POST['cena_pis']);
		$cena_kon=mysql_real_escape_string($_POST['cena_kon']);
		$cena_sim=mysql_real_escape_string($_POST['cena_sim']);
		$fajl=$_FILES['fajl'];
				
		$ime=strip_tags($ime);
		$niz=array_push_assoc($niz,'Ime: ',$ime);
		$prezime=strip_tags($prezime);
		$niz=array_push_assoc($niz,'Prezime: ',$prezime);		
		$mesec=strip_tags($mesec);
		$dan=strip_tags($dan);
		$godina=strip_tags($godina);
		$datum=$dan."/".$mesec."/".$godina;
		$niz=array_push_assoc($niz,'Datum rođenja: ',$datum);		
		$mesto=strip_tags($mesto);
		$niz=array_push_assoc($niz,'Mesto boravka: ',$mesto);
		$fikstel=strip_tags($fikstel);
		$niz=array_push_assoc($niz,'Broj fiksnog telefona: ',$fikstel);
		$mobtel=strip_tags($mobtel);
		$niz=array_push_assoc($niz,'Broj mobilnog telefona: ',$mobtel);
		$email=strip_tags($email);
		$niz=array_push_assoc($niz,'Email: ',$email);
		$znanje=strip_tags($znanje);
		$niz=array_push_assoc($niz,'Obrazovanje: ',$znanje);
		$iskustvo_pis=strip_tags($iskustvo_pis);
		$iskustvo_pis=wordwrap($iskustvo_pis, 70);
		$niz=array_push_assoc($niz,'Iskustvo u pisanom prevođenju: ',$iskustvo_pis);
		$iskustvo_usm=strip_tags($iskustvo_usm);
		$iskustvo_usm=wordwrap($iskustvo_usm, 70);
		$niz=array_push_assoc($niz,'Iskustvo u usmenom prevođenju: ',$iskustvo_usm);
		$cena_pis=strip_tags($cena_pis);
		$niz=array_push_assoc($niz,'Cena pisanog prevoda: ',$cena_pis);
		$cena_kon=strip_tags($cena_kon);
		$niz=array_push_assoc($niz,'Cena konsekutivnog prevoda: ',$cena_kon);
		$cena_sim=strip_tags($cena_sim);
		$niz=array_push_assoc($niz,'Cena simultanog prevoda: ',$cena_sim);
		}
	
	$message="Prijava za posao: \r\n\r\n";
	foreach($niz as $k=>$v){
		if($v==null)
			continue;
		else $message.=$k.$v.PHP_EOL;
		}
	
	$file_name=null;
	if(isset($_FILES['fajl'])){	
		if(($_FILES['fajl']['type'] == 'application/pdf')
			|| ($_FILES['fajl']['type'] == 'application/x-download')
			|| ($_FILES['fajl']['type'] == 'application/msword')
			|| ($_FILES['fajl']['type'] == 'application/octet-stream')
			|| ($_FILES['fajl']['type'] == 'text/plain')
			|| ($_FILES['fajl']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
			&& ($_FILES['fajl']['size'] < 8000000)){
				$file_name=$_FILES['fajl']['name'];
				move_uploaded_file($_FILES['fajl']['tmp_name'], "./".$file_name);	
				}
		}			
		
	require('../classes/external/PHPMailer/class.PHPMailer.php');
	
	$email_slanje=new PHPMailer();
	
	$email_slanje->IsSMTP();
	$email_slanje->From      = $email;
	$email_slanje->Subject   = "Prijava sa sajta";
	$email_slanje->Body      = $message;
	$email_slanje->AddAddress('ivonadimitrijevic@yahoo.com');
	if($file_name!==null)
		$email_slanje->AddAttachment("./".$file_name);
	$email_slanje->Send();
	
	if(file_exists($file_name))
		unlink($file_name);
	
	echo "<script>alert('Prijava je uspešno poslata.');
		window.location='../index.php?page_id=20';</script>";
?>