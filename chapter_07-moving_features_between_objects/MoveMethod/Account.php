<?php

class Account {
    /**
     * @var AccountType
     */
    private $type;

    /**
     * @var int
     */
    private $daysOverdrawn;

    public function overdraftCharge(): double {
        if ($this->type->isPremium()) {
            $result = 10;
            if ($this->daysOverdrawn > 7) {
                $result += ($this->daysOverdrawn - 7) * 0.85;
            }

            return $result;

        } else {
            return $this->daysOverdrawn * 1.75;
        }
    }

    public function bankCharge(): double {
        $result = 4.5;
        if ($this->daysOverdrawn > 0) {
            $result += $this->overdraftCharge();
        }

        return $result;
    }
}