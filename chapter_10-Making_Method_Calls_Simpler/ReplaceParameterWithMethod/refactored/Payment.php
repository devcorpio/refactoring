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
        return $this->discountedPrice();
    }

    private function discountedPrice(): double {
        $basePrice = $this->getBasePrice();
        $discountLevel = $this->getDiscountLevel();

        if ($discountLevel == 2) {
            return $basePrice * 0.1;
        } else {
            return $basePrice * 0.05;
        }
    }


    private function getDiscountLevel(): int {
        if ($this->quantity > 100) {
            return 2;
        } else {
            return 1;
        }
    }

    private function getBasePrice(): int {
        return $this->quantity * $this->itemPrice;
    }
}