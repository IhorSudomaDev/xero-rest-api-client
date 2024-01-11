<?php

namespace XeroRestApiClient\Requests\Item;



use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Item\CreateItemResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class CreateItemRequest
 * @package XeroRestApiClient\Requests\Invoice
 */
class CreateItemRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::ITEMS;

	/*** @var string */
	protected string $method = RequestMethod::POST;

	/*** @var string */
	protected string $responseClass = CreateItemResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}