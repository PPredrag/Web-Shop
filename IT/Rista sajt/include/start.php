<?php
	if(isset($_GET['page_id']) && is_numeric($_GET['page_id'])){
		$page_id=$_GET['page_id'];
	}
	else $page_id=1;
	
	include_once "./model/database.php";
	include_once "./classes/get_page.php";
	$get_page=new get_page;
	$get_page->page_id=$page_id;
?>


<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
<meta name="description" content="Prevodilačka agencija DOOR Link">
<meta name="author" content="Dejan Ristić">
<title>DOOR Link</title>
<link rel="stylesheet" type="text/css" href="./css/divovi.css">
<link rel="stylesheet" type="text/css" href="./css/forme.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="./photos/myicon.ico">
<link rel="stylesheet" href="./scripts/flexslider/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="./scripts/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
$('.flexslider').flexslider();
});
</script>
</head>

<body>
	<div id="wrapper">