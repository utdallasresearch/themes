<?php
// Template Name: Full Width
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
            <?php get_template_part('template-parts/page-after') ?>
			<div style="clear:both;"></div>
		</div>
	</div>
</section>

<?php
endwhile;
get_footer();
?>