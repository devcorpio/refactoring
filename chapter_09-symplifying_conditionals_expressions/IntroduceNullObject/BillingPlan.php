<?php

class BillingPlan {
    public function __construct() {
    }

    public static function basic() {
        return new self();
    }
}
