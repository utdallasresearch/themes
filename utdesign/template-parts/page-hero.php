<div id="hero" class="wrapper-table">
    <div class="row">
        <?php $featured_image_url = get_the_post_thumbnail_url() ?>
        <div class="cell <?= $featured_image_url ? 'has-featured-image' : 'no-featured-image' ?>" <?= $featured_image_url ? ("style='background-image:url($featured_image_url)'") : '' ?>>
            <h1><?php the_title() ?></h1>

            <?php if (is_single()) : ?>
                <div class="post-meta">
                    <h3 class="post-meta-item post-date"><?php the_time('F jS, Y'); ?></h3>
                    <h3 class="post-meta-item post-category"><?php the_category(', '); ?></h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>