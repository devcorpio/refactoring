<?php

class Person {
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $officeAreaCode;

    /**
     * @var string
     */
    private $officeNumber;

    /**
     * @var TelephoneNumber
     */
    private $officeTelephone;


    public function getName(): string {
        return $this->name;
    }

    public function getTelephoneNumber(): string {
        return "('".$this->officeAreaCode."') ". $this->officeNumber;
    }

    public function getOfficeAreaCode(): string {
        return $this->officeAreaCode;
    }

    public function setOfficeAreaCode(string $arg): void {
        $this->officeAreaCode = $arg;
    }

    public function getOfficeNumber(): string {
        return $this-$this->officeNumber;
    }

    public function setOfficeNumber(string $arg): void {
        $this->officeNumber = $arg;
    }
}