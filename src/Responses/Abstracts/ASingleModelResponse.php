<?php

namespace XeroRestApiClient\Responses\Abstracts;

use XeroRestApiClient\Exceptions\NotFoundException;
use XeroRestApiClient\ValueObjects\ModelFactory;

/**
 * Class ASingleModelResponse
 * @package XeroRestApiClient\Responses\Abstracts
 */
abstract class ASingleModelResponse extends AResponse
{
	/*** @var string */
	protected string $modelClass;

	/**
	 * @param $result
	 * @return mixed
	 * @throws NotFoundException
	 */
	public function get($result)
	{
		$modelClass = $this->modelClass;
		if (empty($result)) {
			throw new NotFoundException($modelClass);
		}
		$modelName = '\XeroApiClient\Models\\' . $modelClass;
		$resultKey = $modelClass . 's';
		$result    = $result->$resultKey;
		return ModelFactory::create(new $modelName(), $result[0]);
	}
}