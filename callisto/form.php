<?php
   /*
        Template Name: Forms
   */

	if(!isset($_GET['bot'])){ //for the static page use the include
		get_template_part('header');
		get_template_part('loop');
		get_template_part('footer'); }
	else{
		get_template_part('loop');;
	}
?>