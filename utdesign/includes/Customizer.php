<?php

namespace UTDesignTheme;

use WP_Customize_Cropped_Image_Control;

/**
 * UT Design Theme Customizer
 *
 * @package UTDesign Theme
 */
class Customizer
{
    /**
     * Registers the customizer with WordPress
     *
     * @return void
     */
    public function register()
    {
        add_action('customize_register', [$this, 'defineCustomizations']);
    }

    /**
     * Define Theme Customizizations.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function defineCustomizations($wp_customize)
    {
        $wp_customize->add_section('header_image_right_section', array(
            'priority' => 65, // after default header
            'theme_supports' => '',
            'capability' => 'edit_theme_options',
            'title' => __('Header Image Right', 'utdesign_theme'),
            'description' => __('Change or hide the right header images.', 'utdesign_theme'),
        ));

        $wp_customize->add_setting('header_image_right_1_hide', [
            'capability' => 'edit_theme_options',
            'sanitize_callback' => [$this, 'sanitizeBoolean'],
        ]);

        $wp_customize->add_control('header_image_right_1_hide_checkbox', [
            'type' => 'checkbox',
            'settings'  => 'header_image_right_1_hide',
            'section'   => 'header_image_right_section',
            'label' => __('Hide the right header image 1 completely', 'utdesign_theme'),
        ]);

        $wp_customize->add_setting('header_image_right_2_hide', [
            'capability' => 'edit_theme_options',
            'sanitize_callback' => [$this, 'sanitizeBoolean'],
        ]);

        $wp_customize->add_control('header_image_right_2_hide_checkbox', [
            'type' => 'checkbox',
            'settings'  => 'header_image_right_2_hide',
            'section'   => 'header_image_right_section',
            'label' => __('Hide the right header image 2 completely', 'utdesign_theme'),
        ]);

        $wp_customize->add_setting('header_image_right_1', [
            'capability' => 'edit_theme_options',
        ]);

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header_image_right_1_control', [
            'label' => __('Current Right Header Image 1', 'utdesign_theme'),
            'settings'  => 'header_image_right_1',
            'section'   => 'header_image_right_section',
            'height' => 80,
            'width' => 250,
            'flex_width' => true,
            'flex_height' => true,
        ]));

        $wp_customize->add_setting('header_image_right_2', [
            'capability' => 'edit_theme_options',
        ]);

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header_image_right_2_control', [
            'label' => __('Current Right Header Image 2', 'utdesign_theme'),
            'settings'  => 'header_image_right_2',
            'section'   => 'header_image_right_section',
            'height' => 80,
            'width' => 250,
            'flex_width' => true,
            'flex_height' => true,
        ]));
    }

    /**
     * Sanitize an input to boolean
     *
     * @param mixed $input
     * @return bool
     */
    public function sanitizeBoolean($input = false)
    {
        return filter_var($input, FILTER_VALIDATE_BOOLEAN);
    }

}
