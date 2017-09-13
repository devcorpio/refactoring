<?php

class Person {
    /**
     * @var Department
     */
    private $department;

    public function getDepartment() {
        return $this->department;
    }

    public function setDepartment(Department $arg) {
        $this->department = $arg;
    }
}