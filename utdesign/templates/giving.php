<?php
	//Template Name: Giving
	get_header(); ?>
	
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<h1><?php the_field('headline'); ?></h1>
		</div>
	</div>
</div>


<section>
	<div class="wrapper-gutters">
		<div class="column-half">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; endif; ?>
		</div>
		<div class="column-half">
			<?php 
				$image = get_field('giving_image'); ?>
				<img class="push" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
	</div>
	<div class="button text_align-center">
		<a href="https://giving.utdallas.edu/utdesign"><i class="fa fa-gift"></i> Make a Gift</a>
	</div>
</section>


<section id="video" class="no-top">
	<div class="wrapper-table">
		<div class="row">
			<div class="cell">
				<?php include('video-embed.php'); ?>
			</div>
			<div class="cell">
				<span class="subhead">Watch the Video</span>
				<h3 class="title">Last Year's Winners</h3>
				<p></p>
			</div>
		</div>
	</div>
</section>
	
	
	
<?php get_footer(); ?>