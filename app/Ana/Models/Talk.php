<?php
namespace Ana\Models;

class Talk extends Movie
{
    public $title;
    public $speakers = [];

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function addSpeaker($name)
    {
        $this->speakers[] = $name;
    }
}
