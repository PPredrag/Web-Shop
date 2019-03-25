<?php
	
class get_page{	

	public $page_id;
		
	public function header(){
	
		$quote_content=null;
		$quote_author=null;
		
		global $pdo;
		$rez=$pdo->query("select quote_content, quote_author, page_id from quote join page on quote.quote_id=page.quote_id where quote_status=1 ");
		
		foreach($rez as $red){
			if ($red['page_id']==($this->page_id)){
				$quote_content=$red['quote_content'];
				$quote_author=$red['quote_author'];
				break;
				}
			}
			
		echo"<div id='header'>
				<img id='logo' src='./images/photos/door_link.jpg' width='222' height='31' alt='Logo'>     
					<div id='quote'>
						<p><i>".$quote_content."</i></p>
						<p id='author'>".$quote_author."</p>    
					</div>
			</div>";	
		}

	
	public function section(){
	
		global $pdo;	
		$rez=$pdo->query("select photo_name, page_id from photo join page on photo.photo_id=page.photo_id where photo_status=1");
		
		$photo=null;
		
		foreach($rez as $red){
			if($red['page_id']==($this->page_id)){
				$photo_name=$red['photo_name'];
				$photo="<img id='section_figure' src='./images/photos/".$photo_name."' width='592' alt='photo'>";
				break;
				}
			}
		
		
		$page_content=null;
		
		$rez=$pdo->query("select content_text, page_id from content join page on content.content_id=page.content_id where content_status=1");
		
		foreach($rez as $red){
			if($red['page_id']==($this->page_id)){
				if($red['content_text']=="slide_show"){
					include "./include/slide_show.php";
					break;
					}
				else{
					$page_content=$red['content_text'];
					echo "<div id='section'>".$photo.$page_content."</div>";
					break;
					}
				}
			}			
		}		
	}	
?>