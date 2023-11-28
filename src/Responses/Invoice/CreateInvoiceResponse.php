<?php

namespace XeroRestApiClient\Responses\Invoice;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class CreateInvoiceResponse
 * @package XeroApiClient\Responses\Invoice
 */
class CreateInvoiceResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::INVOICE;
}