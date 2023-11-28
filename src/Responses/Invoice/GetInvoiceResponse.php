<?php

namespace XeroRestApiClient\Responses\Invoice;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetInvoiceResponse
 * @package XeroRestApiClient\Responses\Invoice
 */
class GetInvoiceResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::INVOICE;
}