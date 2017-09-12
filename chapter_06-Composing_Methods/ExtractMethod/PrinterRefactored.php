<?php

class Printer
{
    /**
     * @var Order
     */
    private $order;

    public function printOwing(): void {
        $this->printBanner();
        $outstanding = $this->getOutstanding();
        $this->printDetails($outstanding);
    }

    private function printBanner(): void {
        echo '*************************';
        echo '***** Customer Owes *****';
        echo '*************************';
    }

    private function printDetails(int $outstanding): void {
        echo "name: random name";
        echo "amount: $outstanding";
    }

    private function getOutstanding(): double {
        /**
         * @var array
         */
        $elements = $this->order->getElements();

        /**
         * @var double
         */
        $outstanding = 0;

        foreach($elements as $element) {
            $outstanding += $element->getAmount();
        }

        return $outstanding;
    }
}