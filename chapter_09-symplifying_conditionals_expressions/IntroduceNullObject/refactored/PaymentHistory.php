<?php

class PaymentHistory {

    public function getWeeksDelinquentInLastYear() {
        return new self();
    }

    public static function newNull(): PaymentHistory {
        return new NullPaymentHistory();
    }
}
