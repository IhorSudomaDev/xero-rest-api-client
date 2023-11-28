<?php

namespace XeroRestApiClient\Requests\Invoice;

use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Invoice\GetInvoiceListResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetInvoiceListRequest
 * @package XeroRestApiClient\Requests\Invoice
 */
class GetInvoiceListRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::INVOICES;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetInvoiceListResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}