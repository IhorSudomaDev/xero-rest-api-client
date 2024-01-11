<?php

namespace XeroRestApiClient\Models;

/**
 * Class Item
 * @property string      ItemID
 * @property string|NULL Code
 * @property string|NULL Name
 * @property bool|NULL   IsSold
 * @property bool|NULL   IsPurchased
 * @property string|NULL Description
 * @property string|NULL PurchaseDescription
 * @property string|NULL PurchaseDetails
 * @property string|NULL SalesDetails
 * @property bool|NULL   IsTrackedAsInventory
 * @property float       TotalCostPool
 * @property float       QuantityOnHand
 * @property string|NULL UpdatedDateUTC
 * @package XeroRestApiClient\Models
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
	public function getName(): ?string
	{
		return $this->Name;
	}

	/*** @param string|NULL $Name */
	public function setName(?string $Name): void
	{
		$this->Name = $Name;
	}

	/*** @return bool|NULL */
	public function getIsSold(): ?bool
	{
		return $this->IsSold;
	}

	/*** @param bool|NULL $IsSold */
	public function setIsSold(?bool $IsSold): void
	{
		$this->IsSold = $IsSold;
	}

	/*** @return bool|NULL */
	public function getIsPurchased(): ?bool
	{
		return $this->IsPurchased;
	}

	/*** @param bool|NULL $IsPurchased */
	public function setIsPurchased(?bool $IsPurchased): void
	{
		$this->IsPurchased = $IsPurchased;
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

	/*** @return string|NULL */
	public function getPurchaseDescription(): ?string
	{
		return $this->PurchaseDescription;
	}

	/*** @param string|NULL $PurchaseDescription */
	public function setPurchaseDescription(?string $PurchaseDescription): void
	{
		$this->PurchaseDescription = $PurchaseDescription;
	}

	/*** @return string|NULL */
	public function getPurchaseDetails(): ?string
	{
		return $this->PurchaseDetails;
	}

	/*** @param string|NULL $PurchaseDetails */
	public function setPurchaseDetails(?string $PurchaseDetails): void
	{
		$this->PurchaseDetails = $PurchaseDetails;
	}

	/*** @return string|NULL */
	public function getSalesDetails(): ?string
	{
		return $this->SalesDetails;
	}

	/*** @param string|NULL $SalesDetails */
	public function setSalesDetails(?string $SalesDetails): void
	{
		$this->SalesDetails = $SalesDetails;
	}

	/*** @return bool|NULL */
	public function getIsTrackedAsInventory(): ?bool
	{
		return $this->IsTrackedAsInventory;
	}

	/*** @param bool|NULL $IsTrackedAsInventory */
	public function setIsTrackedAsInventory(?bool $IsTrackedAsInventory): void
	{
		$this->IsTrackedAsInventory = $IsTrackedAsInventory;
	}

	/*** @return float */
	public function getTotalCostPool(): float
	{
		return $this->TotalCostPool;
	}

	/*** @param float $TotalCostPool */
	public function setTotalCostPool(float $TotalCostPool): void
	{
		$this->TotalCostPool = $TotalCostPool;
	}

	/*** @return float */
	public function getQuantityOnHand(): float
	{
		return $this->QuantityOnHand;
	}

	/*** @param float $QuantityOnHand */
	public function setQuantityOnHand(float $QuantityOnHand): void
	{
		$this->QuantityOnHand = $QuantityOnHand;
	}

	/*** @return string|NULL */
	public function getUpdatedDateUTC(): ?string
	{
		return $this->UpdatedDateUTC;
	}

	/*** @param string|NULL $UpdatedDateUTC */
	public function setUpdatedDateUTC(?string $UpdatedDateUTC): void
	{
		$this->UpdatedDateUTC = $UpdatedDateUTC;
	}
}