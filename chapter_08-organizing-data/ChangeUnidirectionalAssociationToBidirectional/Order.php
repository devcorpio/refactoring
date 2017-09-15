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
        $this->customer = $arg;
    }
}