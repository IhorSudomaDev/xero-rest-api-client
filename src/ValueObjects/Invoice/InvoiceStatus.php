<?php

namespace XeroRestApiClient\ValueObjects\Invoice;

/**
 * Class InvoiceStatus
 * @package XeroRestApiClient\ValueObjects\Invoice
 */
class InvoiceStatus
{
	/*** @var string */
	public const DRAFT = 'DRAFT';
	/*** @var string */
	public const SUBMITTED = 'SUBMITTED';
	/*** @var string */
	public const DELETED = 'DELETED';
	/*** @var string */
	public const AUTHORISED = 'AUTHORISED';
	/*** @var string */
	public const PAID = 'PAID';
	/*** @var string */
	public const VOIDED = 'VOIDED';
}