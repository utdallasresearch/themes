<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://use.fontawesome.com/38cdd75c5e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Sarpanch" rel="stylesheet">
    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <?php wp_head(); ?>

    <style>
        .senanga-bg {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/backgroundimage.png);
        }
        .senanga-bg-overlay {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/twopxpattern.png);

        }
    </style>

</head>

<body <?php body_class(); ?>>


<div class="nav-header senanga-bg">
    <!-- Navigation -->
    <div class="senanga-bg-overlay">
        <nav class="navbar" role="navigation">
            <div class="container-fluid nav-container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="<?= get_site_url() ?>" class="txace_logo_container">
                            <img class="txace_logo" alt="TxACE" src="<?php echo get_stylesheet_directory_uri(); ?>/images/txacelogo_noshadow.svg">
                        </a>
                    </div>
                </div>

                <?php
                wp_nav_menu([
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'mainmenu',
                    'theme_location'    => 'main-menu',
                    'menu'              => 'main-menu',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker(),
                ]);
                ?>
                <!-- /.navbar-collapse -->

                <div class="navbar-header utd-navbar-header">
                    <div class="navbar-brand">
                        <a href="https://www.utdallas.edu" class="utd_logo_container">
                            <img class="utd_logo" alt="The University of Texas at Dallas" src="<?php echo get_stylesheet_directory_uri(); ?>/images/utd-wordmark-sm.png">
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </nav>
    </div>
</div>