<?php

namespace XeroRestApiClient\Models;

/**
 * Class ContactGroup
 * @property string|NULL    Name
 * @property string|NULL    Status
 * @property string         ContactGroupID
 * @property Contact[]|NULL Contacts
 * @package XeroApiClient\Models
 */
class ContactGroup
{
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
	public function getStatus(): ?string
	{
		return $this->Status;
	}

	/*** @param string|NULL $Status */
	public function setStatus(?string $Status): void
	{
		$this->Status = $Status;
	}

	/*** @return string */
	public function getContactGroupID(): string
	{
		return $this->ContactGroupID;
	}

	/*** @param string $ContactGroupID */
	public function setContactGroupID(string $ContactGroupID): void
	{
		$this->ContactGroupID = $ContactGroupID;
	}

	/*** @return Contact[]|NULL */
	public function getContacts(): ?array
	{
		return $this->Contacts;
	}

	/*** @param Contact[]|NULL $Contacts */
	public function setContacts(?array $Contacts): void
	{
		$this->Contacts = $Contacts;
	}
}