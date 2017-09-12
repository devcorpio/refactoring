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
        $basePrice = $this->quantity * $this->itemPrice;
        $quantityDiscount = max(0, $this->quantity - 500) * $this->itemPrice * 0.05;
        $shipping =  min($basePrice * 0.1, 100.0);

        return $basePrice - $quantityDiscount + $shipping;
    }
}