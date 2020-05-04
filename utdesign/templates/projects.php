<?php
	//Template Name: Projects
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
		<div class="column-three-fourth">
			
			<?php 
				if( have_rows('semester') ):
				    while ( have_rows('semester') ) : the_row(); ?>
				    
				    <a class="anchor" name="<?php the_sub_field('semester'); ?>"></a>
				    <h2 class="title extra"><?php the_sub_field('label'); ?></h2>	
				
				    <?php $querypost = array(
							'post_type'			=> 'project',
							'posts_per_page'		=> -1,
							'orderby'			=> 'date',
							'order'				=> 'DESC',
							'semester'			=> get_sub_field('semester')
							);
							query_posts($querypost); 
								if(have_posts()): while(have_posts()): the_post(); ?>
					    	    
					    	    	<div class="project-wrapper">
						    	    	
						    	    	<h4><?php the_title(); ?></h4>
						    	    	
						    	    	<?php if( has_term( 'first', 'attributes' )): ?>
											<img class="medal" src="<?php bloginfo('template_url');?>/images/gold.svg">
										<?php elseif( has_term( 'second', 'attributes' )): ?>
											<img class="medal" src="<?php bloginfo('template_url');?>/images/silver.svg">
										<?php elseif( has_term( 'third', 'attributes' )): ?>
											<img class="medal" src="<?php bloginfo('template_url');?>/images/bronze.svg">
						    	    	<?php endif; ?>
						    	    	
						    	    	<span><strong>Department:</strong> <?php the_field('department'); ?></span>
						    	    	<span><strong>Sponsor:</strong> <?php the_field('sponsor'); ?></span>
						    	    	<?php if(get_field('pdf')): ?><span><strong>Download:</strong> <a href="<?php the_field('pdf'); ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> PDF</a></span><?php endif; ?>
						    	    	<?php the_content(); ?>
						    	    </div>
					    	    		    	    
								<?php endwhile; endif;
							wp_reset_query();
				    endwhile; endif; ?>
			
			
			
		</div>
		<div class="column-fourth">
			<ul class="sidenav">
				<?php
					if( have_rows('semester') ):
					    while ( have_rows('semester') ) : the_row(); ?>
					
							<li><a href="#<?php the_sub_field('semester'); ?>"><?php the_sub_field('label'); ?></a></li>
					
					    <?php endwhile; endif; ?>
			</ul>
		</div>
	</div>
</section>	
	
	
	
<?php get_footer(); ?>