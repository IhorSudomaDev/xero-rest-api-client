<?php

namespace XeroRestApiClient\Requests\Organisation;

use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Organisation\GetOrganisationResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetOrganisationRequest
 * @package XeroRestApiClient\Requests\Organisation
 */
class GetOrganisationRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::ORGANISATIONS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetOrganisationResponse::class;

	/*** @return string */
	public function getUrl(): string
	{
		return ApiRoute::getFor($this->routePrefix);
	}
}