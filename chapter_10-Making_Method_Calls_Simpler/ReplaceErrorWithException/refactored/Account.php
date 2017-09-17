<?php

class BalanceException extends \Exception {

}

class Account {
    /**
     * @var int
     */
    private $balance;

    public function __construct(int $balance) {
        $this->balance = $balance;
    }

    public function withdraw(int $amount): int {
        if ($amount > $this->balance) {
            throw new BalanceException();
        }

        $this->balance -= $amount;
    }
}



$account = new Account(100);
