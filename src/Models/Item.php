<?php

namespace XeroRestApiClient\Models;

/**
 * Class Item
 * @property string      ItemID
 * @property string|NULL Name
 * @property string|NULL Code
 * @package XeroApiClient\Models
 */
class Item
{
	/*** @return string */
	public function getItemID(): string
	{
		return $this->ItemID;
	}

	/*** @param string $ItemID */
	public function setItemID(string $ItemID): void
	{
		$this->ItemID = $ItemID;
	}

	/*** @return string|NULL */
	public function getName(): ?string
	{
		return $this->Name;
	}

	/*** @param string|NULL $Name */
	public function setName(?string $Name): void
	{
		$this->Name = $Name;
	}

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
}