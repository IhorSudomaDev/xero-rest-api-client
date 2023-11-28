<?php

namespace XeroRestApiClient\Requests\Invoice;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Invoice\DeleteInvoiceResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\Invoice\InvoiceStatus;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class DeleteInvoiceRequest
 * @package XeroRestApiClient\Requests\Invoice
 */
class DeleteInvoiceRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::INVOICES;

	/*** @var string */
	protected string $method = RequestMethod::POST;

	/*** @var string */
	protected string $responseClass = DeleteInvoiceResponse::class;

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
		if (in_array($status, [InvoiceStatus::DRAFT, InvoiceStatus::SUBMITTED], TRUE)) {
			$this->availableInputParameters['Status'] = InvoiceStatus::DELETED;
		}
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}