<?php
	//Template Name: Faculty
	get_header(); ?>
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell persona" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<h1><?php the_field('headline'); ?></h1>
		</div>
	</div>
</div>





<section class="split50">
	<div class="wrapper">
		<h2 class="title">Overview of the Program</h2>
	</div>
	<div class="wrapper-gutters flip">
		<div class="column-half photo">
			<?php 
				$image = get_field('overview_image'); ?>
				<img class="push800" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
		<div class="column-half copy">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; endif; ?>
		</div>
	</div>
</section>



<section id="benefits" class="no-top">
	<div class="wrapper-gutters">
		<h2 class="title">Benefits</h2>
		<div class="column-half">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-10.svg">
					</div>
					<div class="cell">
						<span>Learn what is occurring in industry and possibly further your research</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-11.svg">
					</div>
					<div class="cell">
						<span>Interact with engineers from industry and build your professional network</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-12.svg">
					</div>
					<div class="cell">
						<span>Help build relationships between the Jonsson School and local companies</span>
					</div>
				</div>
			</div>
			
		</div>
		<div class="column-half">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-13.svg">
					</div>
					<div class="cell">
						<span>Share your specialized expertise with a team of dedicated, highly motivated students</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-14.svg">
					</div>
					<div class="cell">
						<span>Support a key program that prepares our students for engineering careers</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-15.svg">
					</div>
					<div class="cell">
						<span>Help distinguish our graduates from those of other universities</span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


<section class="bg-orange">
	<div class="wrapper-gutters">
		<h2 class="title">Roles</h2>
		<div class="column-half">
			<?php the_field('roles_text_col_1'); ?>
		</div>
		<div class="column-half">
			<?php the_field('roles_text_col_2'); ?>
		</div>
	</div>
</section>



<section class="split50 bg-green">
	<?php 
		$image = get_field('expectations_image'); ?>
		<img class="sectionimg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<div class="wrapper">
		<h2 class="title">Expectations</h2>
	</div>
	<div class="wrapper-table">
		<div class="row">
			<div class="cell copy">
				<?php the_field('expectations_text'); ?>
			</div>
			<div class="cell photo">
				<?php 
					$image = get_field('expectations_image'); ?>
					<img class="push800" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
			<div class="cell copy">
				<?php the_field('expectations_text'); ?>
			</div>
		</div><!-- .row -->
	</div>
</section>




<section id="ip" class="split50">
	<div class="wrapper-gutters">
		<h2 class="title">IP &amp; NDA</h2>
		<div class="column-half">
			<p>UTDesign research projects may result in ideas, inventions, creations, developments or improvements that are important to corporate sponsors.  Partners typically secure rights to UTDesign intellectual property by having student participants sign intellectual property (IP) and non-disclosure agreements (NDA). The corporate partner and faculty advisor sign the UTDesign NDA agreement as well.</p>
		</div>
		<div class="column-half">
			<p>A mutually agreeable NDA, as defined by UT Dallas and your company, should be signed. The UTDesign faculty advisor and department director will facilitate this process by providing a UTDesign NDA. The corporate sponsor is encouraged to review and propose any necessary changes, which must be approved by UT Dallas before all parties sign.</p>
		</div>
	</div>
</section>

<section id="budget" class="bg-blue1">
	<div class="wrapper-gutters">
		<h2 class="title">Budget</h2>
	</div>
	<div class="wrapper-gutters">
		<div class="column-half">
			<p>Each UTDesign team has a budget of up to $2,000 for the entire project ($1,000 for Computer Science). This allowance can be used only for materials and supplies needed for the project.</p>
<p>Some projects may require equipment that exceeds the assigned budget. In this case, the team should work with the UTDesign department director and corporate mentor to determine the best way to proceed.</p>

		</div>
		<div class="column-half">
		<p>Every purchase needs approval from the team’s faculty advisor. Purchase request forms will be returned to the team if they have not been previously approved by the faculty advisor. Approval can be done through email or by signing the request form.</p>
<p>The <a href="http://utdesign.modmktg.com/wp-content/uploads/2017/11/UTDesign-purchase-process.docx">UTDesign purchase process document <i class="fa fa-file-word-o"></i></a> provides all the information needed to order what the team needs for the project.</p>
<p>It is very important that your team reads and understand the procedure.</p>
		</div>
	</div>
</section>

<section id="faq">
	<div class="wrapper-gutters">
		<h2 class="title">FAQ</h2>
	</div>
	<div class="wrapper-table">
	<?php $wp_querypost = array(
		'post_type'			=> 'faqpost',
		'posts_per_page'	=> 2,
		'orderby'			=> 'rand'
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













