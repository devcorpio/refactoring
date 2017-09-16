<?php

class Employee {
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
     * @var EmployeeType
     */
    private $type;

    public function __construct(int $type) {
        $this->setType($type);
    }

    public function setType(int $code): void {
        $this->type = EmployeeType::newType($code);
    }

    public function getType(): int {
        return $this->type->getTypeCode();
    }

    public function getMonthSalary(): int {
        return $this->monthlySalary;
    }

    public function getCommission(): int {
        return $this->commission;
    }

    public function getBonus(): int {
        return $this->bonus;
    }

    public function payAmount(): int {
        return $this->type->payAmount($this);
    }
}