<?php
//Template Name: Home
get_header(); ?>

<div
	id="herohome"
	<?php if (get_field('hero') == 'image') : ?>
		style="background:url(<?php $image = get_field('image');echo $image['url']; ?>) center center no-repeat; background-size:cover;"
	<?php endif; ?>
>

	<?php if (get_field('hero') == 'video') : ?>
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
				<?php if (get_field('hero_subhead_after_headline')): ?>
					<h2><?php the_field('hero_headline'); ?></h2>
					<span class="subhead"><?php the_field('hero_subhead'); ?></span>
				<?php else: ?>
					<span class="subhead"><?php the_field('hero_subhead'); ?></span>
					<h2><?php the_field('hero_headline'); ?></h2>
				<?php endif; ?>
			</div>
		</div>
	</div>

</div>


<section class="big-msg bg-green2">
	<div class="wrapper-columns">
		<div class="personas">
			<a href="<?php the_field('left_block_link') ?>">
				<?php the_field('left_block_title') ?>
				<?php if (get_field('left_block_text')) : ?>
					<span><?php the_field('left_block_text') ?></span>
				<?php endif; ?>
				<?php if (get_field('left_block_more')) : ?>
					<?php the_field('left_block_more'); ?>
				<?php endif; ?>
			</a>
			<a href="<?php the_field('center_block_link') ?>">
				<?php the_field('center_block_title') ?>
				<?php if (get_field('center_block_text')) : ?>
					<span><?php the_field('center_block_text') ?></span>
				<?php endif; ?>
				<?php if (get_field('center_block_more')) : ?>
					<?php the_field('center_block_more'); ?>
				<?php endif; ?>
			</a>
			<a href="<?php the_field('right_block_link') ?>">
				<?php the_field('right_block_title') ?>
				<?php if (get_field('center_block_text')) : ?>
					<span><?php the_field('right_block_text') ?></span>
				<?php endif; ?>
				<?php if (get_field('right_block_more')) : ?>
					<?php the_field('right_block_more'); ?>
				<?php endif; ?>
			</a>
		</div>
		<p><?php the_field('big_message'); ?></p>
	</div>
</section>

<section class="content">
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
}
?>
</section>

<?php
$stats = new WP_Query([
	'post_type'			=> 'stats',
	'posts_per_page'	=> 4,
	'orderby'			=> 'rand',
	'order'				=> 'DESC',
]);
?>
<?php if ($stats->have_posts()) : ?>
	<section id="stats">
		<div class="wrapper-gutters">
			<?php foreach ($stats->get_posts() as $stat): ?>
				<div class="column-fourth">
					<?php if (get_field('before_number', $stat->ID)) : ?>
						<span class="buddy"><?php the_field('before_number', $stat->ID); ?></span>
					<?php endif; ?>
					<span class="number counter <?php the_field('type_of_number', $stat->ID); ?>">
						<?php the_field('number', $stat->ID); ?>
					</span>
					<?php if (get_field('after_number', $stat->ID)) : ?>
						<span class="buddy"><?php the_field('after_number', $stat->ID); ?></span>
					<?php endif; ?>
					<?php echo apply_filters('the_content', $stat->post_content) ?>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>

<?php
$featured_news_category = get_field('featured_news_category');
$featured_news = new WP_Query([
	'post_type'	=> 'post',
	'posts_per_page' => 5,
	'cat' => $featured_news_category,
	'orderby' => 'date',
	'order' => 'DESC',
]);
?>
<?php if ($featured_news_category && $featured_news->have_posts()) : ?>
	<h2 class="title">News</h2>
	<div id="news" class="about-foot">
		<?php foreach ($featured_news->get_posts() as $news): ?>
			<div class="art">
				<?php if (get_field('article_url', $news->ID)) : ?>
					<a href="<?php the_field('article_url', $news->ID); ?>">
				<?php else : ?>
					<a href="<?= get_permalink($news); ?>">
				<?php endif; ?>
					<?= get_the_post_thumbnail($news); ?>
					<h4><?= get_the_title($news); ?></h4>
					<span class="more">Read <i class="fa fa-long-arrow-right"></i></span>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>