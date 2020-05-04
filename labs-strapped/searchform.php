<?php
/**
 * Template for displaying search forms in Labs Strapped
 *
 * @package WordPress
 * @subpackage Labs Strapped
 * @since Labs Strapped 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'labs-strapped' ); ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'labs-strapped' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'labs-strapped' ); ?></span></button>
</form>
