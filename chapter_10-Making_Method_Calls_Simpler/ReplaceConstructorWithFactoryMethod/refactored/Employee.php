<?php

class Employee {
    const ENGINEER = 0;
    const SALESMAN = 1;
    const MANAGER = 2;

    /**
     * @var int
     */
    private $type;

    private function __construct(int $type) {
        $this->type = $type;
    }

    public static function create(int $type) {
        switch ($type) {
            case self::ENGINEER:
                return new Engineer();
                break;
            case self::SALESMAN:
                return new Salesman();
                break;
            case self::MANAGER:
                return new Manager();
                break;
            default:
                throw new InvalidArgumentException("Incorrect type code value");
        }
    }
}

$employer = Employee::create(Employee::ENGINEER);