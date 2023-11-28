<?php

namespace XeroRestApiClient\Models;

/**
 * Class ContactPerson
 * @property string|NULL FirstName
 * @property string|NULL LastName
 * @property string|NULL EmailAddress
 * @property bool|NULL   IncludeInEmails
 * @package XeroApiClient\Models
 */
class ContactPerson
{
	/*** @return string|NULL */
	public function getFirstName(): ?string
	{
		return $this->FirstName;
	}

	/*** @param string|NULL $FirstName */
	public function setFirstName(?string $FirstName): void
	{
		$this->FirstName = $FirstName;
	}

	/*** @return string|NULL */
	public function getLastName(): ?string
	{
		return $this->LastName;
	}

	/*** @param string|NULL $LastName */
	public function setLastName(?string $LastName): void
	{
		$this->LastName = $LastName;
	}

	/*** @return string|NULL */
	public function getEmailAddress(): ?string
	{
		return $this->EmailAddress;
	}

	/*** @param string|NULL $EmailAddress */
	public function setEmailAddress(?string $EmailAddress): void
	{
		$this->EmailAddress = $EmailAddress;
	}

	/*** @return bool|NULL */
	public function getIncludeInEmails(): ?bool
	{
		return $this->IncludeInEmails;
	}

	/*** @param bool|NULL $IncludeInEmails */
	public function setIncludeInEmails(?bool $IncludeInEmails): void
	{
		$this->IncludeInEmails = $IncludeInEmails;
	}
}