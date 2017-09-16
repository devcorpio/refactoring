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
            $result = $this->deadAmount();
        } else {
            if ($this->isSeparated) {
                $result = $this->separatedAmount();
            } else {
                if ($this->isRetired) {
                    $result = $this->retiredAmount();
                } else {
                    $result = $this->normalPayAmount();
                }
            }
        }

        return $result;
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