<?php

namespace XeroRestApiClient\Models;

/**
 * Class Payment
 * @property string|NULL       Date
 * @property float             CurrencyRate
 * @property float             Amount
 * @property string|NULL       Reference
 * @property bool|NULL         IsReconciled
 * @property string|NULL       Status
 * @property string|NULL       PaymentType
 * @property string|NULL       UpdatedDateUTC
 * @property string            BatchPaymentID
 * @property BatchPayment|NULL BatchPayment
 * @property Account|NULL      Account
 * @property Invoice|NULL      Invoice
 * @property CreditNote|NULL   CreditNote
 * @property Prepayment|NULL   Prepayment
 * @property Overpayment|NULL  Overpayment
 * @package XeroApiClient\Models
 */
class Payment
{
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
	public function getIsReconciled(): ?bool
	{
		return $this->IsReconciled;
	}

	/*** @param bool|NULL $IsReconciled */
	public function setIsReconciled(?bool $IsReconciled): void
	{
		$this->IsReconciled = $IsReconciled;
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
	public function getPaymentType(): ?string
	{
		return $this->PaymentType;
	}

	/*** @param string|NULL $PaymentType */
	public function setPaymentType(?string $PaymentType): void
	{
		$this->PaymentType = $PaymentType;
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

	/*** @return string */
	public function getBatchPaymentID(): string
	{
		return $this->BatchPaymentID;
	}

	/*** @param string $BatchPaymentID */
	public function setBatchPaymentID(string $BatchPaymentID): void
	{
		$this->BatchPaymentID = $BatchPaymentID;
	}

	/*** @return BatchPayment|NULL */
	public function getBatchPayment(): ?BatchPayment
	{
		return $this->BatchPayment;
	}

	/*** @param BatchPayment|NULL $BatchPayment */
	public function setBatchPayment(?BatchPayment $BatchPayment): void
	{
		$this->BatchPayment = $BatchPayment;
	}

	/*** @return Account|NULL */
	public function getAccount(): ?Account
	{
		return $this->Account;
	}

	/*** @param Account|NULL $Account */
	public function setAccount(?Account $Account): void
	{
		$this->Account = $Account;
	}

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
}