<?php

namespace XeroRestApiClient\Models;

/**
 * Class Allocation
 * @property Invoice|NULL     Invoice
 * @property Overpayment|NULL Overpayment
 * @property Prepayment|NULL  Prepayment
 * @property CreditNote|NULL  CreditNote
 * @property float            Amount
 * @property string|NULL      Date
 * @property string|NULL      StatusAttributeString
 * @package XeroApiClient\Models
 */
class Allocation
{
	/*** @return Invoice|NULL */
	public function getInvoice(): ?Invoice
	{
		return $this->Invoice;
	}

	/*** @param Invoice|NULL $Invoice */
	public function setInvoice(?Invoice $Invoice): void
	{
		$this->Invoice = $Invoice;
	}

	/*** @return Overpayment|NULL */
	public function getOverpayment(): ?Overpayment
	{
		return $this->Overpayment;
	}

	/*** @param Overpayment|NULL $Overpayment */
	public function setOverpayment(?Overpayment $Overpayment): void
	{
		$this->Overpayment = $Overpayment;
	}

	/*** @return Prepayment|NULL */
	public function getPrepayment(): ?Prepayment
	{
		return $this->Prepayment;
	}

	/*** @param Prepayment|NULL $Prepayment */
	public function setPrepayment(?Prepayment $Prepayment): void
	{
		$this->Prepayment = $Prepayment;
	}

	/*** @return CreditNote|NULL */
	public function getCreditNote(): ?CreditNote
	{
		return $this->CreditNote;
	}

	/*** @param CreditNote|NULL $CreditNote */
	public function setCreditNote(?CreditNote $CreditNote): void
	{
		$this->CreditNote = $CreditNote;
	}

	/*** @return float */
	public function getAmount(): float
	{
		return $this->Amount;
	}

	/*** @param float $Amount */
	public function setAmount(float $Amount): void
	{
		$this->Amount = $Amount;
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
	public function getStatusAttributeString(): ?string
	{
		return $this->StatusAttributeString;
	}

	/*** @param string|NULL $StatusAttributeString */
	public function setStatusAttributeString(?string $StatusAttributeString): void
	{
		$this->StatusAttributeString = $StatusAttributeString;
	}
}