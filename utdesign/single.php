<?php
get_header();
while (have_posts()) : the_post();
?>

<!-- Page Hero -->
<?php get_template_part('template-parts/page-hero') ?>

<!-- Page Content -->
<section>
	<div class="wrapper-gutters">
		<div class="column">

			<?php the_content() ?>

			<?php if(get_field('article_url')): ?>
				<a href="<?php the_field('article_url'); ?>">
					<span class="more">Read more <i class="fa fa-long-arrow-right"></i></span>
				</a>
			<?php endif; ?>

			<?php get_template_part('template-parts/page-after') ?>

			<div style="clear:both;"></div>
		</div>
	</div>
</section>

<?php
endwhile;
get_footer();
?>