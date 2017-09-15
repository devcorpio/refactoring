<?php

class BloodGroup {
    /**
     * Due to the lack in PHP on some things, I can't use object constants, and neither use expressions
     * as default values in attributes, however I going to write the code, independently of the execution.
     *
     */
    const O = new BloodGroup(0);
    const A = new BloodGroup(1);
    const B = new BloodGroup(2);
    const AB = new BloodGroup(3);
    private $values = [O, A, B, AB];

    /**
     * @var int
     */
    private $code;

    private function __construct(int $code) {
        $this->code = $code;
    }

    public function getCode(): int {
        return $this->code;
    }

    public static function code(int $arg): self {
        return self::values[$arg];
    }
}