<?php
/**
 * PreparedEnvelopeApi
 * PHP version 5
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AssureSign DocumentNOW API Documentation
 *
 * AssureSign DocumentNOW electronic signature APIs (envelopes and documents) For DocumentNOW user and account management APIs, go to [Account API](https://account.assuresign.net/api/v3.6/account)
 *
 * The version of the OpenAPI document: 3.6
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Nmusco\AssureSign\v3\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Nmusco\AssureSign\v3\ApiException;
use Nmusco\AssureSign\v3\Configuration;
use Nmusco\AssureSign\v3\HeaderSelector;
use Nmusco\AssureSign\v3\ObjectSerializer;

/**
 * PreparedEnvelopeApi Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PreparedEnvelopeApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createPreparedEnvelope
     *
     * Prepare an envelope for additional operations, including manual review and adding documents
     *
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse|\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse|\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse
     */
    public function createPreparedEnvelope($prepared_envelope_request, $x_as_user_context = null)
    {
        list($response) = $this->createPreparedEnvelopeWithHttpInfo($prepared_envelope_request, $x_as_user_context);
        return $response;
    }

    /**
     * Operation createPreparedEnvelopeWithHttpInfo
     *
     * Prepare an envelope for additional operations, including manual review and adding documents
     *
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse|\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse|\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPreparedEnvelopeWithHttpInfo($prepared_envelope_request, $x_as_user_context = null)
    {
        $request = $this->createPreparedEnvelopeRequest($prepared_envelope_request, $x_as_user_context);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createPreparedEnvelopeAsync
     *
     * Prepare an envelope for additional operations, including manual review and adding documents
     *
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPreparedEnvelopeAsync($prepared_envelope_request, $x_as_user_context = null)
    {
        return $this->createPreparedEnvelopeAsyncWithHttpInfo($prepared_envelope_request, $x_as_user_context)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createPreparedEnvelopeAsyncWithHttpInfo
     *
     * Prepare an envelope for additional operations, including manual review and adding documents
     *
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPreparedEnvelopeAsyncWithHttpInfo($prepared_envelope_request, $x_as_user_context = null)
    {
        $returnType = '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse';
        $request = $this->createPreparedEnvelopeRequest($prepared_envelope_request, $x_as_user_context);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createPreparedEnvelope'
     *
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createPreparedEnvelopeRequest($prepared_envelope_request, $x_as_user_context = null)
    {
        // verify the required parameter 'prepared_envelope_request' is set
        if ($prepared_envelope_request === null || (is_array($prepared_envelope_request) && count($prepared_envelope_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $prepared_envelope_request when calling createPreparedEnvelope'
            );
        }

        $resourcePath = '/submit/prepare';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_as_user_context !== null) {
            $headerParams['X-AS-UserContext'] = ObjectSerializer::toHeaderValue($x_as_user_context);
        }


        // body params
        $_tempBody = null;
        if (isset($prepared_envelope_request)) {
            $_tempBody = $prepared_envelope_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        if ($this->config->getAccessToken()) {
            $defaultHeaders['Authorization'] = "Bearer ".$this->config->getAccessToken();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updatePreparedEnvelope
     *
     * Perform additional operations on a previously created prepared envelope
     *
     * @param  string $prepared_envelope_id ID of Prepared envelope (required)
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse|\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse|\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse
     */
    public function updatePreparedEnvelope($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context = null)
    {
        list($response) = $this->updatePreparedEnvelopeWithHttpInfo($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context);
        return $response;
    }

    /**
     * Operation updatePreparedEnvelopeWithHttpInfo
     *
     * Perform additional operations on a previously created prepared envelope
     *
     * @param  string $prepared_envelope_id ID of Prepared envelope (required)
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse|\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse|\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePreparedEnvelopeWithHttpInfo($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context = null)
    {
        $request = $this->updatePreparedEnvelopeRequest($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Nmusco\AssureSign\v3\Model\ErrorBadRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Nmusco\AssureSign\v3\Model\ErrorUnauthorizedRequestResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updatePreparedEnvelopeAsync
     *
     * Perform additional operations on a previously created prepared envelope
     *
     * @param  string $prepared_envelope_id ID of Prepared envelope (required)
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePreparedEnvelopeAsync($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context = null)
    {
        return $this->updatePreparedEnvelopeAsyncWithHttpInfo($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updatePreparedEnvelopeAsyncWithHttpInfo
     *
     * Perform additional operations on a previously created prepared envelope
     *
     * @param  string $prepared_envelope_id ID of Prepared envelope (required)
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePreparedEnvelopeAsyncWithHttpInfo($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context = null)
    {
        $returnType = '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeResponse';
        $request = $this->updatePreparedEnvelopeRequest($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updatePreparedEnvelope'
     *
     * @param  string $prepared_envelope_id ID of Prepared envelope (required)
     * @param  \Nmusco\AssureSign\v3\Model\PreparedEnvelopeRequest $prepared_envelope_request (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updatePreparedEnvelopeRequest($prepared_envelope_id, $prepared_envelope_request, $x_as_user_context = null)
    {
        // verify the required parameter 'prepared_envelope_id' is set
        if ($prepared_envelope_id === null || (is_array($prepared_envelope_id) && count($prepared_envelope_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $prepared_envelope_id when calling updatePreparedEnvelope'
            );
        }
        // verify the required parameter 'prepared_envelope_request' is set
        if ($prepared_envelope_request === null || (is_array($prepared_envelope_request) && count($prepared_envelope_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $prepared_envelope_request when calling updatePreparedEnvelope'
            );
        }

        $resourcePath = '/submit/prepare/{preparedEnvelopeID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_as_user_context !== null) {
            $headerParams['X-AS-UserContext'] = ObjectSerializer::toHeaderValue($x_as_user_context);
        }

        // path params
        if ($prepared_envelope_id !== null) {
            $resourcePath = str_replace(
                '{' . 'preparedEnvelopeID' . '}',
                ObjectSerializer::toPathValue($prepared_envelope_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($prepared_envelope_request)) {
            $_tempBody = $prepared_envelope_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        if ($this->config->getAccessToken()) {
            $defaultHeaders['Authorization'] = "Bearer ".$this->config->getAccessToken();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
