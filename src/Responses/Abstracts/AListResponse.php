<?php

namespace XeroRestApiClient\Responses\Abstracts;

use XeroRestApiClient\ValueObjects\ModelFactory;

/**
 * Class AListResponse
 * @package XeroRestApiClient\Responses\Abstracts
 */
abstract class AListResponse extends AResponse
{
	/*** @var string */
	protected string $modelClass;

	/**
	 * @param $result
	 * @return array
	 */
	public function get($result): array
	{
		$list       = [];
		$modelClass = $this->modelClass;
		$modelName  = '\XeroApiClient\Models\\' . $modelClass;
		if ( ! empty($result)) {
			if (substr($modelClass, -1) === 'y') {
				$responseKey = substr($modelClass, 0, strlen($modelClass) - 1) . 'ies';
			} else {
				$responseKey = $modelClass . 's';
			}
			$result = $result->$responseKey;
			foreach ($result as $product) {
				$list[] = ModelFactory::create(new $modelName(), $product);
			}
		}
		return $list;
	}
}