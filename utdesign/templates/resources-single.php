<?php
	//Template Name: Resources (single)
	get_header(); ?>
	
<div id="hero" class="wrapper-table">
	<div class="row">
		<div class="cell" style="background:url(<?php the_post_thumbnail_url(); ?>)center center no-repeat; background-size:cover;">
			<?php if(get_field('calendar')): ?><span class="subhead">Reserve</span><?php endif; ?>
			<h1><?php the_field('headline'); ?></h1>
			<?php if(get_field('room_number')): ?><span class="subhead"><?php the_field('room_number'); ?></span><?php endif; ?>
		</div>
	</div>
</div>

<section>
	<div class="wrapper-gutters">
		<div class="column-two-third content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; endif; ?>
			<?php if(get_field('calendar')){ the_field('calendar'); } ?>
		</div>
		<div id="sidebar" class="column-third">
			<ul class="sidenav">
				<li><a href="/resources/reserve">Reserve Resources</a></li>
				<li><a href="/resources/vendors">Vendors</a></li>
				<li><a href="/resources/student-guidelines">Student Guidelines</a></li>
				<li><a href="/resources/project-schedule">Sample Project Schedule</a></li>
			</ul>
			<h4 class="title">Resources</h4>
			<ul class="sidenav">
				<li><a href="/resources/3-d-printer">3-D Printer</a></li>
				<li><a href="/resources/classrooms">Classrooms</a></li>
				<li><a href="/resources/conference-rooms">Conference Rooms</a></li>
				<li><a href="/resources/fabrication-shop">Fabrication Shop</a></li>
				<li><a href="/resources/forms-templates">Forms &amp; Templates</a></li>
				<li><a href="/resources/open-lab">Open Lab</a></li>
				<li><a href="/resources/ordering">Ordering</a></li>
				<li><a href="/resources/printing">Printing / Scanning / Faxing</a></li>
				<li><a href="/resources/software">Software</a></li>
			</ul>
		</div>
	</div>
</section>	
	
	
<?php get_footer(); ?>





