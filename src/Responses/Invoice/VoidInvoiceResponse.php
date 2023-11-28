<?php

namespace XeroRestApiClient\Responses\Invoice;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class VoidInvoiceResponse
 * @package XeroRestApiClient\Responses\Invoice
 */
class VoidInvoiceResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::INVOICE;
}