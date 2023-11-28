<?php

namespace XeroRestApiClient\Models;

/**
 * Class BrandingTheme
 * @property string      BrandingThemeID
 * @property string|NULL Name
 * @property string|NULL LogoUrl
 * @property string|NULL Type
 * @property int|NULL    SortOrder
 * @property string|NULL CreatedDateUTC
 * @package XeroApiClient\Models
 */
class BrandingTheme
{
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
	public function getLogoUrl(): ?string
	{
		return $this->LogoUrl;
	}

	/*** @param string|NULL $LogoUrl */
	public function setLogoUrl(?string $LogoUrl): void
	{
		$this->LogoUrl = $LogoUrl;
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

	/*** @return int|NULL */
	public function getSortOrder(): ?int
	{
		return $this->SortOrder;
	}

	/*** @param int|NULL $SortOrder */
	public function setSortOrder(?int $SortOrder): void
	{
		$this->SortOrder = $SortOrder;
	}

	/*** @return string|NULL */
	public function getCreatedDateUTC(): ?string
	{
		return $this->CreatedDateUTC;
	}

	/*** @param string|NULL $CreatedDateUTC */
	public function setCreatedDateUTC(?string $CreatedDateUTC): void
	{
		$this->CreatedDateUTC = $CreatedDateUTC;
	}
}