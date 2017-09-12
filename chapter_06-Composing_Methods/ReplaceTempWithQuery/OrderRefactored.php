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
        return $this->getBasePrice() * $this->discountFactor();
    }

    private function getBasePrice() {
        return $this->quantity * $this->itemPrice;
    }

    private function discountFactor(): double {

        if ($this->getBasePrice() > 1000) {
            $discountFactor = 0.95;
        } else {
            $discountFactor = 0.98;
        }

        return $discountFactor;
    }
}