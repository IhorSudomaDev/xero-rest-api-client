<?php

namespace XeroRestApiClient\Requests\ContactGroup;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\ContactGroup\GetContactGroupResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetContactGroupRequest
 * @package XeroRestApiClient\Requests\ContactGroup
 */
class GetContactGroupRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::CONTACT_GROUPS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetContactGroupResponse::class;

	/*** @var string */
	private string $contactGroupId;

	/**
	 * @param Authorization $authorization
	 * @param string        $contactGroupId
	 */
	public function __construct(Authorization $authorization, string $contactGroupId)
	{
		parent::__construct($authorization);
		$this->setContactGroupId($contactGroupId);
	}

	/*** @return string */
	public function getContactGroupId(): string
	{
		return $this->contactGroupId;
	}

	/*** @param string $contactGroupId */
	public function setContactGroupId(string $contactGroupId): void
	{
		$this->contactGroupId = $contactGroupId;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getContactGroupId());
	}
}