<?php

class Order {
    public function discount(int $inputVal, int $quantity, int $yearToDate) {
        $result = $inputVal;
        if ($inputVal > 50) {
            $result -= 2;
        }

        if ($inputVal > 100) {
            $result -= 1;
        }

        if($inputVal > 10000) {
            $result -= 4;
        }

        return $result;
    }
}