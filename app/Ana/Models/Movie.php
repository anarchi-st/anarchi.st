<?php

namespace Ana\Models;

class Movie
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
}
