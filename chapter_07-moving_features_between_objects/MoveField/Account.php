<?php

class Account {
    /**
     * @var AccountType
     */
    private $type;

    public function interestForAmount_days(double $amount, int $days) {
        return $this->type->getInterestRate() * $amount * days / 365;
    }

}