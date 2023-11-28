<?php

namespace XeroRestApiClient\Responses\Invoice;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class DeleteInvoiceResponse
 * @package XeroRestApiClient\Responses\Invoice
 */
class DeleteInvoiceResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::INVOICE;
}