<nav id="site-navigation" class="main-navigation" role="navigation">
    <button id="main_menu_toggle" class="btn btn-default menu-toggle" aria-controls="main-menu" aria-expanded="false">
        <span id="main_menu_hamburger_icon" class="fa fa-bars"></span>
    </button>
<?php
if (has_nav_menu('main-menu')) {
    wp_nav_menu([
      'menu_id'         => 'main-menu',
      'theme_location'  => 'main-menu',
    ]);
} else {
    wp_page_menu();
}
?>
</nav>