<?php

class Engineer extends EmployeeType {

    public function getTypeCode(): int {
        return Employee::ENGINEER;
    }
}