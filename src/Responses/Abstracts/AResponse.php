<?php

namespace XeroRestApiClient\Responses\Abstracts;

/**
 * Class AResponse
 * @package XeroRestApiClient\Responses\Abstracts
 */
abstract class AResponse
{
	/**
	 * @param $result
	 * @return mixed
	 */
	abstract public function get($result);
}