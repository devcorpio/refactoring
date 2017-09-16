<?php

class Customer {

    /**
     * @var string
     */
    private $name;

    /**
     * @var BillingPlan
     */
    private $plan;

    /**
     * @var PaymentHistory
     */
    private $paymentHistory;

    public function getName() {
        return $this->name;
    }

    public function getBillingPlan() {
        return $this->plan;
    }

    public function getHistory() {
        return $this->paymentHistory;
    }
}