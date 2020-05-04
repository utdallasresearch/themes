<?php

    /**
     * Template Name: Homepage
     *
     * @package  Nanotech
     */

?>

<?php get_header(); ?>
  <div class="row site-description">
      <div class="container mission-statement">
        <p><?= get_field('mission_statement') ?: 'Guided by theory and enabled by synthesis, the NanoTech Institute develops new science and technology exploiting the nanoscale.' ?></p>
      </div>
  </div>
  <div class="row hero-image-with-boxes">
    <div class="col-md-12 header-image">
      <div class="main-section background-image" style="background-image: url(<?php header_image(); ?>);">
        <div class="container topic-boxes">
          <div class="row row-full-height">
            <div class="col-md-4 col-full-height">
              <div class="topic-box col-full-height-content">
                <h3 class="topic-box-header"><?php the_field('top_left_box_header'); ?></h3>
                <div class="topic-box-text"><?php the_field('top_left_box_paragraph_text'); ?></div>
                <a href="<?php the_field('top_left_box_button'); ?>" class="btn-read-more">read more</a>
              </div>
            </div><!-- col-md-4 news -->
            <div class="col-md-8 col-full-height">
              <div class="topic-box col-full-height-content">
                <h3 class="topic-box-header"><?php the_field('top_right_box_header'); ?></h3>
                <div class="topic-box-text"><?php the_field('top_right_box_paragraph_text'); ?></div>
                <a href="<?php the_field('top_right_box_button'); ?>" class="btn-read-more">read more</a>
              </div><!-- lectures-text -->
            </div><!-- col-md-8 lectures -->
          </div><!-- row top-row -->
          <div class="row row-full-height">
            <div class="col-md-4 col-full-height">
              <div class="topic-box col-full-height-content">
                <h3 class="topic-box-header"><?php the_field('bottom_left_box_header'); ?></h3>
                <div class="topic-box-text"><?php the_field('bottom_left_box_paragraph'); ?></div>
                <a href="<?php the_field('bottom_left_box_button'); ?>" class="btn-read-more">read more</a>
              </div>
            </div><!-- col-md-4 research-->
            <div class="col-md-4 col-full-height">
              <div class="topic-box col-full-height-content">
                <h3 class="topic-box-header"><?php the_field('bottom_middle_box_header'); ?></h3>
                <div class="topic-box-text"><?php the_field('bottom_middle_box_paragraph'); ?></div>
                <a href="<?php the_field('bottom_middle_box_button'); ?>" class="btn-read-more">read more</a>
              </div>
            </div><!-- col-md-4 facilities-->
            <div class="col-md-4 col-full-height success">
              <div class="topic-box col-full-height-content">
                <h3 class="topic-box-header"><?php the_field('bottom_right_box_header'); ?></h3>
                <div class="topic-box-text"><?php the_field('bottom_right_box_paragraph'); ?></div>
                <a href="<?php the_field('bottom_right_box_button'); ?>" class="btn-read-more">read more</a>
              </div>
            </div><!-- col-md-4 success-->          
          </div><!-- row bottom-row -->
        </div><!-- container topic-boxes -->
      </div><!-- main-section background-image -->
    </div><!-- col-md-12 header-image-->
  </div><!-- row hero-image-with-boxes-->  
  <div class="row about-section">
    <div class="container about-group">
      <div class="col-md-2 left-image">
        <?php $image = wp_get_attachment_image_src(get_field('left_image_about_section'), 'medium'); ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('left_image_about_section')) ?>" />
      </div><!-- col-md-2 left-image -->
      <div class="col-md-8 center-text">
        <?php
        while (have_posts()) {
          the_post();
          the_content();
        }
        ?>
      </div><!-- col-md-8 center-text -->
      <div class="col-md-2 right-image">
        <?php $image = wp_get_attachment_image_src(get_field('right_image_about_section'), 'medium'); ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('right_image_about_section')) ?>" />
      </div><!-- col-md-2 right-image -->
    </div><!-- container about-group -->
  </div><!-- row about-section -->
<?php get_footer(); ?>