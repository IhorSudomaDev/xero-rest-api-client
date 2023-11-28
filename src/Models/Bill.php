<?php

namespace XeroRestApiClient\Models;

/**
 * Class Bill
 * @property int|NULL    Day
 * @property string|NULL Type
 * @package XeroApiClient\Models
 */
class Bill
{
	/*** @return int|NULL */
	public function getDay(): ?int
	{
		return $this->Day;
	}

	/*** @param int|NULL $Day */
	public function setDay(?int $Day): void
	{
		$this->Day = $Day;
	}

	/*** @return string|NULL */
	public function getType(): ?string
	{
		return $this->Type;
	}

	/*** @param string|NULL $Type */
	public function setType(?string $Type): void
	{
		$this->Type = $Type;
	}
}