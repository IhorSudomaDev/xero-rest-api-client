<?php

namespace XeroRestApiClient\Responses\Contact;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetContactResponse
 * @package XeroApiClient\Responses\Contact
 */
class GetContactResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::CONTACT;
}