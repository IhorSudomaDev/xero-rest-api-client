<?php

namespace XeroRestApiClient\Models;

/**
 * Class Invoice
 * @property string|NULL        Type
 * @property Contact|NULL       Contact
 * @property string|NULL        Date
 * @property string|NULL        DueDate
 * @property string|NULL        Status
 * @property string|NULL        LineAmountTypes
 * @property LineItem[]|NULL    LineItems
 * @property float              SubTotal
 * @property float              TotalTax
 * @property float              Total
 * @property float              TotalDiscount
 * @property string|NULL        UpdatedDateUTC
 * @property string|NULL        CurrencyCode
 * @property float              CurrencyRate
 * @property string             InvoiceID
 * @property string|NULL        InvoiceNumber
 * @property string|NULL        Reference
 * @property string             BrandingThemeID
 * @property string|NULL        Url
 * @property bool               SentToContact
 * @property string|NULL        ExpectedPaymentDate
 * @property string|NULL        PlannedPaymentDate
 * @property bool|NULL          HasAttachments
 * @property string             RepeatingInvoiceID
 * @property Payment[]|NULL     Payments
 * @property CreditNote[]|NULL  CreditNotes
 * @property Prepayment[]|NULL  Prepayments
 * @property Overpayment[]|NULL Overpayments
 * @property float              AmountDue
 * @property float              AmountPaid
 * @property float              CISDeduction
 * @property string|NULL        FullyPaidOnDate
 * @property float              AmountCredited
 * @property bool               IsDiscounted
 * @package XeroApiClient\Models
 */
class Invoice
{
	/*** @return string|NULL */
	public function getType(): ?string
	{
		return $this->Type;
	}

	/**
	 * @param string|NULL $Type
	 */
	public function setType(?string $Type): void
	{
		$this->Type = $Type;
	}

	/*** @return Contact|NULL */
	public function getContact(): ?Contact
	{
		return $this->Contact;
	}

	/**
	 * @param Contact|NULL $Contact
	 */
	public function setContact(?Contact $Contact): void
	{
		$this->Contact = $Contact;
	}

	/*** @return string|NULL */
	public function getDate(): ?string
	{
		return $this->Date;
	}

	/**
	 * @param string|NULL $Date
	 */
	public function setDate(?string $Date): void
	{
		$this->Date = $Date;
	}

	/*** @return string|NULL */
	public function getDueDate(): ?string
	{
		return $this->DueDate;
	}

	/**
	 * @param string|NULL $DueDate
	 */
	public function setDueDate(?string $DueDate): void
	{
		$this->DueDate = $DueDate;
	}

	/*** @return string|NULL */
	public function getStatus(): ?string
	{
		return $this->Status;
	}

	/**
	 * @param string|NULL $Status
	 */
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

	/**
	 * @param LineItem[]|NULL $LineItems
	 */
	public function setLineItems(?array $LineItems): void
	{
		$this->LineItems = $LineItems;
	}

	/*** @return float */
	public function getSubTotal(): float
	{
		return $this->SubTotal;
	}

	/**
	 * @param float $SubTotal
	 */
	public function setSubTotal(float $SubTotal): void
	{
		$this->SubTotal = $SubTotal;
	}

	/*** @return float */
	public function getTotalTax(): float
	{
		return $this->TotalTax;
	}

	/**
	 * @param float $TotalTax
	 */
	public function setTotalTax(float $TotalTax): void
	{
		$this->TotalTax = $TotalTax;
	}

	/*** @return float */
	public function getTotal(): float
	{
		return $this->Total;
	}

	/**
	 * @param float $Total
	 */
	public function setTotal(float $Total): void
	{
		$this->Total = $Total;
	}

	/*** @return float */
	public function getTotalDiscount(): float
	{
		return $this->TotalDiscount;
	}

	/**
	 * @param float $TotalDiscount
	 */
	public function setTotalDiscount(float $TotalDiscount): void
	{
		$this->TotalDiscount = $TotalDiscount;
	}

	/*** @return string|NULL */
	public function getUpdatedDateUTC(): ?string
	{
		return $this->UpdatedDateUTC;
	}

	/**
	 * @param string|NULL $UpdatedDateUTC
	 */
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

	/*** @return float */
	public function getCurrencyRate(): float
	{
		return $this->CurrencyRate;
	}

	/**
	 * @param float $CurrencyRate
	 */
	public function setCurrencyRate(float $CurrencyRate): void
	{
		$this->CurrencyRate = $CurrencyRate;
	}

	/*** @return string */
	public function getInvoiceID(): string
	{
		return $this->InvoiceID;
	}

	/**
	 * @param string $InvoiceID
	 */
	public function setInvoiceID(string $InvoiceID): void
	{
		$this->InvoiceID = $InvoiceID;
	}

	/*** @return string|NULL */
	public function getInvoiceNumber(): ?string
	{
		return $this->InvoiceNumber;
	}

	/**
	 * @param string|NULL $InvoiceNumber
	 */
	public function setInvoiceNumber(?string $InvoiceNumber): void
	{
		$this->InvoiceNumber = $InvoiceNumber;
	}

	/*** @return string|NULL */
	public function getReference(): ?string
	{
		return $this->Reference;
	}

	/**
	 * @param string|NULL $Reference
	 */
	public function setReference(?string $Reference): void
	{
		$this->Reference = $Reference;
	}

	/*** @return string */
	public function getBrandingThemeID(): string
	{
		return $this->BrandingThemeID;
	}

	/**
	 * @param string $BrandingThemeID
	 */
	public function setBrandingThemeID(string $BrandingThemeID): void
	{
		$this->BrandingThemeID = $BrandingThemeID;
	}

	/*** @return string|NULL */
	public function getUrl(): ?string
	{
		return $this->Url;
	}

	/**
	 * @param string|NULL $Url
	 */
	public function setUrl(?string $Url): void
	{
		$this->Url = $Url;
	}

	/*** @return bool */
	public function isSentToContact(): bool
	{
		return $this->SentToContact;
	}

	/**
	 * @param bool $SentToContact
	 */
	public function setSentToContact(bool $SentToContact): void
	{
		$this->SentToContact = $SentToContact;
	}

	/*** @return string|NULL */
	public function getExpectedPaymentDate(): ?string
	{
		return $this->ExpectedPaymentDate;
	}

	/**
	 * @param string|NULL $ExpectedPaymentDate
	 */
	public function setExpectedPaymentDate(?string $ExpectedPaymentDate): void
	{
		$this->ExpectedPaymentDate = $ExpectedPaymentDate;
	}

	/*** @return string|NULL */
	public function getPlannedPaymentDate(): ?string
	{
		return $this->PlannedPaymentDate;
	}

	/**
	 * @param string|NULL $PlannedPaymentDate
	 */
	public function setPlannedPaymentDate(?string $PlannedPaymentDate): void
	{
		$this->PlannedPaymentDate = $PlannedPaymentDate;
	}

	/*** @return bool|NULL */
	public function getHasAttachments(): ?bool
	{
		return $this->HasAttachments;
	}

	/**
	 * @param bool|NULL $HasAttachments
	 */
	public function setHasAttachments(?bool $HasAttachments): void
	{
		$this->HasAttachments = $HasAttachments;
	}

	/*** @return string */
	public function getRepeatingInvoiceID(): string
	{
		return $this->RepeatingInvoiceID;
	}

	/**
	 * @param string $RepeatingInvoiceID
	 */
	public function setRepeatingInvoiceID(string $RepeatingInvoiceID): void
	{
		$this->RepeatingInvoiceID = $RepeatingInvoiceID;
	}

	/*** @return Payment[]|NULL */
	public function getPayments(): ?array
	{
		return $this->Payments;
	}

	/**
	 * @param Payment[]|NULL $Payments
	 */
	public function setPayments(?array $Payments): void
	{
		$this->Payments = $Payments;
	}

	/*** @return CreditNote[]|NULL */
	public function getCreditNotes(): ?array
	{
		return $this->CreditNotes;
	}

	/**
	 * @param CreditNote[]|NULL $CreditNotes
	 */
	public function setCreditNotes(?array $CreditNotes): void
	{
		$this->CreditNotes = $CreditNotes;
	}

	/*** @return Prepayment[]|NULL */
	public function getPrepayments(): ?array
	{
		return $this->Prepayments;
	}

	/**
	 * @param Prepayment[]|NULL $Prepayments
	 */
	public function setPrepayments(?array $Prepayments): void
	{
		$this->Prepayments = $Prepayments;
	}

	/*** @return Overpayment[]|NULL */
	public function getOverpayments(): ?array
	{
		return $this->Overpayments;
	}

	/**
	 * @param Overpayment[]|NULL $Overpayments
	 */
	public function setOverpayments(?array $Overpayments): void
	{
		$this->Overpayments = $Overpayments;
	}

	/*** @return float */
	public function getAmountDue(): float
	{
		return $this->AmountDue;
	}

	/**
	 * @param float $AmountDue
	 */
	public function setAmountDue(float $AmountDue): void
	{
		$this->AmountDue = $AmountDue;
	}

	/*** @return float */
	public function getAmountPaid(): float
	{
		return $this->AmountPaid;
	}

	/**
	 * @param float $AmountPaid
	 */
	public function setAmountPaid(float $AmountPaid): void
	{
		$this->AmountPaid = $AmountPaid;
	}

	/*** @return float */
	public function getCISDeduction(): float
	{
		return $this->CISDeduction;
	}

	/**
	 * @param float $CISDeduction
	 */
	public function setCISDeduction(float $CISDeduction): void
	{
		$this->CISDeduction = $CISDeduction;
	}

	/*** @return string|NULL */
	public function getFullyPaidOnDate(): ?string
	{
		return $this->FullyPaidOnDate;
	}

	/**
	 * @param string|NULL $FullyPaidOnDate
	 */
	public function setFullyPaidOnDate(?string $FullyPaidOnDate): void
	{
		$this->FullyPaidOnDate = $FullyPaidOnDate;
	}

	/*** @return float */
	public function getAmountCredited(): float
	{
		return $this->AmountCredited;
	}

	/**
	 * @param float $AmountCredited
	 */
	public function setAmountCredited(float $AmountCredited): void
	{
		$this->AmountCredited = $AmountCredited;
	}

	/*** @return bool */
	public function isIsDiscounted(): bool
	{
		return $this->IsDiscounted;
	}

	/*** @param bool $IsDiscounted */
	public function setIsDiscounted(bool $IsDiscounted): void
	{
		$this->IsDiscounted = $IsDiscounted;
	}
}