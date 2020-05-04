<?php /* Template Name: No Sidebar */ ?>

<?php get_header(); ?>
 
<!-- <?php echo basename( __FILE__ ); ?> -->
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
     <div class="col-xs-12 midsection index<?= has_post_thumbnail() ? '' : ' no-featured-image' ?>">
      <div class="col-xs-12 collapsible-menu">
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu', 
                'container_class' => 'custom-menu-class' ) ); 
            ?>
      </div>
        <div class="nosidebar-header"><h2><?php the_title(); ?></h2>
          

        </div>
         <?php while ( have_posts() ) : the_post(); ?>
          <!-- <div class="no-featured-image"> -->
           <div <?= has_post_thumbnail() ? ' entry-featured-image' : '' ?>" >
             <?php if ( has_post_thumbnail()) : ?>
               <?php  the_post_thumbnail('large'); ?>
             <?php endif; ?>
             <div> 
               <div class="default-title"><h2><?php the_title(); ?></h2></div>
               <?php the_content(); ?> <!-- Page Content -->   
             </div><!-- .entry-content-page --> 
           </div>
         <?php endwhile; ?>
       </div><!-- .midsection -->             
     </main><!-- #main -->
<?php wp_reset_query(); ?>
 
<?php get_footer(); ?>

