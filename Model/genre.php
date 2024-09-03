<?php

class Genre
{
    public $types = [];
    function __construct($_types)
    {
        $this->types = $_types;
    }

    public function printGenre()
    {
        $list = '';
        foreach ($this->types as $type) {
            $list .= "<li>$type</li>";
        }
        echo $list;
    }
}
