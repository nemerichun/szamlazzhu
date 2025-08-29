<?php


namespace Nemerichun\SzamlazzHu\Contracts;

use Nemerichun\SzamlazzHu\Internal\Support\PaymentMethods;

/**
 * Interface ArrayablePayment
 * @package Nemerichun\SzamlazzHu\Contracts
 */
interface ArrayablePayment
{

    /**
     * [
     *  'paymentMethod' => '', // @see \Nemerichun\SzamlazzHu\Internal\Support\PaymentMethods::$paymentMethods
     *  'amount' => '', // The amount was paid
     *  'comment' => '', // A single note on payment
     * ]
     *
     * @return array
     */
    function toPaymentArray();

}