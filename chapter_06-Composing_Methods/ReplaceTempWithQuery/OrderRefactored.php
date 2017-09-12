<?php

class Order
{
    /**
     * @var int
     */
    private $quantity;

    /**
     * @var double
     */
    private $itemPrice;

    public function getPrice(): double {
        $basePrice = $this->getBasePrice();

        /**
         * @var double
         */
        $discountFactor = 0;

        if ($basePrice > 1000) {
            $discountFactor = 0.95;
        } else {
            $discountFactor = 0.98;
        }

        return $basePrice * $discountFactor;
    }

    private function getBasePrice() {
        return $this->quantity * $this->itemPrice;
    }
}