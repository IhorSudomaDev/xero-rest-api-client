<?php

namespace XeroRestApiClient\Responses\BatchPayment;

use XeroRestApiClient\Responses\Abstracts\ASingleModelResponse;
use XeroRestApiClient\ValueObjects\Model;

/**
 * Class GetContactResponse
 * @package XeroRestApiClient\Responses\Contact
 */
class GetBatchPaymentResponse extends ASingleModelResponse
{
	/*** @var string */
	protected string $modelClass = Model::BATCH_PAYMENT;
}