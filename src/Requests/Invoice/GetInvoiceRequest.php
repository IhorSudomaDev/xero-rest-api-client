<?php

namespace XeroRestApiClient\Requests\Invoice;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Invoice\GetInvoiceResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetInvoiceRequest
 * @package XeroRestApiClient\Requests\Invoice
 */
class GetInvoiceRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::INVOICES;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetInvoiceResponse::class;

	/*** @var string */
	private string $identifier;

	/**
	 * @param Authorization $authorization
	 * @param string        $identifier
	 */
	public function __construct(Authorization $authorization, string $identifier)
	{
		parent::__construct($authorization);
		$this->setIdentifier($identifier);
	}

	/*** @return string */
	public function getIdentifier(): string
	{
		return $this->identifier;
	}

	/*** @param string $identifier */
	public function setIdentifier(string $identifier): void
	{
		$this->identifier = $identifier;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getIdentifier());
	}
}