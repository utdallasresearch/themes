<?php

namespace Senanga\Filters;

class CustomArchiveTitle extends Filter
{
    /** @var string The WordPress filter to hook the callback to. */
    public $hook = 'get_the_archive_title';

    /**
     * Customizes archive titles.
     *
     * - Removes 'Archives: ' from the title.
     * 
     * @param  string $title
     * @return string
     */
    public function run($title)
    {
        return str_replace('Archives: ', '', $title);
    }

}