<?php

namespace XeroRestApiClient\Responses\Item;


use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class DeleteItemResponse
 * @package XeroRestApiClient\Responses\Item
 */
class DeleteItemResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::ITEM;
}