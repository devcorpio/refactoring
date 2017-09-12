<?php

class Printer
{
    /**
     * @var Order
     */
    private $order;

    public function printOwing(): void {
        /**
         * @var array
         */
        $elements = $this->order->getElements();

        /**
         * @var double
         */
        $outstanding = 0;

        $this->printBanner();

        foreach($elements as $element) {
            $outstanding += $element->getAmount();
        }

        //print details
        echo "name: random name";
        echo "amount: $outstanding";
    }

    private function printBanner(): void {
        echo '*************************';
        echo '***** Customer Owes *****';
        echo '*************************';
    }
}