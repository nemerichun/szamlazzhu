<?php


namespace Nemerichun\SzamlazzHu\Contracts;

/**
 * Interface ArrayableInvoiceItemCollection
 * @package Nemerichun\SzamlazzHu\Contracts
 */
interface ArrayableItemCollection
{

    /**
     * @see ArrayableItem
     * @return ArrayableItem[]
     */
    function toItemCollectionArray();

}