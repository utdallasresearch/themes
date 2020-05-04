<?php

   /*
        Template Name: Sub Pages
   */

?>
    <?php get_template_part('header'); ?>

<?php
			switch(get_current_blog_id()){
				case 421: ?>
			<?php	

			if(!isset($_GET['bot'])){
				$liveLink = str_replace("cms.","www.",get_permalink());
				$edit=get_edit_post_link();
				$edit=(empty($edit)) ? "" : "<br /><br /><a href='".get_edit_post_link()."' target='_blank'>Edit this page</a>";
				$liveLink = "<div style='border:2px solid red; top:0; background-color:#fff; position:fixed; width:400px; margin-left:300px; margin-top:30px; font-size:12px; padding:4px; z-index:9999'><strong>WARNING:</strong> You are viewing a staged version of your website. This page, or any links on it, should not be publicly distributed. <a href='$liveLink'>Live version here.</a><span id='editorLog'> $edit	</span></div>";

			?>
			<script type="text/javascript">
				var container="<?=$liveLink;?>";
				document.write(container);
			</script>
			<?php } ?>
<?php	break;
			}
		?>

<div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>  
  </div>

  <div class="main container">
	  <a name='content'></a> 
<?php get_template_part('loop'); ?>
  </div><!-- main container -->

  <!-- Main Section END ######################################## -->
  <!--   #include virtual='/websvcs/shared/sdc.js'--> 

 <?php get_template_part('footer'); ?>
