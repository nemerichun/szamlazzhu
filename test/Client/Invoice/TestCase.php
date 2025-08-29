<?php


namespace Nemerichun\SzamlazzHu\Tests\Client\Invoice;


use Nemerichun\SzamlazzHu\Client\Client;
use Nemerichun\SzamlazzHu\Invoice;

class TestCase extends \Nemerichun\SzamlazzHu\Tests\Client\TestCase {

    /**
     * @param null $number
     * @param Client|null $client
     * @return Invoice
     */
    protected function getEmptyInvoice($number = null, Client $client = null)
    {
        $invoice = new Invoice();

        if ($client) {
            $invoice->setClient($client);
        }

        if ($number) {
            $invoice->invoiceNumber = $number;
        }

        return $invoice;
    }

}