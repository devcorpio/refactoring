<?php

class Manager extends EmployeeType {

    public function getTypeCode(): int {
        return Employee::MANAGER;
    }

    public function payAmount(Employee $emp): int {
        return $emp->getMonthSalary() + $emp->getBonus();
    }
}