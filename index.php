<?php


class Movie
{
    public $title;
    public $genre;
    public $desc;
    public $poster;
    public $vote;

    function __construct($title, $genre, $desc, $poster = 'https://www.thismarketerslife.it/site/wp-content/uploads/2016/05/pellicola1.jpg')
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->desc = $desc;
        $this->poster = $poster;
    }

    public function setVote($vote)
    {
        $this->vote = $vote;
    }
}

//$starWars = new Movie('Star-Wars', 'fantasy', 'bla bla bla bla');
//$starWars->setVote(10);
//var_dump($starWars);

$Movies = [
    $starWars = new Movie('Star-Wars', 'fantasy', 'bla bla bla bla'),
    $Constantine = new Movie('Constantine', 'fantasy', 'bla bla bla bla'),
    $reLeone = new Movie('Lion-King', 'animation', 'bla bla bla bla'),
    $Interstellar = new Movie('Interstellar', 'sci-fi', 'bla bla bla bla'),
    $lordOfRings = new Movie('Lord Of Rings', 'fantasy', 'bla bla bla bla'),
    $TheTrumanShow = new Movie('The Truman Show', 'Drama', 'bla bla bla bla'),
    $Greese = new Movie('Greese', 'musical', 'bla bla bla bla'),
    $TheRing = new Movie('The Ring', 'fantasy', 'bla bla bla bla'),


];

echo '<pre>', var_dump($Movies), '</pre>';
