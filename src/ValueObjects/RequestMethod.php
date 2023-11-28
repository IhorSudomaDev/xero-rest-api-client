<?php

namespace XeroRestApiClient\ValueObjects;

/**
 * Class RequestMethod
 * @package XeroRestApiClient\ValueObjects
 */
class RequestMethod
{
	/** @var string */
	public const POST = 'POST';
	/** @var string */
	public const GET = 'GET';
	/** @var string */
	public const PUT = 'PUT';
	/** @var string */
	public const DELETE = 'DELETE';
}