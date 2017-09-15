<?php

class Order {
    /**
     * @var Customer
     */
    private $customer;

    public function getCustomer(): Customer {
        return $this->customer;
    }

    public function setCustomer(Customer $arg): void {
        if (!is_null($this->customer)) {
            $this->customer->friendOrders().remove($this);
        }
        $this->customer = $arg;

        if (!is_null($this->customer)) {
            $this->customer->friendOrders().add($this);
        }
    }
}