<?php
	//Template Name: About
	get_header(); ?>
	
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<h1><?php the_field('headline'); ?></h1>
		</div>
	</div>
</div>

<section class="big-msg-alt bg-green">
	<div class="wrapper">
		<?php the_field('intro'); ?>
	</div>
</section>

<section>
	<div class="wrapper-gutters">
		<div class="column-half">
			<p><?php the_field('column_1'); ?></p>
		</div>
		<div class="column-half">
			<p><?php the_field('column_2'); ?></p>
		</div>
	</div>
</section>

<section id="about-personas" class="no-top">
	<div class="wrapper-gutters">
		<div class="column-third bg-blue2">
			<span>Companies</span>
			<p><?php the_field('companies'); ?></p>
			<div class="button clear">
				<a href="/companies">Learn More</a>
			</div>
		</div>
		<div class="column-third bg-green">
			<span>Students</span>
			<p><?php the_field('students'); ?></p>
			<div class="button clear">
				<a href="/students">Learn More</a>
			</div>
		</div>
		<div class="column-third bg-orange">
			<span>Faculty</span>
			<p><?php the_field('faculty'); ?></p>
			<div class="button clear">
				<a href="/faculty">Learn More</a>
			</div>
		</div>
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
				<h3 class="title"><?php the_field('video_title'); ?></h3>
				<p><?php the_field('video_description'); ?></p>
			</div>
		</div>
	</div>
</section>



<h2 class="title">News</h2>
<div id="news" class="about-foot">
	<?php
		$querypost = array(
			'post_type'			=> 'post',
			'posts_per_page'	=> 5,
			'post__not_in' 		=> isset($feat) ? [$feat] : [],
			'orderby'			=> 'date',
			'order'				=> 'DESC'
			);
		query_posts($querypost); ?>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				
				<div class="art">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h4><?php the_title(); ?></h4>
						<span class="more">Read <i class="fa fa-long-arrow-right"></i></span>
					</a>
				</div> 
				
			    	    		    	    
			<?php endwhile; endif;
		wp_reset_query(); ?>
</div>
	
	
<?php get_footer(); ?>