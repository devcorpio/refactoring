<?php

class Employee {
    const ENGINEER = 1;
    const SALESMAN = 2;
    const MANAGER = 3;

    /**
     * @var int
     */
    private $monthlySalary;

    /**
     * @var int
     */
    private $commission;

    /**
     * @var int
     */
    private $bonus;

    /**
     * @var int
     */
    private $type;

    public function __construct(int $type) {
        $this->type = $type;
    }

    public function payAmount(): int {
        switch ($this->type) {
            case self::ENGINEER:
                return $this->monthlySalary;
            case self::SALESMAN:
                return $this->monthlySalary + $this->commission;
            case self::MANAGER:
                return $this->monthlySalary + $this->bonus;
            default:
                throw new InvalidArgumentException('Incorrect Employee');
        }
    }
}