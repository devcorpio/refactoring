<?php

class Person {
    const O = 0;
    const A = 1;
    const B = 2;
    const AB = 3;

    /**
     * @var int
     */
    private $bloodGroup;

    public function __construct(int $bloodGroup) {
        $this->bloodGroup = $bloodGroup;
    }

    public function setBloodGroup(int $arg): void {
        $this->bloodGroup = $arg;
    }

    public function getBloodGroup(): int {
        return $this->bloodGroup;
    }
}