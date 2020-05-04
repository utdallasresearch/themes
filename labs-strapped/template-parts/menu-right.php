<?php
$menu_position = get_theme_mod('main_menu_position');

if ($menu_position === 'right') {
  if (has_nav_menu('main-menu')) {
    wp_nav_menu([
      'theme-location' => 'main-menu',
    ]);
  } else {
    wp_page_menu();
  }
}
?>