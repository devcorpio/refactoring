<?php

class Customer {
    /**
     * @var array
     */
    private $orders = [];

    public function friendOrders() {
        /** should only be used by Order when modifying the association */

        return $this->orders;
    }
}