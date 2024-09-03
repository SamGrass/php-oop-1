<?php
class Movie
{
    public $name;
    public $year;
    public $img;
    public $genre;

    function __construct($_name, $_year, $_img, Genre $_genre)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->img = $_img;
        $this->genre = $_genre;
    }
}
