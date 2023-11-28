<?php

namespace XeroRestApiClient\Responses\ContactGroup;

use XeroRestApiClient\Responses\Abstracts\AListResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetContactGroupListResponse
 * @package XeroRestApiClient\Responses\ContactGroup
 */
class GetContactGroupListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::CONTACT_GROUP;
}