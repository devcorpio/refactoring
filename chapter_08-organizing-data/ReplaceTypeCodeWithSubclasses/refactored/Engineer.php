<?php

class Engineer extends Employee {

    public function getType(): int {
        return Employee::ENGINEER;
    }
}