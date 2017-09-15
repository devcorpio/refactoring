<?php

class Salesman extends Employee {

    public function getType(): int {
        return Employee::SALESMAN;
    }
}