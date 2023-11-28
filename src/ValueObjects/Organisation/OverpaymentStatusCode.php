<?php

namespace XeroRestApiClient\ValueObjects\Organisation;

/**
 * Class OverpaymentStatusCode
 * @package XeroRestApiClient\ValueObjects\Organisation
 */
class OverpaymentStatusCode
{
	/*** @var string */
	public const AUTHORISED = 'AUTHORISED';
	/*** @var string */
	public const PAID = 'PAID';
	/*** @var string */
	public const VOIDED = 'VOIDED';
}