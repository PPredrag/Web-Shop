<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
<meta name="author" content="Dejan Ristić">
<title>Admin panel za slide show</title>
<link rel="stylesheet" type="text/css" href="../css/admin_ss.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../images/photos/myicon.ico">

</head>

<body>
	<div id="wrapper">
	
		<div id="header">
			<div class="header_deo" id="upload">
				<form action="./upload.php" method="post" enctype="multipart/form-data">
					<label class="label" for="upload_slike"><b>Dodaj sliku</b></label>
					<input id="form_upload" name="upload_slike" type="file" required><br>
					<input id="reset" name="reset" type="reset" value="Obriši">
					<input id="submit_upload" name="submit" type="submit" value="Aplouduj" required>
				</form>
			</div>
			<div id="naslov">Slike za Ilustraciju pisanog prevoda</div>
			<div class="header_deo" id="password">				
			</div>
		</div>
			
		<div id="div_za_slike">		
		<?php
			
			$iterator=new DirectoryIterator("../images/slide_show");
			foreach($iterator as $file){
				if(($file->isDot())||($file->getFilename())=="Thumbs.db") continue;
				else echo "<div id='div_slika'><img id='slika' src='../images/slide_show/".$file->getFilename()."'><br>
				<form action='./delete.php' method='post'><input id='dugme' type='submit' name='brisanje' value='Obriši' required><input type='hidden' name='naziv_slike' value='".$file->getFilename()."' required></form></div>";
				}
				
		?>	
	
		</div>
		
	</div>
</body>
</html>	