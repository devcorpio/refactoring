<?php

abstract class Price {
    abstract public function getPriceCode(): int;

    abstract public function getCharge(int $daysRented): double;
}
