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

    public function statement(): string {
        foreach($this->rentals as $rental) {
            /**
             * @var string
             */
            $result = "Rental Record for ". $this->getName() . "\n";

            //show figures for this rental
            $result .= "\t". $rental->getMovie()->getTitle() . "\t" . $rental->getCharge() . "\n";
        }

        //add footer lines
        $result .= "Amount owed is " . $this->getTotalCharge() . "\n";
        $result .= "You earned " . $this->getTotalFrequentRenterPoints() . "frequent renter points";

        return $result;

    }

    private function getTotalCharge(): double {
        /**
         * @var double
         */
        $result = 0;

        foreach($this->rentals as $rental) {
            $result += $rental->getCharge();
        }

        return $result;
    }

    private function getTotalFrequentRenterPoints(): int {
        /**
         * @var int
         */
        $result = 0;

        foreach($this->rentals as $rental) {
            $result += $rental->getFrequentRenterPoints();
        }

        return $result;
    }
}