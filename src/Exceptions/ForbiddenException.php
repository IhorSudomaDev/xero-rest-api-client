<?php

namespace XeroRestApiClient\Exceptions;

use Exception;

/**
 * Class ForbiddenException
 * @package XeroRestApiClient\Exceptions
 */
class ForbiddenException extends Exception
{

	/*** @var string */
	protected $message = 'Forbidden (403)';

}