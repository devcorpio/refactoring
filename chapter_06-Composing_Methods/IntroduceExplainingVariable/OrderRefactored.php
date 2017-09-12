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
        // price is base price - quantity discount + shipping
        $basePrice = $this->quantity * $this->itemPrice;
        $quantityDiscount = max(0, $this->quantity - 500) * $this->itemPrice * 0.05;

        return $basePrice - $quantityDiscount + min($basePrice * 0.1, 100.0);
    }
}