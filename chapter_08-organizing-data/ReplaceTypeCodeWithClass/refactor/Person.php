<?php

class Person {
    /**
     * @var BloodGroup
     */
    private $bloodGroup;

    public function __construct(BloodGroup $bloodGroup) {
        $this->bloodGroup = BloodGroup::code($bloodGroup);
    }

    public function setBloodGroup(BloodGroup $arg): void {
        $this->bloodGroup = BloodGroup::code($arg);
    }

    public function getBloodGroup(): BloodGroup {
        return $this->bloodGroup;
    }
}

$person = new Person(BloodGroup::A);
