<?php

namespace XeroRestApiClient\Requests\RepeatingInvoice;

use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\RepeatingInvoice\GetRepeatingInvoiceListResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetRepeatingInvoiceListRequest
 * @package XeroRestApiClient\Requests\RepeatingInvoice
 */
class GetRepeatingInvoiceListRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::REPEATING_INVOICES;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetRepeatingInvoiceListResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}