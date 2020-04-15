<?php


namespace flexice\Marker;


class Marker
{
    public $name;

    public function __construct($name)
    {
        # Name Marker
        $this->name = $name;
    }
}