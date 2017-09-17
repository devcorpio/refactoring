<?php

abstract class Employee {
    const ENGINEER = 1;
    const SALESMAN = 2;
    const MANAGER = 3;

    /**
     * @var int
     */
    private $type;

    private function __construct(int $type) {
        $this->type = $type;
    }

    abstract public function getType(): int;


    public static function createEngineer() {
        return new Engineer();
    }

    public static function createSalesman() {
        return new Salesman();
    }

    public static function createManager() {
        return new Manager();
    }
}


$engineer = Employee::createEngineer();
$salesman = Employee::createSalesman();
$manager = Employee::createManager();