<?php

class Payment {

    /**
     * @var bool
     */
    private $isDead;

    /**
     * @var bool
     */
    private $isSeparated;

    /**
     * @var bool
     */
    private $isRetired;

    public function getPayAmount() {
        if ($this->isDead) {
            return $this->deadAmount();
        }

        if ($this->isSeparated) {
            return $this->separatedAmount();
        }

        if ($this->isRetired) {
            return $this->retiredAmount();
        }


        return $this->normalPayAmount()
    }

    private function deadAmount() {
        //body here...
    }

    private function separatedAmount() {
        //body here...
    }

    private function retiredAmount() {
        //body here...
    }

    private function normalPayAmount() {
        //body here...
    }
}