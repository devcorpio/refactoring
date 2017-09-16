<?php

class NullCustomer extends Customer {
    public function isNull(): bool {
        return true;
    }

    public function getName(): string {
        return 'occupant';
    }

    public function getHistory() {
        return PaymentHistory::newNull();
    }
}