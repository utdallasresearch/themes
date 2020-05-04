<?php
/**
 * nanotech Theme Customizer
 *
 * @package nanotech
 */

class NanotechCustomizer
{
    public $handle;

    public function __construct($handle = '')
    {
        $this->handle = $handle;
    }

    public function addInlineStyle($selector, $attribute, $setting)
    {
        $value = get_theme_mod($setting);

        if ($value) {
            $css = $selector . '{' . $attribute . ': ' . $value . '}';

            return wp_add_inline_style($this->handle, $css);
        }

        return false;
    }
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nanotech_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $color_choices = [
        '#C75B12' => 'Flame Orange',
        '#000'    => 'Black',
        '#FFFFFF' => 'White',
        '#008542' => 'Eco Green',
    ];

    // $wp_customize->add_setting(
    //     'heading_color',
    //     array(
    //         'default' => '#FFFFFF',
    //     )
    // );
    // $wp_customize->add_control(
    //     'heading_color',
    //     array(
    //         'label' => 'Heading Color',
    //         'section' => 'colors',
    //         'type' => 'select',
    //         'choices' => $color_choices,
    //     )
    // );

}
add_action( 'customize_register', 'nanotech_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nanotech_customize_preview_js() {
	wp_enqueue_script( 'nanotech_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'nanotech_customize_preview_js' );

function nanotech_theme_customized_styles()
{
    $customizer = new NanotechCustomizer('nanotech-style');

    // $customizer->addInlineStyle('.page-header', 'color', 'heading_color');
}
add_action('wp_enqueue_scripts', 'nanotech_theme_customized_styles');

