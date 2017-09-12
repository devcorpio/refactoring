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
        /**
         * @var double
         */
        $discountFactor = 0;

        if ($this->getBasePrice() > 1000) {
            $discountFactor = 0.95;
        } else {
            $discountFactor = 0.98;
        }

        return $this->getBasePrice() * $discountFactor;
    }

    private function getBasePrice() {
        return $this->quantity * $this->itemPrice;
    }
}