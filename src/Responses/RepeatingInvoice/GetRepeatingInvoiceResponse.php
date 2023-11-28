<?php

namespace XeroRestApiClient\Responses\RepeatingInvoice;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetRepeatingInvoiceResponse
 * @package XeroRestApiClient\Responses\RepeatingInvoice
 */
class GetRepeatingInvoiceResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::REPEATING_INVOICE;
}