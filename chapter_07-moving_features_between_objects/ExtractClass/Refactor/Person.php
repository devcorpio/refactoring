<?php

class Person {
    /**
     * @var string
     */
    private $name;

    /**
     * @var TelephoneNumber
     */
    private $officeTelephone;


    public function getName(): string {
        return $this->name;
    }

    public function getTelephoneNumber(): string {
        return $this->officeTelephone->getTelephoneNumber();
    }

    public function getTelephone(): TelephoneNumber {
        return $this->officeTelephone;
    }
}