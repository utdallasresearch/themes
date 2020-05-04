<?php

namespace UTDesignTheme;

use Iterator;

class ProjectCollection implements Iterator
{
    /** @var array Project custom posts */
    public $projects = [];

    /** @var int Project array iterator posision */
    public $position = 0;

    /** @var array Currently set unique meta (a.k.a. custom field) values for projects */
    public $meta_values = [
        'sponsor' => [],
        'year' => [],
        'semester' => [],
        'industry' => [],
        'solution' => [],
        'department' => [],
        'award' => [],
        'national_award' => [],
    ];

    /** @var array WordPress query parameters for Project posts */
    public $query = [
        'post_type' => 'project',
        'posts_per_page' => -1,
        'meta_query' => [
            'relation' => 'OR',
            'national_award' => [
                'key' => 'national_award',
                'value' => '1',
            ],
            'not_national_award' => [
                'relation' => 'OR',
                [
                    'key' => 'national_award',
                    'value' => '0',
                ],
                [
                    'key' => 'national_award',
                    'compare' => 'NOT EXISTS',
                ]
            ],
        ],
        'orderby' => [
            'national_award' => 'ASC',
            'date' => 'DESC',
        ],
    ];

    /**
     * Instantiate a new Project Collection
     * 
     * @param array|null $query WordPress query parameters to use (use defaults if null)
     * @param array|null $meta_values Meta values to parse (use defaults if null)
     */
    public function __construct($query = null, $meta_values = null)
    {
        if ($query !== null) {
            $this->query = $query;
        }
        if ($meta_values !== null) {
            $this->meta_values = $meta_values;
        }
        $this->projects = get_posts($this->query);
        $this->position = 0;
        $this->parseMetaValues();
    }

    /**
     * Parse the meta values from the projects
     * 
     * This makes a consolidated list of all custom field values
     * currently set for all saved project posts.
     *
     * @return void
     */
    public function parseMetaValues()
    {
        foreach ($this->projects as $project) {
            foreach (array_keys($this->meta_values) as $meta_name) {
                $this->addMetaValue($meta_name, $project->$meta_name);
            }
        }

        array_walk($this->meta_values, function (&$meta_name) {
            sort($meta_name);
        });
    }

    /**
     * Adds to the list of currently-set meta values
     *
     * @param string $meta_name The name of the custom field
     * @param string $value The value to add to the list
     * @return void
     */
    public function addMetaValue($meta_name, $value)
    {
        if (is_array($value)) {
            foreach ($value as $val) {
                $this->addMetaValue($meta_name, $val);
            }
        } else if ($value && !in_array($value, $this->meta_values[$meta_name] ?? [])) {
            $this->meta_values[$meta_name][] = $value;
        }
    }

    /**
     * Project Iterator: reset the position
     *
     * @return void
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * Project Iterator: get the current project
     *
     * @return \WP_Post
     */
    public function current()
    {
        return $this->projects[$this->position];
    }

    /**
     * Project Iterator: get the current position
     *
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Project Iterator: advance to the next position
     *
     * @return void
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * Project Iterator: check if the current position is valid
     *
     * @return bool
     */
    public function valid()
    {
        return isset($this->projects[$this->position]);
    }

    /**
     * Magic property getter for meta values
     * 
     * This allows us to get meta value lists by meta name
     * as if those names were class properties, e.g.
     * $projects->meta_name will return an array of all
     * currently-set values for meta_name for all projects.
     *
     * @param string $meta_name
     * @return array|null
     */
    public function __get($meta_name)
    {
        return isset($this->meta_values[$meta_name]) ? $this->meta_values[$meta_name] : null;
    }
}