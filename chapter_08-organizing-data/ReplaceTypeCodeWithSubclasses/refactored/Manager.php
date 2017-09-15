<?php

class Manager extends Employee {

    public function getType(): int {
        return Employee::MANAGER;
    }
}