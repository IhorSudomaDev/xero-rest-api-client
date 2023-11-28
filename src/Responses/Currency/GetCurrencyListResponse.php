<?php

namespace XeroRestApiClient\Responses\Currency;

use XeroRestApiClient\Responses\Abstracts\AListResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetCurrencyListResponse
 * @package XeroRestApiClient\Responses\Currency
 */
class GetCurrencyListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::CURRENCY;
}