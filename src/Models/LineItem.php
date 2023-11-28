<?php

namespace XeroRestApiClient\Models;

/**
 * Class LineItem
 * @property string|NULL Description
 * @property float       Quantity
 * @property float       UnitAmount
 * @property string|NULL ItemCode
 * @property string|NULL AccountCode
 * @property string      LineItemID
 * @property string|NULL TaxType
 * @property float       TaxAmount
 * @property float       LineAmount
 * @property float       DiscountRate
 * @property float       DiscountAmount
 * @property string|NULL Tracking
 * @package XeroApiClient\Models
 */
class LineItem
{
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

	/*** @return float */
	public function getQuantity(): float
	{
		return $this->Quantity;
	}

	/*** @param float $Quantity */
	public function setQuantity(float $Quantity): void
	{
		$this->Quantity = $Quantity;
	}

	/*** @return float */
	public function getUnitAmount(): float
	{
		return $this->UnitAmount;
	}

	/*** @param float $UnitAmount */
	public function setUnitAmount(float $UnitAmount): void
	{
		$this->UnitAmount = $UnitAmount;
	}

	/*** @return string|NULL */
	public function getItemCode(): ?string
	{
		return $this->ItemCode;
	}

	/*** @param string|NULL $ItemCode */
	public function setItemCode(?string $ItemCode): void
	{
		$this->ItemCode = $ItemCode;
	}

	/*** @return string|NULL */
	public function getAccountCode(): ?string
	{
		return $this->AccountCode;
	}

	/*** @param string|NULL $AccountCode */
	public function setAccountCode(?string $AccountCode): void
	{
		$this->AccountCode = $AccountCode;
	}

	/*** @return string */
	public function getLineItemID(): string
	{
		return $this->LineItemID;
	}

	/*** @param string $LineItemID */
	public function setLineItemID(string $LineItemID): void
	{
		$this->LineItemID = $LineItemID;
	}

	/*** @return string|NULL */
	public function getTaxType(): ?string
	{
		return $this->TaxType;
	}

	/*** @param string|NULL $TaxType */
	public function setTaxType(?string $TaxType): void
	{
		$this->TaxType = $TaxType;
	}

	/*** @return float */
	public function getTaxAmount(): float
	{
		return $this->TaxAmount;
	}

	/*** @param float $TaxAmount */
	public function setTaxAmount(float $TaxAmount): void
	{
		$this->TaxAmount = $TaxAmount;
	}

	/*** @return float */
	public function getLineAmount(): float
	{
		return $this->LineAmount;
	}

	/*** @param float $LineAmount */
	public function setLineAmount(float $LineAmount): void
	{
		$this->LineAmount = $LineAmount;
	}

	/*** @return float */
	public function getDiscountRate(): float
	{
		return $this->DiscountRate;
	}

	/*** @param float $DiscountRate */
	public function setDiscountRate(float $DiscountRate): void
	{
		$this->DiscountRate = $DiscountRate;
	}

	/*** @return float */
	public function getDiscountAmount(): float
	{
		return $this->DiscountAmount;
	}

	/*** @param float $DiscountAmount */
	public function setDiscountAmount(float $DiscountAmount): void
	{
		$this->DiscountAmount = $DiscountAmount;
	}

	/*** @return string|NULL */
	public function getTracking(): ?string
	{
		return $this->Tracking;
	}

	/*** @param string|NULL $Tracking */
	public function setTracking(?string $Tracking): void
	{
		$this->Tracking = $Tracking;
	}
}