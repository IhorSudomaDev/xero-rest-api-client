<?php

namespace XeroRestApiClient\Models;

/**
 * Class Account
 * @property string|NULL Code
 * @property string|NULL Name
 * @property string|NULL Type
 * @property string|NULL BankAccountNumber
 * @property string|NULL Status
 * @property string|NULL Description
 * @property string|NULL BankAccountType
 * @property string|NULL CurrencyCode
 * @property string|NULL TaxType
 * @property bool|NULL   EnablePaymentsToAccount
 * @property bool|NULL   ShowInExpenseClaims
 * @property string      AccountID
 * @property string|NULL Class
 * @property string|NULL SystemAccount
 * @property string|NULL ReportingCode
 * @property string|NULL ReportingCodeName
 * @property bool|NULL   HasAttachments
 * @property string|NULL UpdatedDateUTC
 * @property bool|NULL   AddToWatchlist
 * @package XeroApiClient\Models
 */
class Account
{
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
	public function getBankAccountNumber(): ?string
	{
		return $this->BankAccountNumber;
	}

	/*** @param string|NULL $BankAccountNumber */
	public function setBankAccountNumber(?string $BankAccountNumber): void
	{
		$this->BankAccountNumber = $BankAccountNumber;
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
	public function getBankAccountType(): ?string
	{
		return $this->BankAccountType;
	}

	/*** @param string|NULL $BankAccountType */
	public function setBankAccountType(?string $BankAccountType): void
	{
		$this->BankAccountType = $BankAccountType;
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
	public function getTaxType(): ?string
	{
		return $this->TaxType;
	}

	/*** @param string|NULL $TaxType */
	public function setTaxType(?string $TaxType): void
	{
		$this->TaxType = $TaxType;
	}

	/*** @return bool|NULL */
	public function getEnablePaymentsToAccount(): ?bool
	{
		return $this->EnablePaymentsToAccount;
	}

	/*** @param bool|NULL $EnablePaymentsToAccount */
	public function setEnablePaymentsToAccount(?bool $EnablePaymentsToAccount): void
	{
		$this->EnablePaymentsToAccount = $EnablePaymentsToAccount;
	}

	/*** @return bool|NULL */
	public function getShowInExpenseClaims(): ?bool
	{
		return $this->ShowInExpenseClaims;
	}

	/*** @param bool|NULL $ShowInExpenseClaims */
	public function setShowInExpenseClaims(?bool $ShowInExpenseClaims): void
	{
		$this->ShowInExpenseClaims = $ShowInExpenseClaims;
	}

	/*** @return string */
	public function getAccountID(): string
	{
		return $this->AccountID;
	}

	/*** @param string $AccountID */
	public function setAccountID(string $AccountID): void
	{
		$this->AccountID = $AccountID;
	}

	/*** @return string|NULL */
	public function getClass(): ?string
	{
		return $this->Class;
	}

	/*** @param string|NULL $Class */
	public function setClass(?string $Class): void
	{
		$this->Class = $Class;
	}

	/*** @return string|NULL */
	public function getSystemAccount(): ?string
	{
		return $this->SystemAccount;
	}

	/*** @param string|NULL $SystemAccount */
	public function setSystemAccount(?string $SystemAccount): void
	{
		$this->SystemAccount = $SystemAccount;
	}

	/*** @return string|NULL */
	public function getReportingCode(): ?string
	{
		return $this->ReportingCode;
	}

	/*** @param string|NULL $ReportingCode */
	public function setReportingCode(?string $ReportingCode): void
	{
		$this->ReportingCode = $ReportingCode;
	}

	/*** @return string|NULL */
	public function getReportingCodeName(): ?string
	{
		return $this->ReportingCodeName;
	}

	/*** @param string|NULL $ReportingCodeName */
	public function setReportingCodeName(?string $ReportingCodeName): void
	{
		$this->ReportingCodeName = $ReportingCodeName;
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

	/*** @return bool|NULL */
	public function getAddToWatchlist(): ?bool
	{
		return $this->AddToWatchlist;
	}

	/*** @param bool|NULL $AddToWatchlist */
	public function setAddToWatchlist(?bool $AddToWatchlist): void
	{
		$this->AddToWatchlist = $AddToWatchlist;
	}
}