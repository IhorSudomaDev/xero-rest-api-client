<?php

namespace XeroRestApiClient\Responses\Item;


use XeroRestApiClient\Responses\Abstracts\AListResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetItemListResponse
 * @package XeroRestApiClient\Responses\Item
 */
class GetItemListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::ITEM;
}
