<?php

namespace XeroRestApiClient\Models;

/**
 * Class CreditNote
 * @property string|NULL       Type
 * @property Contact|NULL      Contact
 * @property string|NULL       Date
 * @property string|NULL       Status
 * @property string|NULL       LineAmountTypes
 * @property LineItem|NULL     LineItems
 * @property float             SubTotal
 * @property float             TotalTax
 * @property float             Total
 * @property float             CISDeduction
 * @property string|NULL       UpdatedDateUTC
 * @property string|NULL CurrencyCode
 * @property string|NULL       FullyPaidOnDate
 * @property string            CreditNoteID
 * @property string|NULL       CreditNoteNumber
 * @property string|NULL       Reference
 * @property bool|NULL         SentToContact
 * @property float             CurrencyRate
 * @property float             RemainingCredit
 * @property Allocation[]|NULL Allocations
 * @property string            BrandingThemeID
 * @property bool|NULL         HasAttachments
 * @package XeroApiClient\Models
 */
class CreditNote
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

	/*** @return LineItem|NULL */
	public function getLineItems(): ?LineItem
	{
		return $this->LineItems;
	}

	/*** @param LineItem|NULL $LineItems */
	public function setLineItems(?LineItem $LineItems): void
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

	/*** @return float */
	public function getCISDeduction(): float
	{
		return $this->CISDeduction;
	}

	/*** @param float $CISDeduction */
	public function setCISDeduction(float $CISDeduction): void
	{
		$this->CISDeduction = $CISDeduction;
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

	/*** @return string|NULL */
	public function getFullyPaidOnDate(): ?string
	{
		return $this->FullyPaidOnDate;
	}

	/*** @param string|NULL $FullyPaidOnDate */
	public function setFullyPaidOnDate(?string $FullyPaidOnDate): void
	{
		$this->FullyPaidOnDate = $FullyPaidOnDate;
	}

	/*** @return string */
	public function getCreditNoteID(): string
	{
		return $this->CreditNoteID;
	}

	/*** @param string $CreditNoteID */
	public function setCreditNoteID(string $CreditNoteID): void
	{
		$this->CreditNoteID = $CreditNoteID;
	}

	/*** @return string|NULL */
	public function getCreditNoteNumber(): ?string
	{
		return $this->CreditNoteNumber;
	}

	/*** @param string|NULL $CreditNoteNumber */
	public function setCreditNoteNumber(?string $CreditNoteNumber): void
	{
		$this->CreditNoteNumber = $CreditNoteNumber;
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

	/*** @return bool|NULL */
	public function getSentToContact(): ?bool
	{
		return $this->SentToContact;
	}

	/*** @param bool|NULL $SentToContact */
	public function setSentToContact(?bool $SentToContact): void
	{
		$this->SentToContact = $SentToContact;
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

	/*** @return string */
	public function getBrandingThemeID(): string
	{
		return $this->BrandingThemeID;
	}

	/*** @param string $BrandingThemeID */
	public function setBrandingThemeID(string $BrandingThemeID): void
	{
		$this->BrandingThemeID = $BrandingThemeID;
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