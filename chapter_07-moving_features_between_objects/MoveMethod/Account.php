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
        return $this->type->overdraftCharge($this->daysOverdrawn);
    }

    public function bankCharge(): double {
        $result = 4.5;
        if ($this->daysOverdrawn > 0) {
            $result += $this->type->overdraftCharge($this->daysOverdrawn);
        }

        return $result;
    }


}