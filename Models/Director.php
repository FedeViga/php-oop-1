<?php

class Director {
    public $firstName;
    public $lastName;
    public $nationality;
    
    /**
     * __construct
     *
     * @param  string $_firstName
     * @param  string $_lastName
     * @param  string $_nationality
     */
    public function __construct($_firstName, $_lastName, $_nationality) {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->nationality = $_nationality;
    }

    public function getDirector() {
        return $this->firstName. ' ' . $this->lastName. ', ' .$this->nationality;
    }
}