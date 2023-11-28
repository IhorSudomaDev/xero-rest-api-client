<?php

namespace XeroRestApiClient\Responses\ContactGroup;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetContactGroupResponse
 * @package XeroRestApiClient\Responses\ContactGroup
 */
class GetContactGroupResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::CONTACT_GROUP;
}