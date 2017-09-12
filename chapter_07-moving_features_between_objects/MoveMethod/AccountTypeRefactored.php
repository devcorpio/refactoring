<?php

class AccountType {
    public function overdraftCharge(int $daysOverdrawn): double {
        if ($this->isPremium()) {
            $result = 10;
            if ($daysOverdrawn > 7) {
                $result += ($daysOverdrawn - 7) * 0.85;
            }

            return $result;

        } else {
            return $daysOverdrawn * 1.75;
        }
    }

    private function isPremium() {
        //body here
    }
}