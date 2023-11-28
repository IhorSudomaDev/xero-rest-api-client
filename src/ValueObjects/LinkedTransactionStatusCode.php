<?php

namespace XeroRestApiClient\ValueObjects;

/**
 * Class LinkedTransactionStatusCode
 * @package XeroRestApiClient\ValueObjects
 */
class LinkedTransactionStatusCode
{
	/*** @var string */
	public const DRAFT = 'DRAFT';
	/*** @var string */
	public const APPROVED = 'APPROVED';
	/*** @var string */
	public const ONDRAFT = 'ONDRAFT';
	/*** @var string */
	public const BILLED = 'BILLED';
	/*** @var string */
	public const VOIDED = 'VOIDED';
}