<?php

class IntRange {
    /**
     * @var int
     */
    private $low;

    /**
     * @var int
     */
    private $high;

    public function __construct(int $low, int $high) {
        $this->low = $low;
        $this->high = $high;
    }

    public function includes(int $arg): bool {
        return $arg >= $this->low && $arg <= $this->high;
    }

    public function grow(int $factor): void {
        $this->high = $this->high * $factor;
    }
}