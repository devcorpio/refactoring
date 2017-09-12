<?php

class Account {
    /**
     * @var AccountType
     */
    private $type;

    /**
     * @var double
     */
    private $interestRate;


    public function interestForAmount_days(double $amount, int $days) {
        return $this->interestRate * $amount * days / 365;
    }

}