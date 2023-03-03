<?php

class Genres
{
    public $genres;

    function __construct($genresString) {

        $this->genres = explode(', ', $genresString);
    }
}

class Movie
{
    public $title;
    public $vote;
    public $lang;
    public $genres;

    function __construct($title, $vote, $lang, Genres $genres) {
        $this->title = $title;
        $this->vote = $vote;
        $this->lang = $lang;
        $this->genres = $genres;
    }

    public function showData () {
        echo "Il titolo e' " . $this->title . ', ';
        echo "ha " . $this->vote . ' stelle, ';
        echo "e' in lingua " .$this->lang . ', ';
        echo "e' del genere ";
        foreach ($this->genres->genres as $genre) {
            echo $genre;
            echo ', ';
        };
    }
}

$movieOne = new Movie ('IronMan', '5', 'Eng', new Genres('Action, SuperHeroes'));
$movieTwo = new Movie ('300', '5', 'Eng', new Genres('Action, History, War'));

// Metodo di Movi
echo '<pre>';
// var_dump($movieOne->showData());
$movieOne->showData();
echo '</pre>';

// Instanza 1 di Movie
echo '<pre>';
var_dump($movieOne);
echo '</pre>';

// Instanza 2 di Movie
echo '<pre>';
var_dump($movieTwo);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>

    <main>

    </main>

</body>

</html>