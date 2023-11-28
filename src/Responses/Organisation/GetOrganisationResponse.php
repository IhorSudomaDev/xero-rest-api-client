<?php

namespace XeroRestApiClient\Responses\Organisation;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetOrganisationResponse
 * @package XeroRestApiClient\Responses
 */
class GetOrganisationResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::ORGANISATION;
}