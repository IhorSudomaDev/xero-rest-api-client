<?php

namespace XeroRestApiClient\Requests\Contact;



use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Contact\GetContactResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetContactRequestByEmail
 * @package XeroRestApiClient\Requests\Contact
 */
class GetContactByEmailOrNameRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::CONTACTS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetContactResponse::class;

	/**
	 * @param string $emailAddress
	 * @return $this
	 */
	public function withEmail(string $emailAddress): self
	{
		$this->availableInputParameters['where'] = sprintf('EmailAddress="%s"', $emailAddress);
		return $this;
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function withName(string $name) :self
	{
		$this->availableInputParameters['where'] = sprintf('Name="%s"', $name);
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}