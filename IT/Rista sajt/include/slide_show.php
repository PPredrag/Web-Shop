<div id='section'>
	<h1 class='blue center'>ILUSTRACIJA PISANOG PREVODA</h1><br><br> 
	<div class='flexslider'>
		<ul class='slides'>
				
		<?php
			
			$iterator=new DirectoryIterator("./images/slide_show");
			foreach($iterator as $file){
				if(($file->isDot())||($file->getFilename())=="Thumbs.db") continue;
				else echo "<li><img src='./images/slide_show/{$file->getFilename()}'></li>";
				}
				
		?>					
				
		</ul>
	</div>
</div>