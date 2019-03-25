<?php
	
	$niz=array();
	
	$rez=$pdo->query("select menu_name, page_id from menu join page on menu.menu_id=page.menu_id where menu_status=1 and nav_status=1");
	
	foreach($rez as $red){
		$naziv="<a href='index.php?page_id=".$red['page_id']."'>".$red['menu_name']."</a>";
		array_push($niz,$naziv);
		}	

	echo"<div id='nav'><ul>
		<li class='prvi_li nav_prvi_nivo'>".$niz[0]."</li>
		<li class='nav_prvi_nivo'>".$niz[1]."<ul>
		<li>".$niz[2]."<ul>
		<li>".$niz[3]."</li>
		<li>".$niz[4]."</li>
		<li>".$niz[5]."</li>
		<li class='zadnji_li'>".$niz[6]."</li></ul></li>     
		<li class='zadnji_li'>".$niz[7]."<ul>
		<li>".$niz[8]."</li>
		<li>".$niz[9]."</li>
		<li class='zadnji_li'>".$niz[10]."</li></ul></li></ul></li>
		<li class='nav_prvi_nivo'>".$niz[11]."</li></ul>
	</div>
	<div id='kontejner'>";

?>

