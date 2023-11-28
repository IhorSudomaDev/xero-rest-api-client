<?php

namespace XeroRestApiClient\Responses\Contact;

use XeroRestApiClient\Responses\Abstracts\AListResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetContactListResponse
 * @package XeroRestApiClient\Responses\Contact
 */
class GetContactListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::CONTACT;
}