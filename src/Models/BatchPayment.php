<?php

namespace XeroRestApiClient\Models;

/**
 * Class BatchPayment
 * @property Account|NULL   Account
 * @property string|NULL    Particulars
 * @property string|NULL    Code
 * @property string|NULL    Reference
 * @property string|NULL    Details
 * @property string|NULL    Narrative
 * @property string         BatchPaymentID
 * @property string|NULL    Date
 * @property Payment[]|NULL Payments
 * @property string|NULL    Type
 * @property string|NULL    Status
 * @property float          TotalAmount
 * @property bool|NULL      IsReconciled
 * @property string|NULL    UpdatedDateUTC
 * @package XeroApiClient\Models
 */
class BatchPayment
{
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

	/*** @return string|NULL */
	public function getParticulars(): ?string
	{
		return $this->Particulars;
	}

	/*** @param string|NULL $Particulars */
	public function setParticulars(?string $Particulars): void
	{
		$this->Particulars = $Particulars;
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
	public function getReference(): ?string
	{
		return $this->Reference;
	}

	/*** @param string|NULL $Reference */
	public function setReference(?string $Reference): void
	{
		$this->Reference = $Reference;
	}

	/*** @return string|NULL */
	public function getDetails(): ?string
	{
		return $this->Details;
	}

	/*** @param string|NULL $Details */
	public function setDetails(?string $Details): void
	{
		$this->Details = $Details;
	}

	/*** @return string|NULL */
	public function getNarrative(): ?string
	{
		return $this->Narrative;
	}

	/*** @param string|NULL $Narrative */
	public function setNarrative(?string $Narrative): void
	{
		$this->Narrative = $Narrative;
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
	public function getTotalAmount(): float
	{
		return $this->TotalAmount;
	}

	/*** @param float $TotalAmount */
	public function setTotalAmount(float $TotalAmount): void
	{
		$this->TotalAmount = $TotalAmount;
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