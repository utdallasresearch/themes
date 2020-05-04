<?php

namespace Senanga\Filters;

abstract class Filter
{
    /** @var string The WordPress filter to hook the callback to. */
    public $hook;

    /**
     * Registers this filter with WordPress.
     */
    public function register()
    {
        add_filter($this->hook, [$this, 'run']);
    }

}