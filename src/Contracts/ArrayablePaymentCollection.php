<?php


namespace Nemerichun\SzamlazzHu\Contracts;


interface ArrayablePaymentCollection
{

    /**
     * @see ArrayablePayment
     * @return ArrayablePayment[]
     */
    function toPaymentCollectionArray();

}