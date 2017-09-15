<?php

class Salesman extends EmployeeType {

    public function getTypeCode(): int {
        return Employee::SALESMAN;
    }
}