
			<?php

					include('simple_html_dom.php');

					$url = $_POST['search'];
					
					
					$urlc = str_replace(' ', '%20', $url);

	    $html=file_get_html("https://google.com/search?q=$urlc");
	    $html1=file_get_html("https://www.google.com/search?tbm=isch&q=$urlc");
	    
	       echo "<center><div class='card-panel'style='width:90%; text-align: justify;'>";
	      echo "<font size='4' color='#0000cc'>Images For $url </font><br>";
	     for($j=1; $j<5; $j++){
	      
	         echo "<style>img{height:120px;width:auto;}</style>";
	        $img=$html1->find("img",$j);
	        
	            echo $img;
	            echo "&nbsp;&nbsp;&nbsp;";
	        }
	          
	          echo "<br><a href='images.php?id=".$urlc."'><font size='3' color='#0000cc'>More Images ... </font></a></div></center><br>";
	    
	    
	    for ($i=1; $i<10 ; $i++) { 
	        $link=$html->find("cite",$i)->plaintext;
	        
	        echo "<center><div class='card-panel'style='width:90%; text-align: justify;'>";
	        echo "<font size='4' color='#0000cc'>";
		        echo "<a href='$link'>";
	       
	            
	            $title = $html->find("h3",$i) ->plaintext  ;
	            echo $title;
	            echo"</a></font><br>";
	     
	        
	        
	        echo "<font size='2' color='#006400'>";
	        echo $link;
	        echo "</font><br><hr>";
	        
	    
		
		$des = $html->find("span.st",$i)->plaintext ;
		echo "<font size='3' color='#666666'>";
		echo $des ;
		echo "</font><br>";
		echo "</div></center>";
		
	    }

?>
