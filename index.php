<?php

class Movie {
    public $image;
    public $title;
    public $director;
    public $year;
    public $length;
    
    
    /**
     * __construct
     *
     * @param  string $image
     * @param  string $_title
     * @param  string $_director
     * @param  int $_year
     * @param  string $_length
     * @return void
     */
    function __construct($_image, $_title, $_director, $_year, $_length) {
        $this->image = $_image;
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->length = $_length;
    }
}


$movie1 = new Movie ("https://c8.alamy.com/comp/2C7WH0B/interstellar-2014-directed-by-christopher-nolan-and-starring-matthew-mcconaughey-anne-hathaway-jessica-chastain-and-john-lithgow-in-a-dystopian-future-astronauts-explore-a-wormhole-in-space-in-search-for-a-new-home-for-mankind-in-a-distant-galaxy-2C7WH0B.jpg",
                    "Interstellar", 
                    "Christopher Nolan", 
                    2014, 
                    "169 min"
);

$movie2 = new Movie ("https://static.posters.cz/image/750/poster/pulp-fiction-cover-i1288.jpg", 
                    "Pulp Fiction", 
                    "Quentin Tarantino", 
                    1994, 
                    "154 min"
);

$movie3 = new Movie ("https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg", 
                    "Joker", 
                    "Todd Phillips", 
                    2019, 
                    "121 min"
);


$movies = [
    $movie1,
    $movie2,
    $movie3
]
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">

    <title>PHP OOP</title>
</head>

<body class="bg-dark text-white">

    <div class="container py-5">
        
        <h1 class="text-center mb-5">
            PHP OOP
        </h1>


        <div class="row row-cols-3">

            <?php
            foreach($movies as $movie) {
                echo '
                <div class="col">
                    <div class="card rounded-5 bg-black text-center text-white overflow-hidden">
                
                        <img class="mb-2" src="'.$movie->image.'">
                        <h2>'.$movie->title.'</h2>
                        <h3>'.$movie->director.'</h3>
                        <h4>'.$movie->year.'</h4>
                        <h5>'.$movie->length.'</h5>

                    </div>
                </div>
                ';
            }
            ?>
        </div>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>