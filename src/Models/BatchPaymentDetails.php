<?php

namespace XeroRestApiClient\Models;

/**
 * Class BatchPaymentDetails
 * @property string|NULL BankAccountNumber
 * @property string|NULL BankAccountName
 * @property string|NULL Details
 * @property string|NULL Code
 * @property string|NULL Reference
 * @package XeroApiClient\Models
 */
class BatchPaymentDetails
{
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
	public function getBankAccountName(): ?string
	{
		return $this->BankAccountName;
	}

	/*** @param string|NULL $BankAccountName */
	public function setBankAccountName(?string $BankAccountName): void
	{
		$this->BankAccountName = $BankAccountName;
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
}