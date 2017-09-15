<?php

abstract class Employee {
    const ENGINEER = 1;
    const SALESMAN = 2;
    const MANAGER = 3;

    /**
     * @var int
     */
    private $type;

    private function __construct(int $type) {
        $this->type = $type;
    }

    abstract public function getType(): int;

    public static function create(int $type): self {
        switch ($type) {
            case self::ENGINEER:
                return new Enginner();
            case self::SALESMAN:
                return new Salesman();
            case self::MANAGER:
                return new Manager();
            default:
                throw new InvalidArgumentException('Incorrect type code value');
        }
    }
}