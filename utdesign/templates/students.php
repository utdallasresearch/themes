<?php
	//Template Name: Students
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
						<img src="<?php bloginfo('template_url');?>/images/bf-1.svg">
					</div>
					<div class="cell">
						<span>Get exposure to real engineering problems</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-7.svg">
					</div>
					<div class="cell">
						<span>Get guidance from two experts in the area – a corporate mentor and a faculty advisor</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-8.svg">
					</div>
					<div class="cell">
						<span>Learn new technology used in the workplace</span>
					</div>
				</div>
			</div>
			
		</div>
		<div class="column-half">
			<div class="wrapper-table">
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-9.svg">
					</div>
					<div class="cell">
						<span>Gain industry experience</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-5.svg">
					</div>
					<div class="cell">
						<span>Have opportunities for internships or employment recruitment by company sponsors</span>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<img src="<?php bloginfo('template_url');?>/images/bf-6.svg">
					</div>
					<div class="cell">
						<span>Learn more from working in a team environment</span>
					</div>
				</div>
			</div>
			
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


<section class="split50 bg-orange">
	<?php 
		$image = get_field('deliverables_image'); ?>
		<img class="sectionimg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<div class="wrapper">
		<h2 class="title">Deliverables</h2>
	</div>
	<div class="wrapper-table flip">
		<div class="row">
			<div class="cell copy">
<p>During the semester, the team will have a set of deliverables that is specific to the project and the department. The list commonly includes:</p>
<ul>
<li>Technical reports</li>
<li>Drawings and design specifications</li>
<li>Prototypes, computer programs, simulation models</li>
<li>Final report and presentation</li>
<li>Test and evaluations results</li>
</ul>
			</div>
			<div class="cell photo">
				<?php 
					$image = get_field('deliverables_image'); ?>
					<img class="push800" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
			<div class="cell copy">
				<p>During the semester, the team will have a set of deliverables that is specific to the project and the department. The list commonly includes:</p>
<ul>
<li>Technical reports</li>
<li>Drawings and design specifications</li>
<li>Prototypes, computer programs, simulation models</li>
<li>Final report and presentation</li>
<li>Test and evaluations results</li>
</ul>
			</div>
		</div><!-- .row -->
	</div>
</section>








<section id="ip">
	<div class="wrapper-gutters">
		<h2 class="title">IP &amp; NDA</h2>
		<div class="column-half">
			<p> UTDesign Capstone projects may result in ideas, inventions, creations, developments or improvements that are important to corporate sponsors. Partners typically secure rights to UTDesign intellectual property by having student participants sign intellectual property (IP) and non-disclosure agreements (NDA).</p>
		</div>
		<div class="column-half">
			<h3 class="title">Intellectual Property Agreement</h3>
			<?php the_field('intellectual_property_agreement'); ?>

			<h3 class="title">Non-Disclosure Agreement</h3>
			<?php the_field('non-discolsure_agreement'); ?>
		</div>
	</div>
</section>


<section id="budget" class="bg-blue1">
	<div class="wrapper-gutters">
		<h2 class="title">Budget</h2>
	</div>
	<div class="wrapper-gutters">
		<div class="column-half">
			<?php the_field('column_1'); ?>
		</div>
		<div class="column-half">
			<?php the_field('column_2'); ?>
		</div>
	</div>
</section>



<section id="faq">
	<div class="wrapper-gutters">
		<h2 class="title">FAQ</h2>
	</div>
	<div class="wrapper-table">
						<div class="row">
				<div class="cell qa c-orange">
					Q
				</div>
				<div class="cell question">
					<p>How do I find general information about student project resources?</p>
				</div>
			</div>
			<div class="row">
				<div class="cell qa c-green">
					A
				</div>
				<div class="cell answer">
					<p>The best source of information for your UTDesign project is the <a href= "https://www.utdallas.edu/utdesign/students/resources/"> UTDesign webpage</a></p>
					<p>Through that link, you will find all the resources available for our students:  reserving a conference room, downloading a reimbursement form, etc., and a must-read document, the “Student Guidelines.” </p>
				</div>
			</div>
	    			<div class="row">
				<div class="cell qa c-orange">
					Q
				</div>
				<div class="cell question">
					<p>How do I purchase items for my UTDesign project?</p>
				</div>
			</div>
			<div class="row">
				<div class="cell qa c-green">
					A
				</div>
				<div class="cell answer">
					<p>Complete the UTDesign procurement form provided on the website using the following <a href= "http://utdesign.modmktg.com/wp-content/uploads/2017/11/UTDesign-purchase-process_rev2017.pdf"> purchasing process</a>
					</p>
					<p>Under Students, Forms. The purchasing process is outlined under Students, Overview, and Budget.  Give completed forms to the project’s UT Dallas Advisor for approval. Projects 							have a limited budget, and you are responsible to keep your project’s expenditures within that budget. Once your order has arrived, you will be notified to pick it up at SPN.</p>
				</div>
			</div>
	    		</div>
	<div class="button blu text_align-center">
		<a href="/faq?ref=student">More FAQs</a>
	</div>
</section>

	
	

	
	
<?php get_footer(); ?>













