<?php

if (function_exists("register_field_group")) {
  register_field_group(array(
    'id' => 'acf_mission-statement',
    'title' => 'Mission Statement',
    'fields' => array(
      array(
        'key' => 'field_5b21d2022936a',
        'label' => 'Mission Statement',
        'name' => 'mission_statement',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'homepage.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array(),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array(
    'id' => 'acf_top-left-box',
    'title' => 'Top Left Box',
    'fields' => array(
      array(
        'key' => 'field_5af46e5abc6f6',
        'label' => 'Top Left Box Header',
        'name' => 'top_left_box_header',
        'type' => 'text',
        'instructions' => 'The topic header for the top left the box located on top of the header image. ',
        'required' => 1,
        'default_value' => 'News & Events',
        'placeholder' => 'News & Events',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5af4701abc6f7',
        'label' => 'Top Left Box Paragraph Text',
        'name' => 'top_left_box_paragraph_text',
        'type' => 'wysiwyg',
        'instructions' => 'This is the teaser information for the page or post you would like to link to. ',
        'required' => 1,
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array(
        'key' => 'field_5af5e929246df',
        'label' => 'Top Left Box Button',
        'name' => 'top_left_box_button',
        'type' => 'page_link',
        'post_type' => array(
          0 => 'page',
        ),
        'allow_null' => 1,
        'multiple' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'homepage.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array(),
    ),
    'menu_order' => 1,
  ));
  register_field_group(array(
    'id' => 'acf_top-right-box',
    'title' => 'Top Right Box',
    'fields' => array(
      array(
        'key' => 'field_5af598dec1ae1',
        'label' => 'Top Right Box Header',
        'name' => 'top_right_box_header',
        'type' => 'text',
        'instructions' => 'Place the name of the event (or whatever other topic you would like) in this field. ',
        'required' => 1,
        'default_value' => 'Name of Event',
        'placeholder' => 'Name of event goes here',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5af5998dc1ae2',
        'label' => 'Top Right Box Paragraph Text',
        'name' => 'top_right_box_paragraph_text',
        'type' => 'wysiwyg',
        'instructions' => 'Place the details of an event (or whatever other featured topic you would like) in this box.',
        'required' => 1,
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array(
        'key' => 'field_5af5a0e836439',
        'label' => 'Top Right Box Button',
        'name' => 'top_right_box_button',
        'type' => 'page_link',
        'instructions' => 'This is the read more button. It needs to link to your page or post. ',
        'post_type' => array(
          0 => 'all',
        ),
        'allow_null' => 1,
        'multiple' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'homepage.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array(),
    ),
    'menu_order' => 2,
  ));
  register_field_group(array(
    'id' => 'acf_bottom-left-box',
    'title' => 'Bottom Left Box',
    'fields' => array(
      array(
        'key' => 'field_5af5c8cea059e',
        'label' => 'Bottom Left Box Header',
        'name' => 'bottom_left_box_header',
        'type' => 'text',
        'instructions' => 'This is the topic header chosen for this box.',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5af5c901a059f',
        'label' => 'Bottom Left Box Paragraph',
        'name' => 'bottom_left_box_paragraph',
        'type' => 'wysiwyg',
        'instructions' => 'This is the teaser information for the page or post you would like to link to. ',
        'required' => 1,
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array(
        'key' => 'field_5af5c93fa05a0',
        'label' => 'Bottom Left Box Button',
        'name' => 'bottom_left_box_button',
        'type' => 'page_link',
        'post_type' => array(
          0 => 'all',
        ),
        'allow_null' => 0,
        'multiple' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'homepage.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array(),
    ),
    'menu_order' => 3,
  ));
  register_field_group(array(
    'id' => 'acf_bottom-middle-box',
    'title' => 'Bottom Middle Box',
    'fields' => array(
      array(
        'key' => 'field_5af5f02585852',
        'label' => 'Bottom Middle Box Header',
        'name' => 'bottom_middle_box_header',
        'type' => 'text',
        'instructions' => 'The topic header for the bottom middle the box located on top of the header image. ',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5af5f04285853',
        'label' => 'Bottom Middle Box Paragraph ',
        'name' => 'bottom_middle_box_paragraph',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array(
        'key' => 'field_5af5f05585854',
        'label' => 'Bottom Middle Box Button',
        'name' => 'bottom_middle_box_button',
        'type' => 'page_link',
        'post_type' => array(
          0 => 'all',
        ),
        'allow_null' => 1,
        'multiple' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'homepage.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array(),
    ),
    'menu_order' => 4,
  ));
  register_field_group(array(
    'id' => 'acf_bottom-right-box',
    'title' => 'Bottom Right Box',
    'fields' => array(
      array(
        'key' => 'field_5af5f4536e7d1',
        'label' => 'Bottom Right Box Header',
        'name' => 'bottom_right_box_header',
        'type' => 'text',
        'instructions' => 'The topic that you would like to go in this box.',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5af5f4806e7d2',
        'label' => 'Bottom Right Box Paragraph',
        'name' => 'bottom_right_box_paragraph',
        'type' => 'wysiwyg',
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array(
        'key' => 'field_5af5f4a26e7d3',
        'label' => 'Bottom Right Box Button',
        'name' => 'bottom_right_box_button',
        'type' => 'page_link',
        'post_type' => array(
          0 => 'all',
        ),
        'allow_null' => 1,
        'multiple' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'homepage.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array(),
    ),
    'menu_order' => 5,
  ));
  register_field_group(array(
    'id' => 'acf_about-section',
    'title' => 'About Section',
    'fields' => array(
      array(
        'key' => 'field_5afc59aab1a76',
        'label' => 'Left Image About Section',
        'name' => 'left_image_about_section',
        'type' => 'image',
        'save_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
      array(
        'key' => 'field_5afc59f0b1a78',
        'label' => 'Right Image About Section',
        'name' => 'right_image_about_section',
        'type' => 'image',
        'save_format' => 'id',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'homepage.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array(
      'position' => 'acf_after_title',
      'layout' => 'default',
      'hide_on_screen' => array(),
    ),
    'menu_order' => 6,
  ));
}
