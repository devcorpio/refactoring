<?php

abstract class EmployeeType {
    const ENGINEER = 1;
    const SALESMAN = 2;
    const MANAGER = 3;

    public static function newType(int $code): self {
        switch ($code) {
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
                throw new InvalidArgumentException('Incorrectg Employee Code');
        }
    }

    abstract public function payAmount(Employee $emp): int;

    abstract public function getTypeCode();


}