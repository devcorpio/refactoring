<?php

class TelephoneNumber {
    /**
     * @var string
     */
    private $areaCode;

    /**
     * @var string
     */
    private $number;

    public function getTelephoneNumber(): string {
        return "('".$this->areaCode."') ". $this->officeNumber;
    }

    public function getAreaCode() {
        return $this->areaCode;
    }

    public function setAreaCode(string $arg) {
        $this->areaCode = $arg;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber(string $arg) {
        $this->number = $arg;
    }
}