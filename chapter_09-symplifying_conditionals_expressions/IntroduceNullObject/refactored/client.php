<?php

$site = new Site();
$customer = $site->getCustomer();


if ($customer === null) {
    $plan = BillingPlan::basic();
} else {
    $plan = $customer->getBillingPlan();
}

$customerName = $customer->getName();

$weeksDelinquent = $customer->getHistory()->getWeeksDelinquentInLastYear();
