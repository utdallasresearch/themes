<?php
/**
 * Template Name: Homepage
 *
 * @package  TxACE
 */

$slides = new WP_Query([
    'post_type' => 'slide',
    'posts_per_page' => (int) get_theme_mod('homepage_slide_limit', -1),
    'orderby' => get_theme_mod('homepage_slide_orderby', 'rand'),
    'order' => get_theme_mod('homepage_slide_order', 'asc'),
]);
$participating_image_bg = get_theme_mod('homepage_participating_image_bg');
$participating_image_lines = get_theme_mod('homepage_participating_image_lines');
$participating_image = get_theme_mod('homepage_participating_image');
$events_feed = get_theme_mod('homepage_event_feed', '5021');
$events_year = get_theme_mod('homepage_event_year');
$events_count = get_theme_mod('homepage_event_count', '3');
$events_order = get_theme_mod('homepage_event_order', 'asc');
$events_showing = get_theme_mod('homepage_event_showing', 'earliest');
?>
<?php get_header(); ?>

<div class="page-header-bg">
    <div class="page-header-wrapper">
        <h3 class="page-subheader"><?php echo get_bloginfo( 'description' ); ?></h3>
    </div>
</div>

<!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php for($i = 0; $i < $slides->post_count; $i++): ?>
                    <li data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
                <?php endfor; ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <?php if ( $slides->have_posts() ) : while ( $slides->have_posts() ) : $slides->the_post(); ?>
                <div class="item <?php echo ($slides->current_post === 0) ? 'active' : '' ?>">
                    <div class="fill" style="background-image:url('<?php echo the_post_thumbnail_url('large'); ?>');"></div>
                    <div class="carousel-caption">
                        <h2><?php the_content(); ?></h2>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_query();?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>

        <!-- Secondary menu buttons -->

        <div class="container">
                <?php
                    wp_nav_menu([
                        'container_class'   => '',
                        'container_id'      => 'secondarymenu',
                        'theme_location'    => 'secondary-menu',
                        'menu'              => 'secondary-menu',
                        'menu_class'        => 'button',
                    ]);
                ?>
        </div>
 <!--    </div> -->
</div>
<!-- Page Content -->

<div class="page-header-bg">
    <div class="page-header-wrapper">
        <h1 class="page-header">News and Events</h1>
    </div>
</div>

<div class="container">
    <!-- News -->
    <div class="row row-full-height">
       <!--  <div class="col-lg-12"> -->
       <!--  </div> -->
            <?php $the_query = new WP_Query(['posts_per_page' => 3, 'cat' => get_cat_ID('Featured'),]); ?>

            <?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-4 col-full-height">
                <a href="<?php the_permalink() ?>" class="post-panel-link col-full-height-content">
                <div class="panel panel-default post-panel col-full-height-content">
                <?php if(has_post_thumbnail()): ?>
                    <div class="panel-heading" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);)">
                <?php else: ?>
                    <div class="panel-heading senanga-bg">
                <?php endif; ?>
                        <h4><?php the_title(); ?></h4>
                    </div>

                    <div class="panel-body">
                        <?php the_excerpt(__('(more…)')); ?>
                    </div>
                </div>
                </a>
            </div>
            <?php endwhile; ?>
    </div> <!-- /.row -->

    <div class="row more-news-row">
        <div class="col-sm-12 text-center">
            <p><a href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>" class="btn btn-more btn-xs">More News</a></p>
        </div>
    </div>

    <!-- Events -->

    <div class="homepage-events">
        <?= do_shortcode("[cometcalendar feed=\"$events_feed\" year=\"$events_year\" order=\"$events_order\" limit=\"$events_count\" limit_showing=\"$events_showing\"]") ?>
    </div>

    <div class="row more-events-row">
        <div class="col-sm-12 text-center">
            <p><a href="<?= get_site_url() ?>/events" class="btn btn-more btn-xs">More Events</a></p>
        </div>
    </div>

</div>

<?php if($participating_image): ?>
<!-- Participating Institutions -->

<div class="page-header-bg">
    <div class="page-header-wrapper">
        <h1 class="page-header">Participating Institutions</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="participating-wrapper">
            <img class="participating-image-bg" src="<?= $participating_image_bg ?>">
            <img class="participating-image-lines animated fadeOut" src="<?= $participating_image_lines ?>">
            <img class="participating-image animated zoomOut" src="<?= $participating_image ?>">
        </div>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>