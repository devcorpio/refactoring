<?php

class Order {
    /**
     * @var Customer
     */
    private $customer;

    public function __construct(Customer $customer) {
        $this->customer = $customer;
    }

    public function getCustomer(): string {
        return $this->customer->getName();
    }

    public function setCustomer(Customer $arg): void {
        $this->customer = $arg;
    }
}