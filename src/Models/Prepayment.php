<?php

namespace XeroRestApiClient\Models;

/**
 * Class Prepayment
 * @property string|NULL       Type
 * @property Contact|NULL      Contact
 * @property string|NULL       Date
 * @property string|NULL       Status
 * @property string|NULL       LineAmountTypes
 * @property LineItem[]|NULL   LineItems
 * @property float             SubTotal
 * @property float             TotalTax
 * @property float             Total
 * @property string|NULL       UpdatedDateUTC
 * @property string|NULL       CurrencyCode
 * @property string            PrepaymentID
 * @property float             CurrencyRate
 * @property string|NULL       Reference
 * @property float             RemainingCredit
 * @property Allocation[]|NULL Allocations
 * @property Payment[]|NULL    Payments
 * @property bool|NULL         HasAttachments
 * @package XeroApiClient\Models
 */
class Prepayment
{
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

	/*** @return Contact|NULL */
	public function getContact(): ?Contact
	{
		return $this->Contact;
	}

	/*** @param Contact|NULL $Contact */
	public function setContact(?Contact $Contact): void
	{
		$this->Contact = $Contact;
	}

	/*** @return string|NULL */
	public function getDate(): ?string
	{
		return $this->Date;
	}

	/*** @param string|NULL $Date */
	public function setDate(?string $Date): void
	{
		$this->Date = $Date;
	}

	/*** @return string|NULL */
	public function getStatus(): ?string
	{
		return $this->Status;
	}

	/*** @param string|NULL $Status */
	public function setStatus(?string $Status): void
	{
		$this->Status = $Status;
	}

	/*** @return string|NULL */
	public function getLineAmountTypes(): ?string
	{
		return $this->LineAmountTypes;
	}

	/*** @param string|NULL $LineAmountTypes */
	public function setLineAmountTypes(?string $LineAmountTypes): void
	{
		$this->LineAmountTypes = $LineAmountTypes;
	}

	/*** @return LineItem[]|NULL */
	public function getLineItems(): ?array
	{
		return $this->LineItems;
	}

	/*** @param LineItem[]|NULL $LineItems */
	public function setLineItems(?array $LineItems): void
	{
		$this->LineItems = $LineItems;
	}

	/*** @return float */
	public function getSubTotal(): float
	{
		return $this->SubTotal;
	}

	/*** @param float $SubTotal */
	public function setSubTotal(float $SubTotal): void
	{
		$this->SubTotal = $SubTotal;
	}

	/*** @return float */
	public function getTotalTax(): float
	{
		return $this->TotalTax;
	}

	/*** @param float $TotalTax */
	public function setTotalTax(float $TotalTax): void
	{
		$this->TotalTax = $TotalTax;
	}

	/*** @return float */
	public function getTotal(): float
	{
		return $this->Total;
	}

	/*** @param float $Total */
	public function setTotal(float $Total): void
	{
		$this->Total = $Total;
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

	/*** @return string|NULL */
	public function getCurrencyCode(): ?string
	{
		return $this->CurrencyCode;
	}

	/*** @param string|NULL $CurrencyCode */
	public function setCurrencyCode(?string $CurrencyCode): void
	{
		$this->CurrencyCode = $CurrencyCode;
	}

	/*** @return string */
	public function getPrepaymentID(): string
	{
		return $this->PrepaymentID;
	}

	/*** @param string $PrepaymentID */
	public function setPrepaymentID(string $PrepaymentID): void
	{
		$this->PrepaymentID = $PrepaymentID;
	}

	/*** @return float */
	public function getCurrencyRate(): float
	{
		return $this->CurrencyRate;
	}

	/*** @param float $CurrencyRate */
	public function setCurrencyRate(float $CurrencyRate): void
	{
		$this->CurrencyRate = $CurrencyRate;
	}

	/*** @return string|NULL */
	public function getReference(): ?string
	{
		return $this->Reference;
	}

	/*** @param string|NULL $Reference */
	public function setReference(?string $Reference): void
	{
		$this->Reference = $Reference;
	}

	/*** @return float */
	public function getRemainingCredit(): float
	{
		return $this->RemainingCredit;
	}

	/*** @param float $RemainingCredit */
	public function setRemainingCredit(float $RemainingCredit): void
	{
		$this->RemainingCredit = $RemainingCredit;
	}

	/*** @return Allocation[]|NULL */
	public function getAllocations(): ?array
	{
		return $this->Allocations;
	}

	/*** @param Allocation[]|NULL $Allocations */
	public function setAllocations(?array $Allocations): void
	{
		$this->Allocations = $Allocations;
	}

	/*** @return Payment[]|NULL */
	public function getPayments(): ?array
	{
		return $this->Payments;
	}

	/*** @param Payment[]|NULL $Payments */
	public function setPayments(?array $Payments): void
	{
		$this->Payments = $Payments;
	}

	/*** @return bool|NULL */
	public function getHasAttachments(): ?bool
	{
		return $this->HasAttachments;
	}

	/*** @param bool|NULL $HasAttachments */
	public function setHasAttachments(?bool $HasAttachments): void
	{
		$this->HasAttachments = $HasAttachments;
	}
}