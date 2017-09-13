<?php

class Order {
    /**
     * @var string
     */
    private $customer;

    public function __construct(string $customer) {
        $this->customer = $customer;
    }

    public function getCustomer(): string {
        return $this->customer;
    }

    public function setCustomer(string $arg): void {
        $this->customer = $arg;
    }
}