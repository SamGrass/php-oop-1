<?php

class Movie
{
    public $name;
    public $year;
    public $img;

    function __construct($_name, $_year, $_img)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->img = $_img;
    }
}
