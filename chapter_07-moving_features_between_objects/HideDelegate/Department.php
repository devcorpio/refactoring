<?php

class Department {
    /**
     * @var string
     */
    private $chargeCode;

    /**
     * @var Person
     */
    private $manager;

    public function __construct(Person $manager) {
        $this->manager = $manager;
    }

    public function getManager() {
        return $this->manager;
    }
}