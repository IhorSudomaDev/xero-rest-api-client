<?php

namespace XeroRestApiClient\ValueObjects;

/**
 * Class Overpayment
 * @package XeroRestApiClient\ValueObjects
 */
class OverpaymentType
{
	/*** @var string */
	public const RECEIVE_OVERPAYMENT = 'RECEIVE-OVERPAYMENT';
	/*** @var string */
	public const SPEND_OVERPAYMENT   = 'SPEND-OVERPAYMENT';
}