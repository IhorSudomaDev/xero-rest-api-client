<?php

namespace XeroRestApiClient\Requests\Invoice;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Invoice\SendInvoiceResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class SendInvoiceRequest
 * @package XeroRestApiClient\Requests\Invoice
 */
class SendInvoiceRequest extends ARequest
{
    /*** @var string */
    protected string $routePrefix = ApiRoute::INVOICES;

    /*** @var string */
    protected string $method = RequestMethod::POST;

    /*** @var string */
    protected string $responseClass = SendInvoiceResponse::class;

    /*** @var string */
    protected string $invoiceId;

    /**
     * @param Authorization $authorization
     * @param string $invoiceId
     */
    public function __construct(Authorization $authorization, string $invoiceId)
    {
        parent::__construct($authorization);
        $this->setInvoiceId($invoiceId);
    }

    /*** @return string */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }

    /*** @param string $invoiceId */
    public function setInvoiceId(string $invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    /*** @return string */
    public function getUrl(): string
    {
        return sprintf(ApiRoute::getFor($this->routePrefix), $this->getInvoiceId() . '/Email');
    }
}