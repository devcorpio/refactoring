<?php

class Manager extends EmployeeType {

    public function getTypeCode(): int {
        return Employee::MANAGER;
    }
}