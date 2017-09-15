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

    public function payAmount(): int {
        switch ($this->getType()) {
            case EmployeeType::ENGINEER:
                return $this->monthlySalary;
            case EmployeeType::SALESMAN:
                return $this->monthlySalary + $this->commission;
            case EmployeeType::MANAGER:
                return $this->monthlySalary + $this->bonus;
            default:
                throw new InvalidArgumentException('Incorrect Employee');
        }
    }
}