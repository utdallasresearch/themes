<?php
	//Template Name: Companies_General
	get_header(); ?>
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell persona" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<h1><?php the_field('headline'); ?></h1>
		</div>
	</div>
</div>

<section class="cta bg-green2">
	<div class="wrapper-gutters">
		<div class="column-two-third">
			<span>What can our students do for you?</span>
		</div>
		<div class="column-third" style = "text-align:center;">
			<div class="dropdown">
				<button class="dropbtn">Let's Talk</button>
				<div class="dropdown-content">
					<a href="/contact">Email us</a>
					<a href="https://utdallas.qualtrics.com/jfe/form/SV_d4HuL6sWWS7gsQd">Schedule a phone call</a>
					<a href="https://utdallas.qualtrics.com/jfe/form/SV_9zTKmHiVuSwtP6J">Schedule a studio visit</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="wrapper-gutters">
		<h2 class="title">A Company’s Role in UTDesign</h2>
		<div class="column-half">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; endif; ?>
		</div>
		<div class="column-half">
			<?php 
				$image = get_field('overview_image'); ?>
				<img class="push" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
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
						<img src="<?php bloginfo('template_url');?>/images/bf-1.svg">
					</div>
					<div class="cell">
						<span>Progress on lower-priority projects without expending staff resources</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-2.svg">
					</div>
					<div class="cell">
						<span>Potential for high return on a small investment</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-3.svg">
					</div>
					<div class="cell">
						<span>Opportunity to recruit top graduates from a diverse pool of students</span>
					</div>
				</div>
			</div>
			
		</div>
		<div class="column-half">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-4.svg">
					</div>
					<div class="cell">
						<span>Full ownership of results</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-5.svg">
					</div>
					<div class="cell">
						<span>Relationships with faculty members who are subject matter experts</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-6.svg">
					</div>
					<div class="cell">
						<span>Brand promotion among students, other sponsors, and the community</span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


<section id="deliverables" class="bg-green">
	<?php 
		$image = get_field('deliverables_image'); ?>
		<img class="sectionimg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<div class="wrapper-gutters">
		<h2 class="title">Deliverables</h2>
		<div class="column-half">
			<?php 
				$image = get_field('deliverables_image'); ?>
				<img class="push800" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
		<div class="column-half">
			<?php the_field('deliverables_text'); ?>
		</div>
	</div>
</section>

<section class="cta bg-green2">
	<div class="wrapper-gutters">
		<div class="column-two-third">
			<span>Ready to discuss a project idea?</span>
		</div>
		<div class="column-third">
			<div class="button clear">
				<a href="https://utdallas.qualtrics.com/jfe/form/SV_bwtu6EoYKKzjCPr?Q_JFE=qdg">Click HERE</a>
			</div>
		</div>
	</div>
</section>

<section id="ip">
	<div class="wrapper-gutters">
		<h2 class="title">IP &amp; NDA</h2>
		<div class="column-half">
			<?php the_field('ip_&_nda'); ?>
		</div>
		<div class="column-half">
			<h3 class="title">For the Student</h3>
			<?php the_field('ip_for_the_student'); ?>
			<h3 class="title">For the UT Dallas Advisor</h3>
			<?php the_field('ip_for_the_faculty_advisor'); ?>
		</div>
	</div>
	<span>You retain 100% of the IP for the work and results</span>
</section>


<section id="cost" class="no-top">
	<div class="wrapper-gutters">
		<h2 class="title">Cost</h2>
		<div class="column-three-fourth">
			<span><strong>Computer Science and Software Engineering projects</strong> (one semester):</span>
		</div>
		<div class="column-fourth">
			<span class="c-orange"><strong>$10,000</strong></span>
		</div>
	</div>
	<div class="wrapper-gutters">
		<div class="column-three-fourth">
			<span><strong>Engineering projects</strong> (two semesters):</span>
		</div>
		<div class="column-fourth">
			<span class="c-green"><strong>$15,000</strong></span>
		</div>
	</div>
<div class="wrapper-gutters">
		<div class="column-half">
			<p>Funding from corporate partners supports UTDesign Capstone projects by providing materials, licensing, studio facilities, staff and UT Dallas Advisor.  The cost above covers up to $3,000 for materials and fabrication expenses for engineering projects, and $1,000 for computer science.  The UT Dallas Advisor and corporate mentor will discuss options for reimbursing costs that exceed these expenses.</p>
		</div>
		<div class="column-half">
			<h3 class="title">Gifts to Support the Studio</h3>
			<p>In addition to hosting senior teams, several companies elect to support the entire studio in ways that include:</p>
<ul>
<li>In-kind donations: equipment, parts and services.</li>
<li>Naming opportunities:  a few opportunities still exist for donors to name labs, conference rooms or classrooms.</li>
<li>Competitions:  typically using technology from the gifting company.</li>
<li>Events: tech talks, seminars, social networking, tech meet-ups, etc.</li>
</ul>
		</div>
	</div>
</section>


<section class="bg-orange">
	<div class="wrapper-gutters">
		<h2 class="title">Roles</h2>
		<div class="column-half">
			<?php the_field('roles_column_1'); ?>
		</div>
		<div class="column-half">
			<?php the_field('roles_column_2'); ?>
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
		'faqcat'			=> 'corporate',
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
	<div class="button blu text_align-center">
		<a href="/faq?ref=corporate">More FAQs</a>
	</div>
</section>

	
	
<?php get_footer(); ?>













