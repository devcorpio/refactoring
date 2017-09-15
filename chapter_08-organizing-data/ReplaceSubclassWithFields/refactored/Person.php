<?php

class Person
{
    /**
     * @var bool
     */
    private $isMale;

    /**
     * @var string
     */
    private $code;

    private function __construct(bool $isMale, string $code)
    {
        $this->isMale = $isMale;
        $this->code = $code;
    }

    public static function createMale(): self {
        return new self(true, 'M');
    }

    public static function createFemale(): self {
        return new self(false, 'F');
    }
}