<?php
/**
 * senanga Theme Customizer
 *
 * @package senanga
 */

class SenangaCustomizer
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
function senanga_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $color_choices = [
        '#C75B12' => 'Flame Orange',
        '#000'    => 'Black',
        '#FFFFFF' => 'White',
        '#008542' => 'Eco Green',
    ];

    $wp_customize->add_setting(
        'heading_color',
        array(
            'default' => '#FFFFFF',
        )
    );
    $wp_customize->add_control(
        'heading_color',
        array(
            'label' => 'Heading Color',
            'section' => 'colors',
            'type' => 'select',
            'choices' => $color_choices,
        )
    );

    $wp_customize->add_section('homepage_section', [
        'priority' => 170,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Homepage', 'textdomain' ),
        'description' => 'Customize the homepage template.',
    ]);

    $wp_customize->add_setting('homepage_slide_limit', [
        'type' => 'theme_mod',
        'default' => -1,
    ]);
    $wp_customize->add_control('homepage_slide_limit', [
        'label' => 'Number of slides to show',
        'description' => 'Limit the number of slides on the homepage (enter -1 for no limit).',
        'section' => 'homepage_section',
        'type' => 'number',
    ]);

    $wp_customize->add_setting('homepage_slide_orderby', [
        'type' => 'theme_mod',
        'default' => 'rand',
    ]);
    $wp_customize->add_control('homepage_slide_orderby', [
        'label' => 'Limit displayed slides by',
        'section' => 'homepage_section',
        'type' => 'select',
        'choices' => [
            'rand' => 'Random',
            'date' => 'Date',
            'modified' => 'Modified Date',
            'menu_order' => 'Menu Order',
            'title' => 'Title',
        ],
    ]);

    $wp_customize->add_setting('homepage_slide_order', [
        'type' => 'theme_mod',
        'default' => 'desc',
    ]);
    $wp_customize->add_control('homepage_slide_order', [
        'label' => 'Order of slides',
        'section' => 'homepage_section',
        'type' => 'select',
        'choices' => [
            'desc' => 'Descending',
            'asc' => 'Ascending',
        ],
    ]);

    $wp_customize->add_setting('homepage_event_feed', [
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control('homepage_event_feed', [
        'label' => 'Comet Calendar event feed ID',
        'section' => 'homepage_section',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('homepage_event_year', [
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control('homepage_event_year', [
        'label' => 'Comet Calendar event year to show',
        'description' => 'E.g. "2016", "current", "future"',
        'section' => 'homepage_section',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('homepage_event_count', [
        'type' => 'theme_mod',
        'default' => '3',
    ]);
    $wp_customize->add_control('homepage_event_count', [
        'label' => 'Number of events to show',
        'section' => 'homepage_section',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('homepage_event_order', [
        'type' => 'theme_mod',
        'default' => 'asc',
    ]);
    $wp_customize->add_control('homepage_event_order', [
        'label' => 'Order of events',
        'section' => 'homepage_section',
        'type' => 'select',
        'choices' => [
            'asc' => 'Chronological',
            'desc' => 'Reverse-Chronological',
        ],
    ]);

    $wp_customize->add_setting('homepage_event_showing', [
        'type' => 'theme_mod',
        'default' => 'earliest',
    ]);
    $wp_customize->add_control('homepage_event_showing', [
        'label' => 'Limit events by showing',
        'section' => 'homepage_section',
        'type' => 'select',
        'choices' => [
            'earliest' => 'Earliest events',
            'last' => 'Last events',
        ],
    ]);

    $wp_customize->add_setting('homepage_participating_image_bg', [
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_participating_image_bg', [
        'label' => 'Participating Institutions Image Background',
        'section' => 'homepage_section',
        'settings' => 'homepage_participating_image_bg',
    ]));

    $wp_customize->add_setting('homepage_participating_image_lines', [
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_participating_image_lines', [
        'label' => 'Participating Institutions Image Lines',
        'section' => 'homepage_section',
        'settings' => 'homepage_participating_image_lines',
    ]));

    $wp_customize->add_setting('homepage_participating_image', [
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'homepage_participating_image', [
        'label' => 'Participating Institutions Image',
        'section' => 'homepage_section',
        'settings' => 'homepage_participating_image',
    ]));

}
add_action( 'customize_register', 'senanga_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function senanga_customize_preview_js() {
	wp_enqueue_script( 'senanga_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'senanga_customize_preview_js' );

function senanga_theme_customized_styles()
{
    $customizer = new SenangaCustomizer('senanga-style');

    $customizer->addInlineStyle('.page-header', 'background-color', 'heading_bgcolor');
    $customizer->addInlineStyle('.page-header', 'color', 'heading_color');
}
add_action('wp_enqueue_scripts', 'senanga_theme_customized_styles');

