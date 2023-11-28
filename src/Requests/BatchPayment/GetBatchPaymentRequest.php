<?php

namespace XeroRestApiClient\Requests\BatchPayment;

use XeroRestApiClient\Authorization\Authorization;
use XeroRestApiClient\Requests\Abstracts\ARequest;
use XeroRestApiClient\Responses\BatchPayment\GetBatchPaymentResponse;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class GetContactRequest
 * @package XeroRestApiClient\Requests\Contact
 */
class GetBatchPaymentRequest extends ARequest
{
	/*** @var string */
	protected string $routePrefix = ApiRoute::BATCH_PAYMENTS;

	/*** @var string */
	protected string $method = RequestMethod::GET;

	/*** @var string */
	protected string $responseClass = GetBatchPaymentResponse::class;

	/*** @var string */
	private string $batchPaymentId;

	/**
	 * @param Authorization $authorization
	 * @param string        $batchPaymentId
	 */
	public function __construct(Authorization $authorization, string $batchPaymentId)
	{
		parent::__construct($authorization);
		$this->setBatchPaymentId($batchPaymentId);
	}

	/*** @return string */
	public function getBatchPaymentId(): string
	{
		return $this->batchPaymentId;
	}

	/*** @param string $batchPaymentId */
	public function setBatchPaymentId(string $batchPaymentId): void
	{
		$this->batchPaymentId = $batchPaymentId;
	}

	/*** @return string */
	public function getUrl(): string
	{
		return sprintf(ApiRoute::getFor($this->routePrefix), $this->getBatchPaymentId());
	}
}