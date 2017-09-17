<?php

class Account {
    /**
     * @var int
     */
    private $balance;

    public function withdraw(int $amount): int {
        if ($amount > $this->balance) {
            return -1;
        } else {
            $this->balance -= $amount;
            return 0;
        }
    }
}