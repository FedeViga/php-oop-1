<?php

class Movie {
    public $image;
    public $title;
    public $director;
    public $year;
    public $length;
    public $genres = [];
    
    
    /**
     * __construct
     *
     * @param  string $image
     * @param  string $_title
     * @param  string $_director
     * @param  int $_year
     * @param  string $_length
     * @param  array $_genres
     */
    function __construct($_image, $_title, $_director, $_year, $_length, $_genres) {
        $this->image = $_image;
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->length = $_length;
        $this->genres = $_genres;
    }
}