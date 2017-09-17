<?php

class Payment {
    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $itemPrice;

    public function getPrice(): double {
        $basePrice = $this->quantity * $this->itemPrice;

        if ($this->quantity > 100) {
            $discountLevel = 2;
        } else {
            $discountLevel = 1;
        }

        $finalPrice = $this->discountedPrice($basePrice, $discountLevel);

        return $finalPrice;
    }

    private function discountedPrice(int $basePrice, int $discountLevel): double {
        if ($discountLevel == 2) {
            return $basePrice * 0.1;
        } else {
            return $basePrice * 0.05;
        }
    }
}