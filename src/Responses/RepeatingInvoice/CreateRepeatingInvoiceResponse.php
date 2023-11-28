<?php

namespace XeroRestApiClient\Responses\RepeatingInvoice;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class CreateRepeatingInvoiceResponse
 * @package XeroRestApiClient\Responses\RepeatingInvoice
 */
class CreateRepeatingInvoiceResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::REPEATING_INVOICE;
}