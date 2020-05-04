<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function strapped_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Right Sidebar', 'labs_strapped' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'labs_strapped' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
    'description'   => esc_html__('Add widgets here. Use Image (Jetpack) to add a sidebar image. Note: image used must be square in shape.', 'labs-strapped-theme'),

  ) );
}
add_action( 'widgets_init', 'strapped_widgets_init' );


