<?php

namespace XeroRestApiClient\Exceptions;

use Exception;

/**
 * Class PageNotFoundException
 * @package XeroRestApiClient\Exceptions
 */
class PageNotFoundException extends Exception
{
	/*** @var string */
	protected $message = 'Page Not Found';
}