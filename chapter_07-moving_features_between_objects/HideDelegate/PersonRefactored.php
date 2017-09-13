<?php

class Person {
    /**
     * @var Department
     */
    private $department;

    public function setDepartment(Department $arg) {
        $this->department = $arg;
    }

    public function getManager(): Person {
        return $this->department->getManager();
    }
}