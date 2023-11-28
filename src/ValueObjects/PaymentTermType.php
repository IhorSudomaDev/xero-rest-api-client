<?php

namespace XeroRestApiClient\ValueObjects;

/**
 * Class PaymentTermType
 * @package XeroRestApiClient\ValueObjects
 */
class PaymentTermType
{
	/*** @var string */
	public const DAYSAFTERBILLDATE = 'DAYSAFTERBILLDATE';
	/*** @var string */
	public const DAYSAFTERBILLMONTH = 'DAYSAFTERBILLMONTH';
	/*** @var string */
	public const OFCURRENTMONTH = 'OFCURRENTMONTH';
	/*** @var string */
	public const OFFOLLOWINGMONTH = 'OFFOLLOWINGMONTH';

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public static function getAllowableValues(): array
	{
		return [
			self::DAYSAFTERBILLDATE,
			self::DAYSAFTERBILLMONTH,
			self::OFCURRENTMONTH,
			self::OFFOLLOWINGMONTH,
		];
	}
}