<?php

namespace XeroRestApiClient\Requests\Item;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\Item\CreateItemResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class CreateItemRequest
 * @package XeroRestApiClient\Requests\Item
 */
class CreateItemRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::ITEMS;

	/*** @var string */
	protected string $method = RequestMethod::POST;

	/*** @var string */
	protected string $responseClass = CreateItemResponse::class;

	/*** @var array|NULL[] */
	protected array $availableInputParameters = [
		'Code'                      => NULL,
		'Name'                      => NULL,
		'Description'               => NULL,
		'InventoryAssetAccountCode' => NULL,
	];

	/**
	 * @param Authorization $authorization
	 * @param string        $code
	 */
	public function __construct(Authorization $authorization, string $code)
	{
		parent::__construct($authorization);
		$this->withCode($code);
	}

	/**
	 * @param string $code
	 * @return $this
	 */
	public function withCode(string $code): self
	{
		$this->availableInputParameters['Code'] = $code;
		return $this;
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
	 * @param string $description
	 * @return $this
	 */
	public function withDescription(string $description): self
	{
		$this->availableInputParameters['Description'] = $description;
		return $this;
	}

	/**
	 * @param string $inventoryAssetAccountCode
	 * @return $this
	 */
	public function withInventoryAssetAccountCode(string $inventoryAssetAccountCode): self
	{
		$this->availableInputParameters['InventoryAssetAccountCode'] = $inventoryAssetAccountCode;
		return $this;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), '');
	}
}