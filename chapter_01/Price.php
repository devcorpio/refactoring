<?php

abstract class Price {
    abstract public function getPriceCode(): int;

    abstract public function getCharge(int $daysRented): double;

    public function getFrequentRenterPoints(int $daysRented): int {
        return 1;
    }
}
