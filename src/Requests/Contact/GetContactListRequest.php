<?php

namespace XeroRestApiClient\Requests\Contact;

use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Contact\GetContactListResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetContactListRequest
 * @package XeroRestApiClient\Requests\Contact
 */
class GetContactListRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::CONTACTS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetContactListResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}