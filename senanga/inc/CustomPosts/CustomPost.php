<?php

namespace Senanga\CustomPosts;

abstract class CustomPost
{
    /** @var string Name. Defaults to lowercase class basename. */
    public $name;

    /** @var string Singular name. Defaults to capitalized class basename */
    public $singular;

    /** @var string Plural name. Defaults to singular name + 's' */
    public $plural;

    /** @var array WordPress custom post type settings */
    public $settings = [];

    /** @var array Display labels */
    public $labels = [];

    /** @var array Custom field descriptors */
    public $custom_fields = [];

    /** @var array Settings for the meta box container for custom fields */
    public $metabox_settings = [];

    /**
     * Class constructor. Sets defaults if not specified.
     */
    public function __construct()
    {
        $this->name = $this->name ?: strtolower((new \ReflectionClass($this))->getShortName());
        $this->singular = $this->singular ?: ucfirst($this->name);
        $this->plural = $this->plural ?: $this->singular . 's';
        $this->labels = $this->labels ?: $this->defaultLabels();
        $this->metabox_settings = $this->metabox_settings ?: $this->defaultMetaboxSettings();
    }

    /**
     * Registers this custom post type with WordPress.
     * 
     * @return WP_Post_Type|WP_Error The registered post type object, or an error object.
     */
    public function register()
    {
        $settings = $this->settings + ['label' => $this->plural] + ['labels' => $this->labels];

        return register_post_type($this->name, $settings);
    }

    /**
     * Registers any custom fields associated with this custom post type.
     *
     * This uses the CMB2 library.
     * 
     * @return int number of fields registered
     */
    public function registerFields()
    {
        $num_registered = 0;

        if ($this->custom_fields) {
            $box = new_cmb2_box($this->metabox_settings);

            foreach ($this->custom_fields as $custom_field) {
                $box->add_field($custom_field);
                $num_registered++;
            }
        }

        return $num_registered;
    }

    /**
     * Generates a set of default labels based on the singular and plural names.
     * 
     * @return array
     */
    public function defaultLabels()
    {
        return [
            'name'                  => $this->plural,
            'singular_name'         => $this->singular,
            'menu_name'             => $this->plural,
            'add_new'               => "Add $this->singular",
            'add_new_item'          => "Add New $this->singular",
            'edit'                  => "Edit",
            'edit_item'             => "Edit $this->singular",
            'new_item'              => "New $this->singular",
            'view'                  => "View $this->singular",
            'view_item'             => "View $this->singular",
            'search_items'          => "Search $this->plural",
            'not_found'             => "No $this->plural Found",
            'not_found_in_trash'    => "No $this->plural Found in Trash",
            'parent'                => "Parent $this->singular",
        ];
    }

    /**
     * Generates default meta box container settings.
     * 
     * @return array
     */
    public function defaultMetaboxSettings()
    {
        return [
            'id'            => $this->name . '_custom_fields_box',
            'object_types'  => [$this->name],
            'context'       => 'after_title',
            'remove_box_wrap'       => true,
        ];
    }

    /**
     * Magic properties.
     *
     * 1) Access custom fields as class properties, by field id
     * 
     * @param  string $property
     * @return mixed|null
     */
    public function __get($property)
    {
        if ($this->custom_fields) {
            $index = array_search($property, array_column($this->custom_fields, 'id'));

            if ($index !== false) {
                return get_post_meta(get_the_ID(), $property, true);
            }
        }

        return null;
    }
}