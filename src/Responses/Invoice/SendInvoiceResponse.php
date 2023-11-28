<?php

namespace XeroRestApiClient\Responses\Invoice;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class SendInvoiceResponse
 * @package XeroRestApiClient\Responses\Invoice
 */
class SendInvoiceResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::INVOICE;
}