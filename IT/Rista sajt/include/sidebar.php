<?php

	$niz=array();
	
	$rez=$pdo->query("select menu_name, page_id from menu join page on menu.menu_id=page.menu_id where menu_status=1");
	
	foreach($rez as $red){
		if($red['page_id']==$page_id){			
			$naziv="<li id='inline'><span id='polje_aside'><a href='index.php?page_id=".$red['page_id']."'>".$red['menu_name']."<img id='slika_vrata' src='./images/photos/vrata_1.png'></a></span>";
			}
		else $naziv="<li><a href='index.php?page_id=".$red['page_id']."'>".$red['menu_name']."</a>";
		array_push($niz,$naziv);
		}
	
	echo"<div class='aside'>
		<p id='aside_naslov'>Orijentacija</p><ul>".
			$niz[0]."</li>".
			$niz[1]."</li>".
			$niz[2]."<ul>".
			$niz[3]."<ul>".
			$niz[4]."</li>".
			$niz[5]."</li>".
			$niz[6]."</li>".
			$niz[7]."</li></ul></li>".
			$niz[8]."<ul>".
			$niz[9]."</li>".
			$niz[10]."</li>".
			$niz[11]."</li></ul></li>".
			$niz[12]."</li></ul></li>".    
			$niz[13]."<ul id='drugi_nivo'>".
			$niz[14]."</li>".
			$niz[15]."</li>".
			$niz[16]."</li></ul></li>".
			$niz[17]."</li>".
			$niz[18]."</li>".
			$niz[19]."</li></ul>            
	</div>";

?>