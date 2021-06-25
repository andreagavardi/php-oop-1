<?php


class Movie
{
    public $title;
    public $genre;
    public $desc;
    public $poster;

    function __construct($title, $genre, $desc, $poster = 'https://www.thismarketerslife.it/site/wp-content/uploads/2016/05/pellicola1.jpg')
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->desc = $desc;
        $this->poster = $poster;
    }
}

$starWars = new Movie('Star-Wars', 'fantasy', 'bla bla bla bla');

var_dump($starWars);
