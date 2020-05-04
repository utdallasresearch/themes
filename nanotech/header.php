<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> and <nav> sections
 *
 * @package nanotech
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 
    <?php wp_head(); ?>     
  </head>

<body <?php body_class(); ?>>
  <div class="container-fluid">    
    <nav class="navbar navbar-default" role="navigation">
    <div class="container">
       <div class="row top-branding">
      <div class="col-md-12">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="site-branding">
          <img src="<?php echo get_template_directory_uri(); ?>/images/UTDmono_flame.png" alt="UTD logo">
          <h2>Alan G. MacDiarmid <span class="bold-name"> NanoTech Institute</span></h2>
        </div><!-- site-branding --></a>
      </div><!-- col-xs-12 -->
    </div><!-- row top-branding -->
    <!-- Brand and toggle get grouped for better mobile display -->
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => '',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"  id="main_search_dropdown">
                    <a href="#" class="dropdown-toggle main-search-dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-search"></i>
                      <span class="caret"></span>
                      <span class="sr-only">Search</span></a>
                    <ul class="dropdown-menu search-box-expanded">
                        <?php get_search_form() ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

