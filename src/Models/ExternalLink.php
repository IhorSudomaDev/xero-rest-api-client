<?php

namespace XeroRestApiClient\Models;

/**
 * Class ExternalLink
 * @property string|NULL LinkType
 * @property string|NULL Url
 * @property string|NULL Description
 * @package XeroApiClient\Models
 */
class ExternalLink
{
	/*** @return string|NULL */
	public function getLinkType(): ?string
	{
		return $this->LinkType;
	}

	/*** @param string|NULL $LinkType */
	public function setLinkType(?string $LinkType): void
	{
		$this->LinkType = $LinkType;
	}

	/*** @return string|NULL */
	public function getUrl(): ?string
	{
		return $this->Url;
	}

	/*** @param string|NULL $Url */
	public function setUrl(?string $Url): void
	{
		$this->Url = $Url;
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
}