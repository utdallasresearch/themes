<?php
	//Template Name: FAQ
	get_header(); ?>
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<?php
		$var = $_GET['ref'];
		if($var == 'corporate'){
			$tax = 'corporate';
			$subhead = 'companies';
		}elseif($var == 'student'){
			$tax = 'student';
			$subhead = 'students';
		}else{
			$tax = 'faculty';
			$subhead = 'faculty';
		}	?>
			
			<span class="subhead">For <?php echo $subhead; ?></span>
			<h1><?php the_field('headline'); ?></h1>
		</div>
	</div>
</div>
	
<section id="faq">
	<div class="wrapper-table">
	<?php				
	$wp_querypost = array(
		'post_type'			=> 'faqpost',
		'faqcat'			=>  $tax,
		'posts_per_page'	=> -1,
		'orderby'			=> 'menu_order',
		'order'				=> 'DESC'
	);
	query_posts($wp_querypost); if(have_posts()):?>
		<?php while(have_posts()): the_post();?>
			<div class="row">
				<div class="cell qa c-orange">
					Q
				</div>
				<div class="cell question">
					<p><?php the_title(); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="cell qa c-green">
					A
				</div>
				<div class="cell answer">
					<?php the_content(); ?>
				</div>
			</div>
	    <?php endwhile;?>
	<?php endif; wp_reset_query();?>
	</div>
</section>
	
	
<?php get_footer(); ?>