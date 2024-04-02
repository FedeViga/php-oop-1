<?php

require './Models/Movie.php';
require './Models/Director.php';


$movie1 = new Movie (
    "https://c8.alamy.com/comp/2C7WH0B/interstellar-2014-directed-by-christopher-nolan-and-starring-matthew-mcconaughey-anne-hathaway-jessica-chastain-and-john-lithgow-in-a-dystopian-future-astronauts-explore-a-wormhole-in-space-in-search-for-a-new-home-for-mankind-in-a-distant-galaxy-2C7WH0B.jpg",
    "Interstellar", 
    new Director("Christopher", "Nolan", "UK"), 
    2014, 
    "169 min",
    ["fantascienza", "avventura", "drammatico"]
);

$movie2 = new Movie (
    "https://static.posters.cz/image/750/poster/pulp-fiction-cover-i1288.jpg", 
    "Pulp Fiction", 
    new Director("Quentin", "Tarantino", "USA"), 
    1994, 
    "154 min",
    ["commedia", "gangster"]
);

$movie3 = new Movie (
    "https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg", 
    "Joker", 
    new Director("Todd", "Phillips", "USA"), 
    2019, 
    "121 min",
    ["drammatico", "poliziesco", "thriller", "noir"]
);


$movies = [
    $movie1,
    $movie2,
    $movie3
];