<?php

namespace XeroRestApiClient\Requests\ContactGroup;

use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\ContactGroup\GetContactGroupListResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetContactGroupListRequest
 * @package XeroRestApiClient\Requests\ContactGroup
 */
class GetContactGroupListRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::CONTACT_GROUPS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetContactGroupListResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}