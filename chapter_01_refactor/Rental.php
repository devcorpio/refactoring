<?php

class Rental
{
    /**
     * @var Movie
     */
    private $movie;

    /**
     * @var int
     */
    private $daysRented;

    public function __construct(Movie $movie, int $daysRented) {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    public function getDaysRented(): int {
        return $this->daysRented;
    }

    public function getMovie(): Movie {
        return $this->movie;
    }

    public function getCharge(): double {
        return $this->movie->getCharge($this->getDaysRented());
    }

    public function getFrequentRenterPoints(): int
    {
        return $this->movie->getFrequentRenterPoints($this->getDaysRented());
    }
}