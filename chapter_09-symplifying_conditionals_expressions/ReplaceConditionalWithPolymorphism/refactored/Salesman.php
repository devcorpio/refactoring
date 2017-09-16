<?php

class Salesman extends EmployeeType {

    public function getTypeCode(): int {
        return Employee::SALESMAN;
    }

    public function payAmount(Employee $emp): int {
        return $emp->getMonthSalary() + $emp->getCommission();
    }
}