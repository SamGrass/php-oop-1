<?php

class Movie
{
    public $name;
    public $year;

    function __construct($_name, $_year)
    {
        $this->name = $_name;
        $this->year = $_year;
    }
}
