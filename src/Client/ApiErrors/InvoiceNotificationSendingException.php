<?php


namespace Nemerichun\SzamlazzHu\Client\ApiErrors;


/**
 * Class InvoiceNotificationSendingException
 * @package Nemerichun\SzamlazzHu\Client\ApiErrors
 *
 * Could not send invoice notification
 */
class InvoiceNotificationSendingException extends ClientException
{

    protected $code = 56;

    protected $message = 'Invoice was saved​, but no e-mail was sent.';

    /**
     * @return string
     */
    function getInfo()
    {
        return 'In such case the Webshop will get a notification e-mail so we can send it manually.';
    }
}