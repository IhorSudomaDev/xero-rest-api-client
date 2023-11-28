<?php

namespace XeroRestApiClient\Authorization;

/**
 * Class Credentials
 * @package XeroApiClient\Authorization
 */
class Credentials
{
	/*** @var string */
	private string $clientId;

	/*** @var string */
	private string $clientSecret;

	/**
	 * @param $clientId
	 * @param $clientSecret
	 */
	public function __construct($clientId, $clientSecret)
	{
		$this->setClientId($clientId);
		$this->setClientSecret($clientSecret);
	}

	/*** @param string $clientId */
	public function setClientId(string $clientId): void
	{
		$this->clientId = $clientId;
	}

	/*** @param string $clientSecret */
	public function setClientSecret(string $clientSecret): void
	{
		$this->clientSecret = $clientSecret;
	}

	/*** @return string */
	public function getEncodedCredentials(): string
	{
		return base64_encode(sprintf('%s:%s', $this->clientId, $this->clientSecret));
	}
}