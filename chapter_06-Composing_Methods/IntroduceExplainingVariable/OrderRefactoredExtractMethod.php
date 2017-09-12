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

    public function price(): double {
        return $this->basePrice() - $this->quantityDiscount() + $this->shipping();
    }

    private function shipping(): double {
        return min($this->basePrice() * 0.1, 100.0);
    }

    private function quantityDiscount(): double {
        return max(0, $this->quantity - 500) * $this->itemPrice * 0.05;
    }

    private function basePrice(): double {
        return $this->quantity * $this->itemPrice;
    }
}