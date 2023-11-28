<?php

namespace XeroRestApiClient\Requests\Contact;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Contact\GetContactResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetContactRequest
 * @package XeroRestApiClient\Requests\Contact
 */
class GetContactRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::CONTACTS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetContactResponse::class;

	/*** @var string */
	private string $contactNumber;

	/**
	 * @param Authorization $authorization
	 * @param string        $contactNumber
	 */
	public function __construct(Authorization $authorization, string $contactNumber)
	{
		parent::__construct($authorization);
		$this->setContactNumber($contactNumber);
	}

	/*** @return string */
	public function getContactNumber(): string
	{
		return $this->contactNumber;
	}

	/***
	 * @param string $contactNumber
	 */
	public function setContactNumber(string $contactNumber): void
	{
		$this->contactNumber = $contactNumber;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getContactNumber());
	}
}