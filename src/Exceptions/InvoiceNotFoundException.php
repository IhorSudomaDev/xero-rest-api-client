<?php

namespace XeroRestApiClient\Exceptions;

use Exception;

/**
 * Class InvoiceNotFoundException
 * @package XeroRestApiClient\Exceptions
 */
class InvoiceNotFoundException extends Exception
{
	/*** @var string */
	protected $message = 'Invoice(s) not found';
}