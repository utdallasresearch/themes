<?php
/**
 * Labs Strapped Theme Customizer
 *
 * @package Labs_Strapped
 */

class LabsStrappedCustomizer
{
    /** @var string Identifier for the stylesheet to which to attach the CSS */
    public $handle;

    /**
     * Class constructor.
     * 
     * @param string $handle Identifier for the stylesheet to which to attach the CSS
     */
    public function __construct($handle = '')
    {
        $this->handle = $handle;
    }

    /**
     * Adds a single inline style.
     * 
     * @param string $selector  CSS selector (e.g. 'body')
     * @param string $attribute CSS attribute (e.g. 'background-color')
     * @param string $setting   Customizer setting name
     */
    public function addInlineStyle($selector, $attribute, $setting)
    {
        $value = get_theme_mod($setting);

        if ($value) {
            $css = $selector . "{" . $attribute . ":" . $value . "}";
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
function labs_strapped_customize_register( $wp_customize ) {

    $utd_colors = [
        '#C75B12' => 'Flame Orange',
        '#008542' => 'Eco Green',
        '#FFFFFF' => 'Brilliance White',
        '#E98300' => 'Solar Orange',
        '#FFB612' => 'Spark Orange',
        '#C9DD03' => 'Seedling Green',
        '#69BE28' => 'Sapling Green',
        '#0039A6' => 'Space Blue',
        '#5BC6E8' => 'Sky Blue',
        '#00A1DE' => 'Stratos Blue',
        '#D5D2CA' => 'Warm Gray 2',
        '#B7B1A9' => 'Warm Gray 4',
        '#A59D95' => 'Warm Gray 6',
        '#8B8178' => 'Warm Gray 8',
        '#766A62' => 'Warm Gray 10',
        '#000'    =>'Black',
        '#333333' => '80% Black',
        '#E5E5E5' => '10% Black',
        '#F2F2F2' => 'Light Gray'
    ];

/**********************************************************************
Customize Title and Tagline Sections and Labels with a New Name
**********************************************************************/
  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'wptthemecustomizer');  
  $wp_customize->get_control('blogname')->label = __('Site Name', 'wptthemecustomizer');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'wptthemecustomizer');  
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

/**********************************************************************
Customize Front Page Settings
**********************************************************************/
  $wp_customize->get_section('static_front_page')->title = __('Homepage Preferences', 'wptthemecustomizer');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Homepage Preference', 'wptthemecustomizer');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'wptthemecustomizer');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'wptthemecustomizer'); 


//******** COLORS PANEL **********

    $wp_customize->add_panel( 'all_colors', array(
      'priority' => 40,
      'theme_supports' => '',
      'title' => __( 'Colors', 'labs_strapped' ),
      'description' => __( 'Change the color settings for this theme.', 'labs_strapped' ),
  ));

//******** OTHER COLOR SETTINGS **********

  $wp_customize->add_section( 'other_colors' , array(
      'title'    => __( 'Other Colors', 'labs_strapped' ),
      'priority' => 100,
      'panel' => 'all_colors',
  )); 

  //******** THEME OPTIONS SECTION **********

//******** OTHER COLOR SETTINGS **********

  $wp_customize->add_section( 'strapped_theme_options' , array(
      'title'    => __( 'Theme Options', 'labs_strapped' ),
      'priority' => 101,
  )); 

/**********************************************************************
Page Background Color
**********************************************************************/
  
  $wp_customize->add_setting( 'page_background_color' , array(
      'default'   => '#E5E5E5',
      'transport' => 'postMessage',
  ));

  $wp_customize->add_control(
      'background_color', array(
      'label'    => __( 'Page Background Color', 'labs_strapped' ),
      'section'  => 'other_colors',
      'type'     => 'select',
      'choices' => $utd_colors,
  ));

/*******************************************************************************
Contact Us Info Color (email and street address are active links)
********************************************************************************/
  
  $wp_customize->add_setting(
      'contact_us_info_color',
      array(
      'default' => '#E5E5E5',
  ));

  $wp_customize->add_control(
      'contact_us_info_color' ,
      array(
      'label' => 'Contact Us Information Color',
      'section' => 'other_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/*******************************************************************************
Contact Us Email and Street Address Hover Links Color
********************************************************************************/
  
  $wp_customize->add_setting(
      'contact_us_info_hover_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'contact_us_info_hover_color' ,
      array(
      'label' => 'Contact Us Email and Address Hover Color',
      'section' => 'other_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Category and Archive Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'category_archive_title_color_background',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'category_archive_title_color_background' ,
      array(
      'label' => 'Category and Archive Title Background Color',
      'section' => 'other_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

  $wp_customize->add_setting(
      'category_archive_title_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'category_archive_title_color' ,
      array(
      'label' => 'Category and Archive Title Background Color',
      'section' => 'other_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Widget Calendar
**********************************************************************/
 
  $wp_customize->add_setting(
      'calendar_color',
      array(
      'default' => '#333333',
  ));

  $wp_customize->add_control(
      'calendar_color' ,
      array(
      'label' => 'Calendar Color',
      'section' => 'other_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/*******************************************************************************
Change Hamburger Icon Color
********************************************************************************/
  
  $wp_customize->add_setting(
      'hamburger_icon_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'hamburger_icon_color' ,
      array(
      'label' => 'Menu Hamburger Icon Color',
      'section' => 'other_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));


//******** HEADER OPTIONS **********

    $wp_customize->add_section( 'header' , array(
      'title'    => __( 'Header Colors', 'labs_strapped' ),
      'priority' => 20,
      'panel' => 'all_colors',
  ));   

/**********************************************************************
Logo and Lab Name Options
**********************************************************************/

  $wp_customize->add_setting(
      'header_logo_color',
      array(
      'default' => 'orange_on_white',
  ));

  $wp_customize->add_control(
      'header_logo_color',
      array(
          'label' => 'UTD Logo',
          'section' => 'header',
          'type' => 'select',
          'choices' => array(
              'orange_on_white' => '#FFFFFF',
              'white_on_orange' => '#C75B12',
              'black_on_white' => '000',
  )));

  $wp_customize->add_setting(
      'header_background_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'header_background_color' ,
      array(
      'label' => 'Header Background Color',
      'section' => 'header',
      'type' => 'select',
      'choices' => array(
              '#C75B12' => 'Flame Orange',
              '#FFFFFF' => 'White',
              '#000' => 'Black',
              '#333333' => '80% Black',
              '#e5e5e5' => '10% Black',
  )));

  $wp_customize->add_setting(
      'header_text_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'header_text_color' ,
      array(
      'label' => 'Lab Name Text Color',
      'section' => 'header',
      'type' => 'select',
      'choices' => $utd_colors,
  ));


//******** LEFT SIDEBAR OPTIONS **********

   $wp_customize->add_section( 'left_sidebar_colors' , array(
      'title'    => __( 'Left Sidebar Colors', 'labs_strapped' ),
      'priority' => 30,
      'panel' => 'all_colors',
  ));

/**********************************************************************
Left Navigation Background Color
**********************************************************************/
 
  $wp_customize->add_setting(
      'left_nav_background_color',
      array(
      'default' => '#FFFFFF',
      'priority' => 10,
  ));

  $wp_customize->add_control(
      'left_nav_background_color' ,
      array(
      'label' => 'Left Navigation Background Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Nav List Background Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'left_nav_list_background_color',
      array(
      'default' => '#E5E5E5',
       'priority' => 20,
  ));

  $wp_customize->add_control(
      'left_nav_list_background_color' ,
      array(
      'label' => 'Left Nav List Background Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Nav List Text Color
*********************************************************************/
  
  $wp_customize->add_setting(
      'left_nav_list_text_color',
      array(
      'default' => '#C75B12',
      'priority' => 30,
  ));

  $wp_customize->add_control(
      'left_nav_list_text_color' ,
      array(
      'label' => 'Left Nav List Text Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Nav List Text Hover Color
*********************************************************************/
  
  $wp_customize->add_setting(
      'left_nav_list_text_hover_color',
      array(
      'default' => '#008542',
      'priority' => 40,
  ));

  $wp_customize->add_control(
      'left_nav_list_text_hover_color' ,
      array(
      'label' => 'Left Nav List Text Hover Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Nav Current Page Identifier (background-color)
**********************************************************************/
 
  $wp_customize->add_setting(
      'current_page_background_color',
      array(
      'default' => '#008542',
      'priority' => 50,
  ));

  $wp_customize->add_control(
      'current_page_background_color' ,
      array(
      'label' => 'Highlight Current Page Background Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));


/**********************************************************************
Left Nav Current Page Identifier (text-color)
**********************************************************************/
  
  $wp_customize->add_setting(
      'current_page_text_color',
      array(
      'default' => '#F2F2F2',
      'priority' => 60,
  ));

  $wp_customize->add_control(
      'current_page_text_color' ,
      array(
      'label' => 'Highlight Current Page Text Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Nav Current Page Hover Text Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'current_page_hover_text_color',
      array(
      'default' => '#FFFFFF',
      'priority' => 70,
  ));

  $wp_customize->add_control(
      'current_page_hover_text_color' ,
      array(
      'label' => 'Highlight Current Page Hover Text Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Hand Widget Links Color
*********************************************************************/
  
  $wp_customize->add_setting(
      'left_widget_links_color',
      array(
      'default' => '#333333',
      'priority' => 80,
  ));

  $wp_customize->add_control(
      'left_widget_links_color' ,
      array(
      'label' => 'Left Widget Links Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Hand Widget Links Hover Color
*********************************************************************/
  
  $wp_customize->add_setting(
      'left_widget_links_hover_color',
      array(
      'default' => '#C75B12',
      'priority' => 90,
  ));

  $wp_customize->add_control(
      'left_widget_links_hover_color' ,
      array(
      'label' => 'Left Widget Links Hover Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Hand Widget Links Bottom Border Color 
*********************************************************************/
  
  $wp_customize->add_setting(
      'left_widget_links_bottom_border_color',
      array(
      'default' => '#E5E5E5',
      'priority' => 100,
  ));

  $wp_customize->add_control(
      'left_widget_links_bottom_border_color' ,
      array(
      'label' => 'Left Widget Links Bottom Border Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Hand Widget Titles Background Color
*********************************************************************/
  
  $wp_customize->add_setting(
      'left_widget_titles_background_color',
      array(
      'default' => '#C75B12',
      'priority' => 110,
  ));

  $wp_customize->add_control(
      'left_widget_titles_background_color' ,
      array(
      'label' => 'Left Widget Titles Background Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Left Hand Widget Titles Text Color
*********************************************************************/
  
  $wp_customize->add_setting(
      'left_widget_titles_text_color',
      array(
      'default' => '#E5E5E5',
      'priority' => 120,
  ));

  $wp_customize->add_control(
      'left_widget_titles_text_color' ,
      array(
      'label' => 'Left Widget Titles Text Color',
      'section' => 'left_sidebar_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));


//******** MIDSECTION OPTIONS **********

  $wp_customize->add_section( 'midsection_colors' , array(
    'title'    => __( 'Midsection Colors', 'labs_strapped' ),
    'priority' => 40,
    'panel' => 'all_colors',
)); 

/**********************************************************************
Midsection Background Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'midsection_background_color',
      array(
      'default' => '#333333',
  ));

  $wp_customize->add_control(
      'midsection_background_color' ,
      array(
      'label' => 'Background Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Midsection Paragraph Text Color
**********************************************************************/
 
 $wp_customize->add_setting(
      'basic_paragraph_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'basic_paragraph_color' ,
      array(
      'label' => 'Paragraph Text Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
General Links Color
**********************************************************************/
 
  $wp_customize->add_setting(
      'link_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'link_color' ,
      array(
      'label' => 'Links Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
General Links Hover Color
**********************************************************************/
 
  $wp_customize->add_setting(
      'link_hover_color',
      array(
      'default' => '#008542',
  ));

  $wp_customize->add_control(
      'link_hover_color' ,
      array(
      'label' => 'Links Hover Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Image Caption Color
**********************************************************************/
 
  $wp_customize->add_setting(
      'caption_text_color',
      array(
      'default' => '#333333',
  ));

  $wp_customize->add_control(
      'caption_text_color' ,
      array(
      'label' => 'Caption Text Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Metadata Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'metadata_color',
      array(
      'default' => '#E5E5E5',
  ));

  $wp_customize->add_control(
      'metadata_color' ,
      array(
      'label' => 'Metadata Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Metadata Hover Color
**********************************************************************/
 
  $wp_customize->add_setting(
      'metadata_hover_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'metadata_hover_color' ,
      array(
      'label' => 'Metadata Hover Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Blog Post Background Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'blog_post_background_color',
      array(
      'default' => '#333333',
  ));

  $wp_customize->add_control(
      'blog_post_background_color' ,
      array(
      'label' => 'Post Background Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
    ));

/**********************************************************************
Blog Post Primary Headline Colors (h1, h3, h5) 
**********************************************************************/
  
  $wp_customize->add_setting(
      'post_primary_headline_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'post_primary_headline_color' ,
      array(
      'label' => 'Post Primary Headline Colors (h1, h3, h5)',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
    ));

/**********************************************************************
Blog Post Primary Headline Hover Colors (h1, h3, h5) 
**********************************************************************/
  
  $wp_customize->add_setting(
      'post_primary_headline_hover_color',
      array(
      'default' => '#008542',
  ));

  $wp_customize->add_control(
      'post_primary_headline_hover_color' ,
      array(
      'label' => 'Post Primary Headline Hover Colors (h1, h3, h5)',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
    ));

/**********************************************************************
Blog Post Secondary Headline Colors (h2, h4, h6)
**********************************************************************/
  
  $wp_customize->add_setting(
      'post_secondary_headline_color',
      array(
      'default' => '#008542',
  ));

  $wp_customize->add_control(
      'post_secondary_headline_color' ,
      array(
      'label' => 'Post Secondary Headline Colors (h2, h4, h6)',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
    ));

/**********************************************************************
Blog Post Secondary Headline Hover Colors (h2, h4, h6)
**********************************************************************/
  
  $wp_customize->add_setting(
      'post_secondary_headline_hover_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'post_secondary_headline_hover_color' ,
      array(
      'label' => 'Post Secondary Headline Hover Colors (h2, h4, h6)',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
    ));

/**********************************************************************
Blog Post and Entry Content Paragraph Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'post_paragraph_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'post_paragraph_color' ,
      array(
      'label' => 'Post Paragraph Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Border Color of Horizontal Rules Under Posts
**********************************************************************/
  
  $wp_customize->add_setting(
      'hr_border_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'hr_border_color' ,
      array(
      'label' => 'Horizontal Rule Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Page Entry Content Primary Header Color (h1, h3, h5,)
**********************************************************************/
  
  $wp_customize->add_setting(
      'entry_content_primary_headline_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'entry_content_primary_headline_color' ,
      array(
      'label' => 'Entry Content Primary Headline Colors (h1, h3, h5)',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Page Entry Content Secondary Header Color (h2, h4, h5,)
**********************************************************************/
  
  $wp_customize->add_setting(
      'entry_content_secondary_headline_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'entry_content_secondary_headline_color' ,
      array(
      'label' => 'Entry Content Secondary Headline Colors (h2, h4, h6)',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Previous Post Nav Link Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'nav_previous_link_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'nav_previous_link_color' ,
      array(
      'label' => 'Previous Post Navigation Link Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Previous Post Nav Link Hover Color
**********************************************************************/
 
 $wp_customize->add_setting(
      'nav_previous_link_hover_color',
      array(
      'default' => '#333333',
  ));

  $wp_customize->add_control(
      'nav_previous_link_hover_color' ,
      array(
      'label' => 'Previous Post Navigation Link Hover Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Next Post Nav Link Color
**********************************************************************/
 
  $wp_customize->add_setting(
      'nav_next_link_color',
      array(
      'default' => '#008542',
  ));

  $wp_customize->add_control(
      'nav_next_link_color' ,
      array(
      'label' => 'Next Post Navigation Link Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

/**********************************************************************
Next Post Nav Link Hover Color
**********************************************************************/
  
  $wp_customize->add_setting(
      'nav_next_link_hover_color',
      array(
      'default' => '#333333',
  ));

  $wp_customize->add_control(
      'nav_next_link_hover_color' ,
      array(
      'label' => 'Next Post Navigation Link Hover Color',
      'section' => 'midsection_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

//******** FOOTER OPTIONS **********

    $wp_customize->add_section( 'footer' , array(
      'title'    => __( 'Footer Colors', 'labs_strapped' ),
      'priority' => 90,
      'panel' => 'all_colors',
  ));  

/**********************************************************************
Footer Background Color
**********************************************************************/

  $wp_customize->add_setting(
      'footer_background_color',
      array(
      'default' => '#008542',
  ));

  $wp_customize->add_control(
      'footer_background_color' ,
      array(
      'label' => 'Footer Background Color',
      'section' => 'footer',
      'type' => 'select',
      'choices' => $utd_colors,
  ));
 
  $wp_customize->add_setting(
      'footer_links_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'footer_links_color' ,
      array(
      'label' => 'Footer Links Color',
      'section' => 'footer',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

//******** PERSON OPTIONS **********

  $wp_customize->add_section( 'staff_colors' , array(
    'title'    => __( 'People Colors', 'labs_strapped' ),
    'priority' => 80,
    'panel' => 'all_colors',
  )); 

  $wp_customize->add_setting(
      'person_name_color',
      array(
      'default' => '#FFFFFF',
  ));

  $wp_customize->add_control(
      'person_name_color' ,
      array(
      'label' => 'Person Name, Phone, Biography and Mail Icon Color',
      'section' => 'staff_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

  $wp_customize->add_setting(
      'person_title_color',
      array(
      'default' => '#C75B12',
  ));

  $wp_customize->add_control(
      'person_title_color' ,
      array(
      'label' => 'Person Title and Email Link Color',
      'section' => 'staff_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

  $wp_customize->add_setting(
      'people_header_color',
      array(
      'default' => '#008542',
  ));

  $wp_customize->add_control(
      'people_header_color' ,
      array(
      'label' => 'People Header Text and Bottom Border Color',
      'section' => 'staff_colors',
      'type' => 'select',
      'choices' => $utd_colors,
  ));

  //******** FULL WIDTH DESIGN **********

  $wp_customize->add_setting(
      'strapped_full_width',
      array(
        'capability' => 'edit_theme_options',
  ));

  $wp_customize->add_control(
      'strapped_full_width' ,
      array(
      'label' => 'Use a full-width page design',
      'section' => 'strapped_theme_options',
      'type' => 'checkbox',
  ));

}
add_action( 'customize_register', 'labs_strapped_customize_register' );

/**
 * Adds inline styles for the given customizer settings.
 */
function labs_strapped_theme_customized_styles()
{
    $customizer = new LabsStrappedCustomizer('labs-strapped-style');

    $customizer->addInlineStyle('a', 'color', 'link_color');
    $customizer->addInlineStyle('a:hover', 'color', 'link_hover_color');
    $customizer->addInlineStyle('.wp-caption-text', 'color', 'caption_text_color');
    $customizer->addInlineStyle('.site-footer', 'background-color', 'footer_background_color');
    $customizer->addInlineStyle('#footer-menu li a', 'color', 'footer_links_color');
    $customizer->addInlineStyle('.midsection', 'background-color', 'midsection_background_color');
    $customizer->addInlineStyle('.left-nav, .nav-menu li',  'background-color', 'left_nav_background_color');
    $customizer->addInlineStyle('.story-wrapper', 'background-color', 'blog_post_background_color');
    $customizer->addInlineStyle('p', 'color', 'basic_paragraph_color');
    $customizer->addInlineStyle('#main-menu .menu-item', 'background-color', 'left_nav_list_item_background_color');
    $customizer->addInlineStyle('#main-menu .menu-item a', 'color', 'left_nav_list_link_color');
    $customizer->addInlineStyle('#main-menu .menu-item a:hover', 'color', 'left_nav_list_link_hover_color');
    $customizer->addInlineStyle('hr, hr::before', 'border-color', 'hr_border_color');
    $customizer->addInlineStyle('.entry-meta span a', 'color', 'metadata_color');
    $customizer->addInlineStyle('.entry-meta .fa', 'color', 'metadata_color');
    $customizer->addInlineStyle('.entry-meta span a:hover', 'color', 'metadata_hover_color');
    $customizer->addInlineStyle('.entry-meta .fa:hover', 'color', 'metadata_hover_color');
    $customizer->addInlineStyle('.right-sidebar .confit-address a', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.right-sidebar .confit-email a', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.right-sidebar .confit-hours', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.right-sidebar .confit-phone', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.right-sidebar .confit-address a:hover', 'color', 'contact_us_info_hovcolor');
    $customizer->addInlineStyle('.right-sidebar .confit-email a:hover', 'color', 'contact_us_info_hover_color');
    $customizer->addInlineStyle('.right-sidebar .confit-hours', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.left-nav .widget-content .confit-address a', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.left-nav .widget-content .confit-email a', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.left-nav .widget-content .confit-hours', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.left-nav .widget-content .confit-phone', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.left-nav .widget-content .confit-address a:hover', 'color', 'contact_us_info_hovcolor');
    $customizer->addInlineStyle('.left-nav .widget-content .confit-email a:hover', 'color', 'contact_us_info_hover_color');
    $customizer->addInlineStyle('.left-nav .widget-content .confit-hours', 'color', 'contact_us_info_color');
    $customizer->addInlineStyle('.entry-content p', 'color', 'post_paragraph_color');
    $customizer->addInlineStyle('.post-edit-link', 'color', 'post_paragraph_color');
    $customizer->addInlineStyle('.entry-title a', 'color', 'post_primary_headline_color');
    $customizer->addInlineStyle('.entry-title a:hover', 'color', 'post_primary_headline_hover_color');
    $customizer->addInlineStyle('.entry-title a', 'color', 'post_secondary_headline_color');
    $customizer->addInlineStyle('.entry-title a:hover', 'color', 'post_secondary_headline_hover_color');
    $customizer->addInlineStyle('.nav-previous a', 'color', 'nav_previous_link_color');
    $customizer->addInlineStyle('.nav-previous a:hover', 'color', 'nav_previous_link_hover_color');
    $customizer->addInlineStyle('.nav-next a', 'color', 'nav_next_link_color');
    $customizer->addInlineStyle('.nav-next a:hover', 'color', 'nav_next_link_hover_color');
    $customizer->addInlineStyle('h1, h3, h5, .page-template-full-width h1, .page-template-full-width h3, .page-template-full-width h5, .entry-content-page > h1, .entry-content-page > h3, .entry-content-page > h5',  'color', 'entry_content_primary_headline_color');
    $customizer->addInlineStyle('.entry-content-page > h2, .entry-content-page > h4, .entry-content-page >h6', 'color', 'entry_content_secondary_headline_color');
    $customizer->addInlineStyle('.default-title > h2, .default-title > h4, .default-title >h6', 'color', 'entry_content_secondary_headline_color');
    $customizer->addInlineStyle('.widget ul li', 'border-bottom-color', 'border_bottom_widget_links_color');
    $customizer->addInlineStyle('.blog-header', 'background-color', 'header_background_color');
    $customizer->addInlineStyle('.blog-description a', 'color', 'header_text_color');
    $customizer->addInlineStyle('.blog-description a:hover', 'color', 'header_text_hover_color');
    $customizer->addInlineStyle('.category .midsection > h2, .archive-page-title', 'background-color', 'category_archive_title_color_background');
    $customizer->addInlineStyle('.category .midsection > h2, .archive-page-title', 'color', 'category_archive_title_color');
    $customizer->addInlineStyle('#wp-calendar, #wp-calendar a, #wp-calendar caption, #prev a, #next a', 'color', 'calendar_color');
    $customizer->addInlineStyle('#main-menu .menu-item', 'background-color', 'left_nav_list_background_color');
    $customizer->addInlineStyle('#main-menu .menu-item a', 'color', 'left_nav_list_text_color');
    $customizer->addInlineStyle('#main-menu .menu-item a:hover', 'color', 'left_nav_list_text_hover_color');
    $customizer->addInlineStyle('.widget-content > ul > li > a', 'color', 'left_widget_links_color');
    $customizer->addInlineStyle('.widget-content > ul > li > a:hover', 'color', 'left_widget_links_hover_color');
    $customizer->addInlineStyle('.widget-content ul li', 'border-bottom-color', 'left_widget_links_bottom_border_color');
    $customizer->addInlineStyle('.widget-content .widget-title', 'background-color', 'left_widget_titles_background_color');
    $customizer->addInlineStyle('.widget-content .widget-title', 'color', 'left_widget_titles_text_color');
    $customizer->addInlineStyle('#site-navigation .current_page_item', 'background-color', 'current_page_background_color');
    $customizer->addInlineStyle('#site-navigation .current_page_item a', 'color', 'current_page_text_color');
    $customizer->addInlineStyle('#site-navigation .current_page_item a:hover', 'color', 'current_page_hover_text_color');
    $customizer->addInlineStyle('.left-nav .menu-toggle', 'color', 'hamburger_icon_color');
    $customizer->addInlineStyle('.person-list .person .person-info h2.person-name', 'color', 'person_name_color');
    $customizer->addInlineStyle('.biography', 'color', 'person_name_color');
    $customizer->addInlineStyle('.phone-and-location', 'color', 'person_name_color');
    $customizer->addInlineStyle('.person-list .person .person-info .email a .fa-envelope-o', 'color', 'person_name_color');
    $customizer->addInlineStyle('.person-list .person .person-info h3.person-title small', 'color', 'person_name_color');
    $customizer->addInlineStyle('.person-list .person .person-info .person-department', 'color', 'person_name_color');
    $customizer->addInlineStyle('.person-list .person .person-info h3.person-title', 'color', 'person_title_color');
    $customizer->addInlineStyle('.email a', 'color', 'person_title_color');
    $customizer->addInlineStyle('h2.person-list-header', 'color', 'people_header_color');
    $customizer->addInlineStyle('h2.person-list-header', 'border-bottom-color', 'people_header_color');





}

add_action('wp_enqueue_scripts', 'labs_strapped_theme_customized_styles', 11);

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function strapped_customize_preview_js() {
	wp_enqueue_script( 'strapped_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'strapped_customize_preview_js' );



function labs_strapped_inline_header_background_color($handle)
{
    $logo_color = get_theme_mod('header_logo_color');

    if (strpos($logo_color, 'on_orange')) {
        $header_background_color = '#C75B12';
    } elseif (strpos($logo_color, 'on_white')) {
        $header_background_color = '#fff';
    } elseif (strpos($logo_color, 'on_black')) {
        $header_background_color = '#000';
    } elseif (strpos($logo_color, 'on_lightgray')) {
        $header_background_color = '#B9B9B9';
    } elseif (strpos($logo_color, 'on_darkgray')) {
        $header_background_color = '#3D3D3D';
    }

    if(isset($header_background_color)) {
        $css = ".blog-header{background-color:{$header_background_color};}";
        wp_add_inline_style($handle, $css);
    }
}


