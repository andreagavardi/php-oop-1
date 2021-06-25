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
    public function setPoster($url)
    {
        $this->poster = $url;
    }
}

//$starWars = new Movie('Star-Wars', 'fantasy', 'bla bla bla bla');
//$starWars->setVote(10);
//var_dump($starWars);

$Movies = [
    $starWars = new Movie('Star-Wars', ['fantasy', 'sci-fi'], 'bla bla bla bla'),
    $Constantine = new Movie('Constantine', ['fantasy'], 'bla bla bla bla'),
    $reLeone = new Movie('Lion-King', ['animation'], 'bla bla bla bla'),
    $Interstellar = new Movie('Interstellar', ['sci-fi'], 'bla bla bla bla'),
    $lordOfRings = new Movie('Lord Of Rings', ['fantasy'], 'bla bla bla bla'),
    $TheTrumanShow = new Movie('The Truman Show', ['Drama'], 'bla bla bla bla'),
    $Greese = new Movie('Greese', ['musical', 'commedy'], 'bla bla bla bla'),
    $TheRing = new Movie('The Ring', ['fantasy'], 'bla bla bla bla'),


];

$Constantine->setPoster('https://m.media-amazon.com/images/M/MV5BODRiNmFhY2EtMGY2OC00YjI2LWIyYjQtYzFiM2ZhNjdhYzE4XkEyXkFqcGdeQXVyNDY5MTUyNjU@._V1_UY1200_CR85,0,630,1200_AL_.jpg');
$lordOfRings->setVote(10);

//echo '<pre>', var_dump($Movies), '</pre>'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Php</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <h1>movies</h1>
    <div class="container">

        <?php foreach ($Movies as $movie) : ?>

            <div class="film">
                <img src="<?= $movie->poster ?>" alt="">
                <h2><?= $movie->title ?></h2>
                <span>genere:
                    <?php
                    foreach ($movie->genre as $genre) : ?>
                        <span> - <?= $genre ?></span>
                    <?php endforeach ?>
                </span>
                <p><?= $movie->desc ?></p>
                <?php if ($movie->vote) : ?>
                    <span>Voto: <?= $movie->vote ?></span>
                <?php endif ?>

            </div>
        <?php endforeach ?>

    </div>

</body>

</html>