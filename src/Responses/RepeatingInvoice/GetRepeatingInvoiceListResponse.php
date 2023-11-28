<?php

namespace XeroRestApiClient\Responses\RepeatingInvoice;

use XeroRestApiClient\Responses\Abstracts\AListResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetRepeatingInvoiceListResponse
 * @package XeroRestApiClient\Responses\RepeatingInvoice
 */
class GetRepeatingInvoiceListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::REPEATING_INVOICE;
}