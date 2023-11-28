<?php

namespace XeroRestApiClient\Models;

/**
 * Class SalesTrackingCategory
 * @property string|NULL TrackingCategoryName
 * @property string|NULL TrackingOptionName
 * @package XeroApiClient\Models
 */
class SalesTrackingCategory
{
	/*** @return string|NULL */
	public function getTrackingCategoryName(): ?string
	{
		return $this->TrackingCategoryName;
	}

	/*** @param string|NULL $TrackingCategoryName */
	public function setTrackingCategoryName(?string $TrackingCategoryName): void
	{
		$this->TrackingCategoryName = $TrackingCategoryName;
	}

	/*** @return string|NULL */
	public function getTrackingOptionName(): ?string
	{
		return $this->TrackingOptionName;
	}

	/*** @param string|NULL $TrackingOptionName */
	public function setTrackingOptionName(?string $TrackingOptionName): void
	{
		$this->TrackingOptionName = $TrackingOptionName;
	}
}