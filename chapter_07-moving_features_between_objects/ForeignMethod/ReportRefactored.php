<?php

/**
 * In that case all the syntax used is not real PHP,
 * despite of, the concept I think is going to be understanded anyway
 */

class Report {
    public function sendReport() {
        $newStart = $this->nextDay(new DateTime());
    }

    private function nextDay(DateTime $date) {
       return new DateTime(previousEnd.getYear(),
            previousEnd.getMonth(),
            previousEnd.getDate() + 1
        );
    }
}