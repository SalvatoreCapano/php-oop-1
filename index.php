<?php

class Genres
{
    public $genres;

    function __construct($genresString)
    {

        $this->genres = explode(', ', $genresString);
    }
}

class Movie
{
    public $title;
    public $vote;
    public $lang;
    public $genres;

    function __construct($title, $vote, $lang, Genres $genres)
    {
        $this->title = $title;
        $this->vote = $vote;
        $this->lang = $lang;
        $this->genres = $genres;
    }

    public function showData()
    {
        echo "Il titolo e' " . $this->title . ', ';
        echo "ha " . $this->vote . ' stelle, ';
        echo "e' in lingua " . $this->lang . ', ';
        echo "e' del genere ";
        foreach ($this->genres->genres as $genre) {
            echo $genre;
            echo ', ';
        };
    }
}

// Creazione Istanze di 'Movie'
$movieOne = new Movie('IronMan', '5', 'Eng', new Genres('Action, SuperHeroes'));
$movieTwo = new Movie('300', '5', 'Eng', new Genres('Action, History, War'));
$movieThree = new Movie('The Dark Knight', '5', 'Eng', new Genres('Action, SuperHeroes, Mistery'));
$movieFour = new Movie('Star Wars', '1', 'Eng', new Genres('Action, Sci-Fi, War'));

// Inserimento Movies creati nell'array
$movies[] = $movieOne;
$movies[] = $movieTwo;
$movies[] = $movieThree;
$movies[] = $movieFour;

// Metodo di Movie
// echo '<pre>';
// $movieOne->showData();
// echo '</pre>';

// Instanza 1 di Movie
// echo '<pre>';
// var_dump($movieOne);
// echo '</pre>';

// Instanza 2 di Movie
// echo '<pre>';
// var_dump($movieTwo);
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>

    <main>

        <div class="tableContainer">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Lang</th>
                        <th scope="col">Genres</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($movies as $movieElement) {
                        echo '<tr>';

                        foreach ($movieElement as $dataName => $movieData) {
                            echo '<td>';

                            // Stampa '/5' nel voto
                            if ($dataName == 'genres') {
                                foreach ($movieData->genres as $genre) {
                                    // echo $movieData
                                    echo $genre . ', ';
                                }
                            } else {
                                echo $movieData;
                            }
                            if ($dataName == 'vote') {
                                echo '/5';
                            }

                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </div> <!-- /tableContainer-->

    </main>

</body>

</html>