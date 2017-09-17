<?php

class Employee {
    const ENGINEER = 0;
    const SALESMAN = 1;
    const MANAGER = 2;

    /**
     * @var int
     */
    private $type;

    public function __construct(int $type) {
        $this->type = $type;
    }
}