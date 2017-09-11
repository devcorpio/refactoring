<?php

class NewReleasePrice extends Price {
    public function getPriceCode(): int
    {
        return Movie::NEW_RELEASE;
    }

    public function getCharge(int $daysRented): double
    {
        return $daysRented * 3;
    }
}