<?php
	/*
		Template Name: Empty
	*/

	
?>

	<?php


	   while (have_posts()) : the_post(); 

	   	

			if(!isset($_GET['bot'])){
				the_content();
			}else{
				switch(get_current_blog_id()){
					case 988: 
						print preg_replace('/\/obcc\//', '/', get_the_content());
						break;			
					default:
						the_content();
						break;	
				}
				
			}
	   endwhile;
	?>