<?php

namespace XeroRestApiClient\Requests\Item;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class DeleteItemRequest
 * @package XeroRestApiClient\Requests\Item
 */
class DeleteItemRequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::ITEMS;

	/*** @var string */
	protected string $method = RequestMethod::DELETE;

	/*** @var string */
	protected string $responseClass = DeleteInvoiceResponse::class;

	/*** @var string */
	private string $identifier;

	/**
	 * @param Authorization $authorization
	 * @param string        $identifier
	 */
	public function __construct(Authorization $authorization, string $identifier)
	{
		parent::__construct($authorization);
		$this->setIdentifier($identifier);
	}

	/*** @return string */
	public function getIdentifier(): string
	{
		return $this->identifier;
	}

	/*** @param string $identifier */
	public function setIdentifier(string $identifier): void
	{
		$this->identifier = $identifier;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getIdentifier());
	}
}