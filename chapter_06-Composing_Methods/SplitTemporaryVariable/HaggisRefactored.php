<?php

class Haggis {
    /**
     * @var int
     */
    private $primaryForce;

    /**
     * @var int
     */
    private $secondaryForce;

    /**
     * @var int
     */
    private $mass;

    /**
     * @var int
     */
    private $delay;


    public function getDistanceTravelled(int $time): int {
        $primaryAcc = $this->primaryForce / $this->mass;
        $primaryTime = min($time, $this->delay);
        $result = 0.5 * $primaryAcc * $primaryTime * $primaryTime;
        $secondaryTime = $time - $this->delay;

        if ($secondaryTime) {
            $primaryVel = $primaryAcc * $this->delay;
            $secondaryAcc= ($this->primaryForce + $this->secondaryForce) / $this->mass;
            $result += $primaryVel * $secondaryTime + 0.5 * $secondaryAcc * $secondaryTime * $secondaryTime;
        }

        return $result;

    }
}