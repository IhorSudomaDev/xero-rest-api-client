<?php

namespace XeroRestApiClient\Requests\Contact;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Models\Address;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Contact\CreateContactResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class CreateContactRequest
 * @package XeroRestApiClient\Requests\Contact
 */
class CreateContactRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::CONTACTS;

	/*** @var string */
	protected string $method = RequestMethod::POST;

	/*** @var string */
	protected string $responseClass = CreateContactResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [
		'Name'            => NULL,
		'ContactNumber'   => NULL,
		'AccountNumber'   => NULL,
		'CompanyNumber'   => NULL,
		'EmailAddress'    => NULL,
		'TaxNumber'       => NULL,
		'Addresses'       => NULL,
		'Phones'          => NULL,
		'DefaultCurrency' => NULL,
		'ContactGroups'   => [],
	];

	/**
	 * @param Authorization $authorization
	 * @param string        $name
	 */
	public function __construct(Authorization $authorization, string $name)
	{
		parent::__construct($authorization);
		$this->withName($name);
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function withName(string $name): self
	{
		$this->availableInputParameters['Name'] = $name;
		return $this;
	}

	/**
	 * @param string $contactNumber
	 * @return $this
	 */
	public function withContactNumber(string $contactNumber): self
	{
		$this->availableInputParameters['ContactNumber'] = $contactNumber;
		return $this;
	}

	/**
	 * @param string $accountNumber
	 * @return $this
	 */
	public function withAccountNumber(string $accountNumber): self
	{
		$this->availableInputParameters['AccountNumber'] = $accountNumber;
		return $this;
	}

	/**
	 * @param string $companyNumber
	 * @return $this
	 */
	public function withCompanyNumber(string $companyNumber): self
	{
		$this->availableInputParameters['CompanyNumber'] = $companyNumber;
		return $this;
	}

	/**
	 * @param string $emailAddress
	 * @return $this
	 */
	public function withEmailAddress(string $emailAddress): self
	{
		$this->availableInputParameters['EmailAddress'] = $emailAddress;
		return $this;
	}

	/**
	 * @param string $taxNumber
	 * @return $this
	 */
	public function withTaxNumber(string $taxNumber): self
	{
		$this->availableInputParameters['TaxNumber'] = $taxNumber;
		return $this;
	}

	/**
	 * @param Address $address
	 * @return $this
	 */
	public function withAddresses(Address $address): self
	{
		$this->availableInputParameters['Addresses'][] = $address;
		return $this;
	}

	/**
	 * @param string $defaultCurrency
	 * @return $this
	 */
	public function withDefaultCurrency(string $defaultCurrency): self
	{
		$this->availableInputParameters['DefaultCurrency'] = $defaultCurrency;
		return $this;
	}

	/**
	 * @param array $contactGroups
	 * @return $this
	 */
	public function withContactGroups(array $contactGroups): self
	{
		$this->availableInputParameters['ContactGroups'] = $contactGroups;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}