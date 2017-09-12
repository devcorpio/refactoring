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

        //print banner
        echo '*************************';
        echo '***** Customer Owes *****';
        echo '*************************';

        foreach($elements as $element) {
            $outstanding += $element->getAmount();
        }

        //print details
        echo "name: random name";
        echo "amount: $outstanding";
    }
}