<?php

$site = new Site();
$customer = $site->getCustomer();


if ($customer === null) {
    $plan = BillingPlan::basic();
} else {
    $plan = $customer->getBillingPlan();
}

if ($customer === null) {
    $customerName = "occupant";
} else {
    $customerName = $customer->getName();
}

if ($customer === null) {
    $weeksDelinquent = 0;
} else {
    $weeksDelinquent = $customer->getHistory()->getWeeksDelinquentInLastYear();
}
