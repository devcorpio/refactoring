<?php

class Employment {
    const ENGINEER = 1;
    const SALESMAN = 2;
    const MANAGER = 3;

    private $type;

    public function __construct(int $type) {
        $this->type = $type;
    }
}