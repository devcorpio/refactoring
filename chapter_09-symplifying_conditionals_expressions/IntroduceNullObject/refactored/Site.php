<?php

class Site {

    /**
     * @var Customer
     */
    private $customer;

    public function getCustomer() {
        if ($this->customer === null) {
            return Customer::newNull();
        }

        return $this->customer;
    }
}