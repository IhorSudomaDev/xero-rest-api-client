<?php

namespace XeroRestApiClient\Models;

/**
 * Class RepeatingInvoice
 * @property string|NULL     Type
 * @property Contact|NULL    Contact
 * @property Schedule        Schedule
 * @property string|NULL     LineAmountTypes
 * @property LineItem[]|NULL LineItems
 * @property string|NULL     Reference
 * @property string          BrandingThemeID
 * @property string|NULL     CurrencyCode
 * @property string|NULL     Status
 * @property float           SubTotal
 * @property float           TotalTax
 * @property float           Total
 * @property string          RepeatingInvoiceID
 * @property bool|NULL       HasAttachments
 * @property bool|NULL       ApprovedForSending
 * @property bool|NULL       SendCopy
 * @property bool|NULL       MarkAsSent
 * @property bool|NULL       IncludePDF
 * @package XeroApiClient\Models
 */
class RepeatingInvoice
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

	/*** @return Schedule */
	public function getSchedule(): Schedule
	{
		return $this->Schedule;
	}

	/*** @param Schedule $Schedule */
	public function setSchedule(Schedule $Schedule): void
	{
		$this->Schedule = $Schedule;
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
	public function getStatus(): ?string
	{
		return $this->Status;
	}

	/*** @param string|NULL $Status */
	public function setStatus(?string $Status): void
	{
		$this->Status = $Status;
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

	/*** @return string */
	public function getRepeatingInvoiceID(): string
	{
		return $this->RepeatingInvoiceID;
	}

	/*** @param string $RepeatingInvoiceID */
	public function setRepeatingInvoiceID(string $RepeatingInvoiceID): void
	{
		$this->RepeatingInvoiceID = $RepeatingInvoiceID;
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

	/*** @return bool|NULL */
	public function getApprovedForSending(): ?bool
	{
		return $this->ApprovedForSending;
	}

	/*** @param bool|NULL $ApprovedForSending */
	public function setApprovedForSending(?bool $ApprovedForSending): void
	{
		$this->ApprovedForSending = $ApprovedForSending;
	}

	/*** @return bool|NULL */
	public function getSendCopy(): ?bool
	{
		return $this->SendCopy;
	}

	/*** @param bool|NULL $SendCopy */
	public function setSendCopy(?bool $SendCopy): void
	{
		$this->SendCopy = $SendCopy;
	}

	/*** @return bool|NULL */
	public function getMarkAsSent(): ?bool
	{
		return $this->MarkAsSent;
	}

	/*** @param bool|NULL $MarkAsSent */
	public function setMarkAsSent(?bool $MarkAsSent): void
	{
		$this->MarkAsSent = $MarkAsSent;
	}

	/*** @return bool|NULL */
	public function getIncludePDF(): ?bool
	{
		return $this->IncludePDF;
	}

	/*** @param bool|NULL $IncludePDF */
	public function setIncludePDF(?bool $IncludePDF): void
	{
		$this->IncludePDF = $IncludePDF;
	}
}