<?php

class Movie
{
    public const CHILDRENS = 2;
    public const REGULAR = 0;
    public const NEW_RELEASE = 1;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $price;

    public function __construct(string $title, int $priceCode)
    {
        $this->title = $title;
        $this->setPriceCode($priceCode);
    }

    public function getPriceCode(): int {
        return $this->price->getPriceCode();
    }

    public function setPriceCode(int $priceCode): int {
        switch ($priceCode) {
            case self::REGULAR:
                $this->price = new RegularPrice();
                break;
            case self::CHILDRENS:
                $this->price = new ChildrensPrice();
                break;
            case self::NEW_RELEASE:
                $this->price = new NewReleasePrice();
                break;
            default:
                throw new InvalidArgumentException('Incorrect Price Code');
        }
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getCharge(int $daysRented): double {
        $this->price->getCharge($daysRented);
    }

    public function getFrequentRenterPoints(int $daysRented) {
        if (($this->getPriceCode() == Movie::NEW_RELEASE) && $daysRented > 1) {
            return 2;
        } else {
            return 1;
        }
    }
}