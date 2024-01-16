<?php

namespace XeroRestApiClient\Requests\Item;

use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Item\GetItemListResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetItemListRequest
 * @package XeroRestApiClient\Requests\Item
 */
class GetItemListRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::ITEMS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetItemListResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}