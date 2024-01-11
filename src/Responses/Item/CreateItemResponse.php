<?php

namespace XeroRestApiClient\Responses\Item;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class CreateItemResponse
 * @package XeroRestApiClient\Responses\Item
 */
class CreateItemResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::ITEM;
}