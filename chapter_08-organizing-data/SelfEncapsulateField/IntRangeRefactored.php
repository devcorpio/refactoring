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
        $this->setLow();
        $this->setHigh();
    }

    public function includes(int $arg): bool {
        return $arg >= $this->getLow() && $arg <= $this->getHigh();
    }

    public function grow(int $factor): void {
        $this->setHigh($this->getHigh() * $factor);
    }

    public function getLow(): int {
        return $this->low;
    }

    public function getHigh(): int {
        return $this->high;
    }

    public function setLow(int $arg): void {
        $this->low = $arg;
    }

    public function setHigh(int $arg): void {
        $this->high = $arg;
    }
}