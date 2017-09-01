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
        /**
         * @var double
         */
        $totalAmount = 0;

        /**
         * @var int
         */
        $frequentRenterPoints = 0;

        foreach($this->rentals as $rental) {
            /**
             * @var double
             */
            $thisAmount = 0;

            /**
             * @var string
             */
            $result = "Rental Record for ". $this->getName() . "\n";

            //determine amounts for each line
            switch($rental->getMovie()->getPriceCode()) {
                case Movie::REGULAR:
                    $thisAmount += 2;
                    if ($rental->getDaysRented() > 2) {
                        $thisAmount += ($rental->getDaysRented() - 2) * 1.5;
                    }

                    break;
                case Movie::NEW_RELEASE:
                    $thisAmount += $rental->getDaysRented() * 3;
                    break;
                case Movie::CHILDRENS:
                    $thisAmount += 1.5;
                    if ($rental->getDaysRented() > 3) {
                        $thisAmount += ($rental->getDaysRented() - 3) * 1.5;
                    }

                    break;
            }

            $frequentRenterPoints++;

            if (($rental->getMovie()->getPriceCode() == Movie::NEW_RELEASE) &&
                $rental->getDaysRented() > 1) {

                $frequentRenterPoints++;
            }

            //show figures for this rental
            $result .= "\t". $rental->getMovie()->getTitle() . "\t" . $thisAmount . "\n";
            $totalAmount += $thisAmount;

        }

        //add footer lines
        $result .= "Amount owed is " . $totalAmount . "\n";
        $result .= "You earned " . $frequentRenterPoints . "frequent renter points";

        return $result;

    }
}