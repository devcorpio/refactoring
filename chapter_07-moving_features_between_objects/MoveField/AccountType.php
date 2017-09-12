<?php

class AccountType {
    /**
     * @var double
     */
    private $interestRate;

    public function setInterestRate(double $interestRate): void {
        $this->interestRate = $interestRate;
    }


    public function getInterestRate(): void {
        return $this->interestRate;
    }
}