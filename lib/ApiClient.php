<?php

declare(strict_types=1);

namespace Nmusco\AssureSign\v3;

use Nmusco\AssureSign\v3\Api\EmailDesignSetsApi;
use Nmusco\AssureSign\v3\Api\EnvelopeApi;
use Nmusco\AssureSign\v3\Api\PreparedEnvelopeApi;
use Nmusco\AssureSign\v3\Api\SsoTokenApi;
use Nmusco\AssureSign\v3\Api\SubmitApi;
use Nmusco\AssureSign\v3\Api\TemplatesApi;
use Nmusco\AssureSign\v3\Api\UsersApi;
use Nmusco\AssureSign\v3\Configuration;
use Nmusco\AssureSign\v3\Provider\AssureSignAuthProvider;

use Exception;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use OAuth\Client\TokenStorage\TokenStorageInterface;
use OAuth\Client\Exception\TokenNotFoundException;

/**
 * Class ApiClient.
 *
 * @author   Nicholas Musco
 * @license  proprietary
 *
 * @link     http://github.com/nmusco/assuresign-sdk-php-v3/
 */
class ApiClient
{
	const VERSION = '3.6';

	/**
     * Genesys token.
     *
     * @var array
     */
    public $token;

    /**
     *
     * @var AbstractProvider
     */
    protected $authProvider;

    /**
     *
     * @var AccessToken
     */
	protected $accessToken;
	
	/**
	 * @var Array
	 */
	protected $clients;

    /**
     *
     * @var TokenStorageInterface
     */
	protected $tokenRepository;
	
	    /**
     * Client constructor.
     *
     * @param string $hostname
     *            ShareFile hostname
     * @param string $client_id
     *            OAuth2 client_id
     * @param string $client_secret
     *            OAuth2 client_secret
	 * @param string $client_context
     *            OAuth2 client_context
     * @param string $username
     *            ShareFile username
     * @param string $password
     *            ShareFile password
     * @param MockHandler|HandlerStack $handler
     *            Guzzle Handler
     * @param TokenStorageInterface $tokenRepository
     *            OAuth2 Token Storage handler
     *
     * @throws Exception
     */
	public function __construct(string $baseApiUrl, string $baseAuthUrl, string $client_id, string $client_secret, string $client_context, $handler = null, TokenStorageInterface $tokenRepository = null)
	{
		$this->tokenRepository = $tokenRepository;
		$this->clientId = $client_id;
		$this->clientContext = $client_context;

		$client = new HttpClient([
			'handler' => $handler
		]);

		$this->authProvider = new AssureSignAuthProvider(
			[
				'clientId' => $client_id,
				'clientSecret' => $client_secret,
				'clientContext' => $client_context,
			], [
				'httpClient' => $client,
			]
		);

		$this->options = [
			'baseApiUrl' => $baseApiUrl,
			'baseAuthUrl' => $baseAuthUrl,
		];
	}

	public function getAccessToken(): AccessToken
	{
		$tokenId = sprintf('assuresign-client-v3-%s-%s', $this->clientId, $this->clientContext);
		if (isset($this->options['username'])) {
			$tokenId = sprintf('assuresign-client-user-%s-%s', $this->options['username']);
		}

		if ($this->accessToken === null) {
			if ($this->tokenRepository !== null) {
				try {
					$this->accessToken = $this->tokenRepository->loadToken($tokenId);
				} catch(TokenNotFoundException $e) {}
			}

			if ($this->accessToken === null) {
				$this->accessToken = $this->getNewAccessToken();
				if ($this->tokenRepository !== null) {
					$this->tokenRepository->storeToken($this->accessToken, $tokenId);
				}
			}
		}

		if ($this->accessToken !== null && $this->accessToken->hasExpired() === true) {
			$this->accessToken = $this->getNewAccessToken();
			if ($this->tokenRepository !== null) {
				$this->tokenRepository->storeToken($this->accessToken, $tokenId);
			}
		}

		return $this->accessToken;
	}

	private function getNewAccessToken() : AccessToken
	{
		if (!isset($this->options['username'])) {
			$options = [
				'baseUrl' => $this->options['baseAuthUrl'],
			];

			return $this->authProvider->getAccessToken('client_credentials', $options);
		}

		$options = [
			'baseUrl' => $this->options['baseAuthUrl'],
			'username' => $this->options['username'],
			'password' => '',
		];

		if (isset($this->options['password'])) {
			$options['password'] = $this->options['password'];
		}

		return $this->authProvider->getAccessToken('password', $options);
	}
	
	public function getEmailDesignSetsApi() : EmailDesignSetsApi
	{
		if (!isset($this->clients['EmailDesignSetsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['EmailDesignSetsApi'] = new EmailDesignSetsApi($client, $configuration, null);
		}

		return $this->clients['EmailDesignSetsApi'];
	}

	public function getEnvelopeApi() : EnvelopeApi
	{
		if (!isset($this->clients['EnvelopeApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['EnvelopeApi'] = new EnvelopeApi($client, $configuration, null);
		}

		return $this->clients['EnvelopeApi'];
	}

	public function getPreparedEnvelopeApi() : PreparedEnvelopeApi
	{
		if (!isset($this->clients['PreparedEnvelopeApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['PreparedEnvelopeApi'] = new PreparedEnvelopeApi($client, $configuration, null);
		}

		return $this->clients['PreparedEnvelopeApi'];
	}

	public function getSsoTokenApi() : SsoTokenApi
	{
		if (!isset($this->clients['SsoTokenApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['SsoTokenApi'] = new SsoTokenApi($client, $configuration, null);
		}

		return $this->clients['SsoTokenApi'];
	}

	public function getSubmitApi() : SubmitApi
	{
		if (!isset($this->clients['SubmitApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['SubmitApi'] = new SubmitApi($client, $configuration, null);
		}

		return $this->clients['SubmitApi'];
	}

	public function getTemplatesApi() : TemplatesApi
	{
		if (!isset($this->clients['TemplatesApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['TemplatesApi'] = new TemplatesApi($client, $configuration, null);
		}

		return $this->clients['TemplatesApi'];
	}

	public function getUsersApi() : UsersApi
	{
		if (!isset($this->clients['UsersApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['UsersApi'] = new UsersApi($client, $configuration, null);
		}

		return $this->clients['UsersApi'];
	}

	private function getConfiguration() : Configuration
	{
		$configuration = Configuration::getDefaultConfiguration();
		$configuration->setAccessToken($this->getAccessToken()->getToken());
		$configuration->setHost('https://' . $this->options['baseApiUrl'] . '/api/documentnow/v' . self::VERSION . '/');
		return $configuration;
	}
}