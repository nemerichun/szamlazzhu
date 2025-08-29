<?php


namespace Nemerichun\SzamlazzHu\Client\Models;


use Psr\Http\Message\ResponseInterface;
use Nemerichun\SzamlazzHu\Client\Client;
use Nemerichun\SzamlazzHu\ProformaInvoice;

class ProformaInvoiceDeletionResponse extends CommonResponseModel
{

    protected static $noXml = true;

    /**
     * @var ProformaInvoice
     */
    public $originalProformaInvoice;

    /**
     * ProformaInvoiceDeletionResponse constructor.
     * @param ProformaInvoice $originalInvoice
     * @param Client $client
     * @param ResponseInterface $response
     */
    public function __construct(ProformaInvoice $originalInvoice, Client $client, ResponseInterface $response)
    {
        parent::__construct($client, $response);
        $this->originalProformaInvoice = $originalInvoice;
    }


    /**
     * Maps remote attributes
     *
     * @param array|string $content
     * @return array
     */
    protected function mapAttributes($content)
    {
        return [];
    }
}