<?php

class Customer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $rentals;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->rentals = [];
    }

    public function addRental(Rental $rental): void {
        $this->rentals[] = $rental;
    }

    public function getName(): string {
        $this->name;
    }
}