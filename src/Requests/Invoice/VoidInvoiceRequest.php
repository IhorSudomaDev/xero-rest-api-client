<?php

namespace XeroRestApiClient\Requests\Invoice;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Invoice\VoidInvoiceResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\Invoice\InvoiceStatus;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class VoidInvoiceRequest
 * @package XeroRestApiClient\Requests\Invoice
 */
class VoidInvoiceRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::INVOICES;

	/*** @var string */
	protected string $method = RequestMethod::POST;

	/*** @var string */
	protected string $responseClass = VoidInvoiceResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = ['Status' => NULL, 'InvoiceNumber' => NULL];

	/**
	 * @param Authorization $authorization
	 * @param string        $invoiceNumber
	 * @param string        $status
	 */
	public function __construct(Authorization $authorization, string $invoiceNumber, string $status)
	{
		parent::__construct($authorization);
		$this->availableInputParameters['InvoiceNumber'] = $invoiceNumber;
		if ($status === InvoiceStatus::AUTHORISED) {
			$this->availableInputParameters['Status'] = InvoiceStatus::VOIDED;
		}
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}