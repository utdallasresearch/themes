<?php
	//Template Name: New Home
	get_header(); ?>

<div id="herohome" <?php if( get_field('hero') == 'image' ):?>style="background:url(<?php $image = get_field('image'); echo $image['url'];?>)center center no-repeat; background-size:cover;" <?php endif; ?>>
	
	<?php if( get_field('hero') == 'video' ):?>
		<div class="screen"></div>
		<div id="videobg">
			<video autoplay loop muted>
				<source src="<?php the_field('video_url'); ?>" type="video/mp4">
			</video>
		</div>
	<?php endif; ?>
		
	<div class="wrapper-table">
		<div class="row">
			<div class="cell">
				<span class="subhead"><?php the_field('hero_subhead'); ?></span>
				<h2><?php the_field('hero_headline'); ?></h2>
			</div>
		</div>
	</div>

</div>

<div class="personas">

    <a href="/companies" title="Corporate Sponsors play one of the largest roles in UTDesign. A Corporate mentor acts as the technical point of contact for the company."><div style="position:relative">
		<sup class="sup">?</sup>
		</div>Companies<span>Do you have more engineering or software needs than resources?</span>Learn More</a>
	
	<a href="/students" title="Every UT Dallas engineering and computer science senior is required to work on a team-oriented capstone project (senior design course)."><div style="position:relative">
		<sup class="sup">?</sup>
		</div>Students<span>Learn about the expectations and your role in UTDesign Capstone.</span>Learn More</a>
	
    <a href="/ut-dallas-advisor" title="A UTDesign Faculty is a professor or instructor from UT Dallas who agrees to supervise a team of 4 to 6 students working on an industry proposed project."><div style="position:relative">
		<sup class="sup">?</sup>
		</div>UT DALLAS Advisors<span>Discover your role within UTDesign Capstone as a faculty mentor.</span>Learn More</a>
	
</div>
	
<section class="big-msg bg-green2">
	<div class="wrapper-columns">
		<p><?php the_field('big_message'); ?></p>
	</div>
</section>

    
<section class="cta bg-white">
	<div class="wrapper-gutters">
		<div class="column-two-third">
			<span style="color:black">Want To Know More About Our Program?</span>
		</div>
		<div class="column-third"  style = "text-align:center;">
			<div class="dropdown">
				<button class="dropbtn">Let's Talk</button>
				<div class="dropdown-content">
					<a href="/contact">Email Us</a>
					<a href="https://utdallas.qualtrics.com/jfe/form/SV_d4HuL6sWWS7gsQd">Schedule A Call</a>
					<a href="https://utdallas.qualtrics.com/jfe/form/SV_9zTKmHiVuSwtP6J">Schedule Studio Visit</a>
				</div>
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

<section id="splitter">
	<div class="wrapper-table">
		<div class="row">
			<div class="cell" style="background:url(<?php bloginfo('template_url'); ?>/images/splitter1.jpg)center center; background-size:cover;">
				<?php the_field('studio'); ?>
				<div class="button clear">
					<a href="/resources">Explore the Studio</a>
				</div>
			</div>
			<div class="cell" style="background:url(<?php bloginfo('template_url'); ?>/images/splitter2.jpg)center center; background-size:cover;">
				<?php the_field('projects'); ?>
				<div class="button clear">
					<a href="/projects">View Past Projects</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="stats">
	<div class="wrapper-gutters">
		
		<?php
			$querypost = array(
				'post_type'			=> 'stats',
				'posts_per_page'	=> 4,
				'orderby'			=> 'rand',
				'order'				=> 'DESC'
				);
			query_posts($querypost); ?>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				    
				    <div class="column-fourth">
						<?php if(get_field('before_number')): ?><span class="buddy"><?php the_field('before_number'); ?></span><?php endif; ?>
						<span class="number counter <?php the_field('type_of_number'); ?>">
							<?php the_field('number'); ?>
						</span>
						<?php if(get_field('after_number')): ?><span class="buddy"><?php the_field('after_number'); ?></span><?php endif; ?>
						<?php the_content(); ?>
					</div>    
				    	    		    	    
				<?php endwhile; endif;
			wp_reset_query(); ?>
	</div>
</section>

<section class="split50 bg-green">
	<div class="wrapper">
		<h5 class="title">National Champions</h5>
	</div>
	<div class="wrapper-gutters flip">
		<div class="column-half photo">
			<div><p><?php echo "<br><br/>"; ?></p></div>
			<div style='text-align:center'><font color="white"><h4 class="title">Winning Team at ASME Conference 2018</h4></font></div>
			<?php 
				echo "<br>";
				$image = get_field('champion_image'); ?>
				<img class="push800" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
		<div class="column-half photo">
			<div><p><?php echo "<br><br/>"; ?></p></div>
			<div style='text-align:center'><font color="white"><h4 class="title">Winning Team at Capstone Conference 2018</h4></font></div>
			<?php
				echo "<br>";
				$image = get_field('champion_image2'); ?>
				<img class="push800" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
	</div>
</section>

<div>
	<p><?php echo "<br><br/>"; ?></p>
</div>


<h2 class="title">RECENT PROJECT SPONSORS</h2>	
<div>
	<?php echo do_shortcode("[smls id='1781']"); ?>
</div>

<div style='text-align:center'><font color="white">
	<h4 class="title">I</h4>
	<h4 class="title">I</h4>
</font></div>

<h2 class="title">STUDIO SPONSORS</h2>
<div>
	<?php echo do_shortcode("[smls id='1764']"); ?>
</div>

<div style='text-align:center'><font color="white">
	<h4 class="title">I</h4>
	<h4 class="title">I</h4>
</font></div>

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
	