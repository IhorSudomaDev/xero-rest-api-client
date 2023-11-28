<?php

namespace XeroRestApiClient\Authorization;

use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Throwable;
use XeroRestApiClient\Exceptions\AuthorizationException;
use XeroRestApiClient\ValueObjects\ApiRoute;
use XeroRestApiClient\ValueObjects\RequestMethod;

/**
 * Class Authorization
 * @package XeroRestApiClient\Authorization
 */
class Authorization
{
	/*** @var Credentials */
	private Credentials $credentials;

	/*** @var AccessToken */
	private AccessToken $accessToken;

	/**
	 * @param Credentials $credentials
	 * @param string|NULL $token
	 * @param Carbon|NULL $expiredAt
	 * @throws AuthorizationException
	 */
	public function __construct(Credentials $credentials, ?string $token = NULL, ?Carbon $expiredAt = NULL)
	{
		$this->setCredentials($credentials);
		$this->setAccessToken(new AccessToken($token, $expiredAt));
		if ( ! $this->getAccessToken()->isValid()) {
			$this->auth();
		}
	}

	/*** @return Credentials */
	public function getCredentials(): Credentials
	{
		return $this->credentials;
	}

	/*** @param Credentials $credentials */
	public function setCredentials(Credentials $credentials): void
	{
		$this->credentials = $credentials;
	}

	/*** @return AccessToken */
	public function getAccessToken(): AccessToken
	{
		return $this->accessToken;
	}

	/*** @param AccessToken $accessToken */
	public function setAccessToken(AccessToken $accessToken): void
	{
		$this->accessToken = $accessToken;
	}

	/*** @return string */
	public function getAuthHeader(): string
	{
		return sprintf('Bearer %s', $this->getAccessToken()->getJwToken());
	}

	/**
	 * @return Authorization
	 * @throws AuthorizationException
	 */
	public function auth(): Authorization
	{
		try {
			$client       = new Client();
			$response     = $client->request(
				RequestMethod::POST,
				ApiRoute::URL_ACCESS_TOKEN,
				[
					'verify'      => TRUE,
					'headers'     => [
						'Content-Type'  => 'application/x-www-form-urlencoded',
						'Cache-Control' => 'no-cache',
						'Authorization' => sprintf('Basic %s', $this->getCredentials()->getEncodedCredentials()),
					],
					'form_params' => [
						'grant_type' => 'client_credentials',
					],
				]
			);
			$authResponse = json_decode(($response->getBody())->getContents(), TRUE, 512, JSON_THROW_ON_ERROR);
			if (isset($authResponse['access_token'])) {
				$this->setAccessToken(new AccessToken($authResponse['access_token'], Carbon::now('UTC')->addSeconds($authResponse['expires_in'])));
			} else {
				throw new AuthorizationException();
			}
			return $this;
		} catch (Throwable|GuzzleException $e) {
			throw new AuthorizationException($e->getMessage());
		}
	}
}