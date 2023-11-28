<?php

namespace XeroRestApiClient\ValueObjects;

/**
 * Class LineAmountType
 * @package XeroRestApiClient\ValueObjects
 */
class LineAmountType
{
	/*** @var string */
	const EXCLUSIVE = 'Exclusive';
	/*** @var string */
	const INCLUSIVE = 'Inclusive';
	/*** @var string */
	const NO_TAX = 'NoTax';

	/**
	 * Gets allowable values of the enum
	 * @return string[]
	 */
	public static function getAllowableValues(): array
	{
		return [
			self::EXCLUSIVE,
			self::INCLUSIVE,
			self::NO_TAX,
		];
	}
}