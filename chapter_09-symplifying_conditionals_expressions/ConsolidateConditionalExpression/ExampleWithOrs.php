<?php

class ExampleWithOrs {
    /**
     * @var int
     */
    private $seniority;

    /**
     * @var int
     */
    private $monthsDisabled;

    /**
     * @var bool
     */
    private $isPartTime;

    public function disabilityAmount() {
        if ($this->seniority < 2) {
            return 0;
        }

        if ($this->monthsDisabled > 12) {
            return 0;
        }

        if ($this->isPartTime) {
            return 0;
        }
    }
}