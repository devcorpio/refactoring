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
        if ($this->seniority < 2 || $this->monthsDisabled > 12 || $this->isPartTime) {
            return 0;
        }

        echo 'doing something';
    }
}