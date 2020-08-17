<?php

declare(strict_types=1);

namespace Nmusco\AssureSign\v3\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use Psr\Http\Message\ResponseInterface;
use UnexpectedValueException;

class AssureSignAuthProvider extends AbstractProvider
{
    use BearerAuthorizationTrait;

    /**
     * @var string
     */
    protected $clientContext;

    /**
     * @var int
     */
    protected $sessionLengthInMinutes;

    const BASE_PATH = '/api/v3.6';
    const PATH_TOKEN = self::BASE_PATH . '/authentication/apiUser';
    const PATH_ME = self::BASE_PATH . '/users/{username}/environments';
    const DEFAULT_LOGIN_BASE_URL = 'account.assuresign.net';

    /**
     *
     * @var TokenStorageInterface
     */
    protected $baseUrl;

    /**
     * Constructs an OAuth 2.0 service provider.
     *
     * @param array $options An array of options to set on this provider.
     *     Options include `clientId`, `clientSecret`, `redirectUri`, and `state`.
     *     Individual providers may introduce more options, as needed.
     * @param array $collaborators An array of collaborators that may be used to
     *     override this provider's default behavior. Collaborators include
     *     `grantFactory`, `requestFactory`, and `httpClient`.
     *     Individual providers may introduce more collaborators, as needed.
     */
    public function __construct(array $options = [], array $collaborators = [])
    {
        $collaborators['requestFactory'] = new AssureSignAuthRequestFactory();
        parent::__construct($options, $collaborators);
        
        if (isset($options['clientContext'])) {
            $this->clientContext = $options['clientContext'];
        } else {
            $this->clientContext = null;
        }

        if (isset($options['sessionLengthInMinutes'])) {
            $this->sessionLengthInMinutes = $options['sessionLengthInMinutes'];
        } else {
            $this->sessionLengthInMinutes = 60;
        }
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getBaseAccessTokenUrl()
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        if(isset($params['baseUrl']))
            $this->baseUrl = $params['baseUrl'];
        else
            $this->baseUrl = self::DEFAULT_LOGIN_BASE_URL;
        
        return 'https://' . $this->baseUrl . self::PATH_TOKEN;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getBaseAuthorizationUrl()
     */
    public function getBaseAuthorizationUrl()
    {      
        return 'https://' . $this->baseUrl . self::PATH_TOKEN;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getDefaultScopes()
     */
    protected function getDefaultScopes()
    {
        return [];
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::checkResponse()
     */
    protected function checkResponse(ResponseInterface $response, $data)
    {
        if (isset($data['error'])) {
            $message = $data['error_description'] ?? $data['error'];
            throw new IdentityProviderException($message, $response->getStatusCode(), $response);           
        }
    }

    /**
     * 
     * {@inheritDoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getResourceOwnerDetailsUrl()
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return 'https://' . self::DEFAULT_LOGIN_BASE_URL . self::PATH_ME;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::createResourceOwner()
     */
    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return null;
    }

    /**
     * Returns a prepared request for requesting an access token.
     *
     * @param array $params Query string parameters
     * @return \Psr\Http\Message\RequestInterface
     */
    protected function getAccessTokenRequest(array $params)
    {
        $method  = $this->getAccessTokenMethod();
        $url     = $this->getAccessTokenUrl($params);
        $options = $this->optionProvider->getAccessTokenOptions($this->getAccessTokenMethod(), $params);

        $options = 	[
            \GuzzleHttp\RequestOptions::HEADERS => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            \GuzzleHttp\RequestOptions::JSON => [
                'request' => $params,
            ]
        ];

        return $this->getRequest($method, $url, $options);
    }

    /**
     * Requests an access token using a specified grant and option set.
     *
     * @param  mixed $grant
     * @param  array $options
     * @throws IdentityProviderException
     * @return AccessTokenInterface
     */
    public function getAccessToken($grant, array $options = [])
    {
        $grant = $this->verifyGrant($grant);

        // "request": {
        //     "apiUsername": "NewAPIUser",
        //     "key": "vY+ak1310/yTfjN8qhoxEkjN1bX1Ev99",
        //     "contextUsername": "bob@mycompany.com",
        //     "sessionLengthInMinutes": 60
        // }

        $params = [
            'client_id'     => $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri'  => $this->redirectUri,

            'apiUsername'     => $this->clientId,
            'key' => $this->clientSecret,
            'contextUsername'  => $this->clientContext,
            'sessionLengthInMinutes' => $this->sessionLengthInMinutes,
        ];

        $expires = time() + (intval($params['sessionLengthInMinutes']) * 60);
        $params   = $grant->prepareRequestParameters($params, $options);
        $request  = $this->getAccessTokenRequest($params);
        $response = $this->getParsedResponse($request);
        if (false === is_array($response)) {
            throw new UnexpectedValueException(
                'Invalid response received from Authorization Server. Expected JSON.'
            );
        }
        $prepared = $this->prepareAccessTokenResponse($response);
        $prepared = [
            'access_token' => $response['token'],
            'expires' => $expires,
            'client_context' => $this->clientContext
        ];
        $token    = $this->createAccessToken($prepared, $grant);

        return $token;
    }
}