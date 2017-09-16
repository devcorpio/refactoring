<?php

class Engineer extends EmployeeType {

    public function getTypeCode(): int {
        return Employee::ENGINEER;
    }

    public function payAmount(Employee $emp): int {
        return $emp->getMonthSalary();
    }
}