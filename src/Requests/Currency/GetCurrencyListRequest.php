<?php

namespace XeroRestApiClient\Requests\Currency;

use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Currency\GetCurrencyListResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetCurrencyListRequest
 * @package XeroRestApiClient\Requests\Currency
 */
class GetCurrencyListRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::CURRENCIES;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetCurrencyListResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return ApiRoute::getFor($this->routePrefix);
	}
}