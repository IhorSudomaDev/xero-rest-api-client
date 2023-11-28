<?php

namespace XeroRestApiClient\Exceptions;

use Exception;

/**
 * Class AuthorizationException
 * @package XeroRestApiClient\Exceptions
 */
class AuthorizationException extends Exception
{
	/*** @var string */
	protected $message = 'Authorization was failed';

}