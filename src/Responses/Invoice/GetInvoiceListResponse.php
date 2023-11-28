<?php

namespace XeroRestApiClient\Responses\Invoice;

use XeroRestApiClient\Responses\Abstracts\AListResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetInvoiceListResponse
 * @package XeroRestApiClient\Responses\Invoice
 */
class GetInvoiceListResponse extends AListResponse
{
	/*** @var string */
	protected string $modelClass = Model::INVOICE;
}