<?php

namespace XeroRestApiClient\Models;

/**
 * Class Address
 * @property string|NULL AddressType
 * @property string|NULL AddressLine1
 * @property string|NULL AddressLine2
 * @property string|NULL AddressLine3
 * @property string|NULL AddressLine4
 * @property string|NULL City
 * @property string|NULL Region
 * @property string|NULL PostalCode
 * @property string|NULL Country
 * @property string|NULL AttentionTo
 * @package XeroApiClient\Models
 */
class Address
{
	/*** @return string|NULL */
	public function getAddressType(): ?string
	{
		return $this->AddressType;
	}

	/*** @param string|NULL $AddressType */
	public function setAddressType(?string $AddressType): void
	{
		$this->AddressType = $AddressType;
	}

	/*** @return string|NULL */
	public function getAddressLine1(): ?string
	{
		return $this->AddressLine1;
	}

	/*** @param string|NULL $AddressLine1 */
	public function setAddressLine1(?string $AddressLine1): void
	{
		$this->AddressLine1 = $AddressLine1;
	}

	/*** @return string|NULL */
	public function getAddressLine2(): ?string
	{
		return $this->AddressLine2;
	}

	/*** @param string|NULL $AddressLine2 */
	public function setAddressLine2(?string $AddressLine2): void
	{
		$this->AddressLine2 = $AddressLine2;
	}

	/*** @return string|NULL */
	public function getAddressLine3(): ?string
	{
		return $this->AddressLine3;
	}

	/*** @param string|NULL $AddressLine3 */
	public function setAddressLine3(?string $AddressLine3): void
	{
		$this->AddressLine3 = $AddressLine3;
	}

	/*** @return string|NULL */
	public function getAddressLine4(): ?string
	{
		return $this->AddressLine4;
	}

	/*** @param string|NULL $AddressLine4 */
	public function setAddressLine4(?string $AddressLine4): void
	{
		$this->AddressLine4 = $AddressLine4;
	}

	/*** @return string|NULL */
	public function getCity(): ?string
	{
		return $this->City;
	}

	/*** @param string|NULL $City */
	public function setCity(?string $City): void
	{
		$this->City = $City;
	}

	/*** @return string|NULL */
	public function getRegion(): ?string
	{
		return $this->Region;
	}

	/*** @param string|NULL $Region */
	public function setRegion(?string $Region): void
	{
		$this->Region = $Region;
	}

	/*** @return string|NULL */
	public function getPostalCode(): ?string
	{
		return $this->PostalCode;
	}

	/*** @param string|NULL $PostalCode */
	public function setPostalCode(?string $PostalCode): void
	{
		$this->PostalCode = $PostalCode;
	}

	/*** @return string|NULL */
	public function getCountry(): ?string
	{
		return $this->Country;
	}

	/*** @param string|NULL $Country */
	public function setCountry(?string $Country): void
	{
		$this->Country = $Country;
	}

	/*** @return string|NULL */
	public function getAttentionTo(): ?string
	{
		return $this->AttentionTo;
	}

	/*** @param string|NULL $AttentionTo */
	public function setAttentionTo(?string $AttentionTo): void
	{
		$this->AttentionTo = $AttentionTo;
	}
}