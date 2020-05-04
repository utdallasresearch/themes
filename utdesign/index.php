<?php get_header();?>

<div id="news" class="archive">
	<?php 
		$posts = get_field('featured_news', 3);
		if( $posts ): ?>
		    <?php foreach( $posts as $post): ?>
		        <?php setup_postdata($post); ?>
		        
		        	<?php $feat = get_the_ID(); ?>
		            <div class="feat art" style="background-color:#008542;">
			            <?php if(get_field('article_url')): ?>
			            	<a href="<?php the_field('article_url'); ?>">
				        <?php else: ?>
			            	<a href="<?php the_permalink(); ?>">
				        <?php endif; ?>
				            <?php the_post_thumbnail(); ?>
							<span class="feat-title">Featured Article</span>
							<h4><?php the_title(); ?></h4>
							<span class="more">Read <i class="fa fa-long-arrow-right"></i></span>
			            </a>
					</div>
		            
		    <?php endforeach; ?>
		    <?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
		<?php
			$querypost = array(
				'post_type'			=> 'post',
				'posts_per_page'	=> -1,
				'post__not_in' 		=> isset($feat) ? [$feat] : [],
				'orderby'			=> 'date',
				'order'				=> 'DESC'
				);
			query_posts($querypost); ?>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					
					<div class="art">
						<?php if(get_field('article_url')): ?>
			            	<a href="<?php the_field('article_url'); ?>">
				        <?php else: ?>
			            	<a href="<?php the_permalink(); ?>">
				        <?php endif; ?>
							<?php the_post_thumbnail(); ?>
							<h4><?php the_title(); ?></h4>
							<span class="more">Read <i class="fa fa-long-arrow-right"></i></span>
						</a>
					</div> 
					
				    	    		    	    
				<?php endwhile; endif;
			wp_reset_query(); ?>
	
</div>
<div style="clear:both;"></div>

<?php get_footer();?>


