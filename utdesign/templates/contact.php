<?php
	//Template Name: Contact
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
			<iframe src="https://utdallas.qualtrics.com/jfe/form/SV_8cRjtqMq57gLjzn" height="950px" width="600px"></iframe>
<!--			<form>
				<input type="text" id="name" name="name" placeholder="Name">
				<input type="email" id="email" name="email" placeholder="Email">
				<input type="number" id="phone" name="phone" placeholder="Phone">
				<input type="text" id="company" name="company" placeholder="Company">
				<textarea name="message" placeholder="Message"></textarea>
				<input type="submit" value="Submit">
			</form> -->
			
		</div>
		<div class="column-half faculty">
			<h3 class="title">UTDESIGN STAFF</h3>
			<?php
				if( have_rows('faculty_contact') ):
				    while ( have_rows('faculty_contact') ) : the_row(); ?>
				        
						<div class="wrapper-table fac-wrapper">
							<div class="row">
								<div class="cell photo">
									<img src="<?php the_sub_field('photo'); ?>">
								</div>
								<div class="cell">
									<span><strong><?php the_sub_field('name'); ?></strong></span>
									<span><em><?php the_sub_field('title'); ?></em></span>
									<span><a href="mailto:<?php the_sub_field('email'); ?>"><i class="fa fa-envelope"></i></a> | <a href="tel:<?php echo preg_replace('/\D+/', '', get_sub_field('phone') ); ?>"><?php the_sub_field('phone'); ?></a></span>
									<span><?php the_sub_field('office'); ?></span>
								</div>
							</div>
						</div>
				
				    <?php endwhile;
				endif; ?>
				
				
				<?php
					if( have_rows('faculty_contact_ii') ):
					    while ( have_rows('faculty_contact_ii') ) : the_row(); ?>
					        
							<div class="wrapper-table fac-wrapper">
								<div class="row">
									<div class="cell photo">
										<img src="<?php the_sub_field('photo'); ?>">
									</div>
									<div class="cell">
										<span><strong><?php the_sub_field('name'); ?></strong></span>
										<span><em><?php the_sub_field('title'); ?></em></span>
										<span><a href="mailto:<?php the_sub_field('email'); ?>"><i class="fa fa-envelope"></i></a> | <a href="tel:<?php echo preg_replace('/\D+/', '', get_sub_field('phone') ); ?>"><?php the_sub_field('phone'); ?></a></span>
										<span><?php the_sub_field('office'); ?></span>
									</div>
								</div>
							</div>
					
					    <?php endwhile;
					endif; ?>
				
				<div style="clear:both;"></div>
				
			<div id="facultycontact">
				
				<h3 class="title">UTDesign Capstone Faculty Directors</h3>
				
				<?php
					if( have_rows('utdesign_directors') ):
					    while ( have_rows('utdesign_directors') ) : the_row(); ?>
					        
							<div class="wrapper-table fac-wrapper">
								<div class="row">
									<div class="cell photo">
										<img src="<?php the_sub_field('photo'); ?>">
									</div>
									<div class="cell">
										<span><strong><?php the_sub_field('name'); ?></strong></span>
										<span><em><?php the_sub_field('title'); ?></em></span>
										<span><a href="mailto:<?php the_sub_field('email'); ?>"><i class="fa fa-envelope"></i></a> | <a href="tel:<?php echo preg_replace('/\D+/', '', get_sub_field('phone') ); ?>"><?php the_sub_field('phone'); ?></a></span>
										<span><?php the_sub_field('office'); ?></span>
									</div>
								</div>
							</div>
					
					    <?php endwhile;
					endif; ?>
				
				<div style="clear:both;"></div>
				
<!--				<h3 class="title">CORPORATE RELATIONS - UTDESIGN</h3>
				
				<?php
					if( have_rows('corporate_relations') ):
					    while ( have_rows('corporate_relations') ) : the_row(); ?>
					        
							<div class="wrapper-table fac-wrapper">
								<div class="row">
									<div class="cell photo">
										<img src="<?php the_sub_field('photo'); ?>">
									</div>
									<div class="cell">
										<span><strong><?php the_sub_field('name'); ?></strong></span>
										<span><em><?php the_sub_field('title'); ?></em></span>
										<span><a href="mailto:<?php the_sub_field('email'); ?>"><i class="fa fa-envelope"></i></a> | <a href="tel:<?php echo preg_replace('/\D+/', '', get_sub_field('phone') ); ?>"><?php the_sub_field('phone'); ?></a></span>
										<span><?php the_sub_field('office'); ?></span>
									</div>
								</div>
							</div>
					
					    <?php endwhile;
					endif; ?>
				
				<div style="clear:both;"></div>
				
				<h3 class="title">CORPORATE RELATIONS - JONSSON SCHOOL</h3>
				
				<?php
					if( have_rows('corporate_relations_jonsson') ):
					    while ( have_rows('corporate_relations_jonsson') ) : the_row(); ?>
					        
							<div class="wrapper-table fac-wrapper">
								<div class="row">
									<div class="cell photo">
										<img src="<?php the_sub_field('photo'); ?>">
									</div>
									<div class="cell">
										<span><strong><?php the_sub_field('name'); ?></strong></span>
										<span><em><?php the_sub_field('title'); ?></em></span>
										<span><a href="mailto:<?php the_sub_field('email'); ?>"><i class="fa fa-envelope"></i></a> | <a href="tel:<?php echo preg_replace('/\D+/', '', get_sub_field('phone') ); ?>"><?php the_sub_field('phone'); ?></a></span>
										<span><?php the_sub_field('office'); ?></span>
									</div>
								</div>
							</div>
					
					    <?php endwhile;
					endif; ?>
-->			
			</div>
			
						
			<!--<a id="staffcontact">More UTDesign Team Faculty</a>-->
			
			
			
		</div>
	</div>
</section>
	
<section id="splitter">
	<div class="wrapper-table">
		<div class="row">
			<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6692.937940745233!2d-96.7561748796738!3d32.99140933383182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSynergy+Park+North+Building!5e0!3m2!1sen!2sus!4v1511995333687" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
			<div class="cell" style="background:url(https://utdesign.utdallas.edu/wp-content/uploads/2019/06/UTDesign-Studio-Map-1.png)center center; background-size:cover;">
			</div>
		</div>
	</div>
</section>

<section id="contact-address">
	<div class="wrapper-gutters">
		<div class="column-fourth">
			<h4 class="title">Mailing Address</h4>
			<?php the_field('mailing_address'); ?>
		</div>
		<div class="column-fourth">
			<h4 class="title">Location and Directions</h4>
			<?php the_field('locations_&_directions'); ?>
		</div>
		<div class="column-fourth">
			<h4 class="title">Locating the UTDesign Studio</h4>
			<?php the_field('locating_the_utdesign_studio'); ?>
		</div>
		<div class="column-fourth">
			<h4 class="title">Parking</h4>
			<?php the_field('parking'); ?>
		</div>
	</div>
</section>


	
<?php get_footer(); ?>




















