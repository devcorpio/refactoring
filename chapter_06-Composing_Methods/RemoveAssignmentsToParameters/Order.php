<?php

class Order {
    public function discount(int $inputVal, int $quantity, int $yearToDate) {
        if ($inputVal > 50) {
            $inputVal -= 2;
        }

        if ($inputVal > 100) {
            $inputVal -= 1;
        }

        if($inputVal > 10000) {
            $inputVal -= 4;
        }

        return $inputVal;
    }
}