<?php

namespace XeroRestApiClient\Responses\Contact;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class CreateContactResponse
 * @package XeroApiClient\Responses\Contact
 */
class CreateContactResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::CONTACT;
}