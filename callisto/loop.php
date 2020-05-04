<?php
/**
 *
 * @package WordPress
 * @subpackage Callisto
 * @since 1.0.0
 */

?>
<div role='main'>
	<?php
	   while (have_posts()) : the_post(); 
			if(!isset($_GET['bot'])){
				the_content();
			}else{
				switch(get_current_blog_id()){
					case 988: 
						$content = preg_replace('/\/obcc\//', '/', get_the_content());
						$content = preg_replace('/http:\/\/cms.utdallas.edu\/obcc\//', '/', $content);
						print $content;
						
						break;			
					case 1016: 
						$content = preg_replace('/\/theleadershipcenter\//', '/', get_the_content());
						$content = preg_replace('/http:\/\/cms.utdallas.edu\/theleadershipcenter\//', '/', $content);
						print $content;
						
						break;
					default:
						the_content();
						break;	
				}
			}
	   endwhile;
	?>
</div>