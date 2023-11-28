<?php

namespace XeroRestApiClient\Models;

/**
 * Class Phone
 * @property string|NULL PhoneType
 * @property string|NULL PhoneNumber
 * @property string|NULL PhoneAreaCode
 * @property string|NULL PhoneCountryCode
 * @package XeroApiClient\Models
 */
class Phone
{
	/*** @return string|NULL */
	public function getPhoneType(): ?string
	{
		return $this->PhoneType;
	}

	/*** @param string|NULL $PhoneType */
	public function setPhoneType(?string $PhoneType): void
	{
		$this->PhoneType = $PhoneType;
	}

	/*** @return string|NULL */
	public function getPhoneNumber(): ?string
	{
		return $this->PhoneNumber;
	}

	/*** @param string|NULL $PhoneNumber */
	public function setPhoneNumber(?string $PhoneNumber): void
	{
		$this->PhoneNumber = $PhoneNumber;
	}

	/*** @return string|NULL */
	public function getPhoneAreaCode(): ?string
	{
		return $this->PhoneAreaCode;
	}

	/*** @param string|NULL $PhoneAreaCode */
	public function setPhoneAreaCode(?string $PhoneAreaCode): void
	{
		$this->PhoneAreaCode = $PhoneAreaCode;
	}

	/*** @return string|NULL */
	public function getPhoneCountryCode(): ?string
	{
		return $this->PhoneCountryCode;
	}

	/*** @param string|NULL $PhoneCountryCode */
	public function setPhoneCountryCode(?string $PhoneCountryCode): void
	{
		$this->PhoneCountryCode = $PhoneCountryCode;
	}
}