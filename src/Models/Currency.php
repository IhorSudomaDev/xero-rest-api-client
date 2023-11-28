<?php

namespace XeroRestApiClient\Models;

/**
 * Class Currency
 * @property string|NULL Code
 * @property string|NULL Description
 * @package XeroApiClient\Models
 */
class Currency
{
	/*** @return string|NULL */
	public function getCode(): ?string
	{
		return $this->Code;
	}

	/*** @param string|NULL $Code */
	public function setCode(?string $Code): void
	{
		$this->Code = $Code;
	}

	/*** @return string|NULL */
	public function getDescription(): ?string
	{
		return $this->Description;
	}

	/*** @param string|NULL $Description */
	public function setDescription(?string $Description): void
	{
		$this->Description = $Description;
	}
}