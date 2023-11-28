<?php

namespace XeroRestApiClient\Authorization;

use Carbon\Carbon;

/**
 * Class AccessToken
 * @package XeroRestApiClient\Authorization
 */
class AccessToken
{
	/*** @var string|NULL */
	private ?string $jwToken;

	/*** @var Carbon|NULL */
	private ?Carbon $expiredAt;

	/**
	 * @param string|NULL $jwToken
	 * @param ?Carbon     $expiredAt
	 */
	public function __construct(?string $jwToken, ?Carbon $expiredAt)
	{
		$this->jwToken   = $jwToken;
		$this->expiredAt = $expiredAt;
	}

	/*** @return string|NULL */
	public function getJwToken(): ?string
	{
		return $this->jwToken;
	}

	/*** @return Carbon|NULL */
	public function getExpiredAt(): ?Carbon
	{
		return $this->expiredAt;
	}

	/*** @return bool */
	public function isValid(): bool
	{
		$expiredAt = $this->getExpiredAt();
		return ! empty($this->getJwToken()) && $expiredAt !== NULL && $expiredAt->setTimezone('UTC')->getTimestamp() - 1800 > Carbon::now('UTC')->getTimestamp();
	}
}