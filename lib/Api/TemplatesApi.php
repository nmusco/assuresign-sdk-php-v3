<?php
/**
 * TemplatesApi
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
 * TemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TemplatesApi
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
     * Operation getAllTemplates
     *
     * Retrieve a list of all of the Simple Setup templates available to the current user.
     *
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     * @param  bool $include_archived Include archived templates with the GetAll operation (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Nmusco\AssureSign\v3\Model\TemplateListResponse
     */
    public function getAllTemplates($x_as_user_context = null, $include_archived = null)
    {
        list($response) = $this->getAllTemplatesWithHttpInfo($x_as_user_context, $include_archived);
        return $response;
    }

    /**
     * Operation getAllTemplatesWithHttpInfo
     *
     * Retrieve a list of all of the Simple Setup templates available to the current user.
     *
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     * @param  bool $include_archived Include archived templates with the GetAll operation (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Nmusco\AssureSign\v3\Model\TemplateListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllTemplatesWithHttpInfo($x_as_user_context = null, $include_archived = null)
    {
        $request = $this->getAllTemplatesRequest($x_as_user_context, $include_archived);

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
                    if ('\Nmusco\AssureSign\v3\Model\TemplateListResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\TemplateListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Nmusco\AssureSign\v3\Model\TemplateListResponse';
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
                        '\Nmusco\AssureSign\v3\Model\TemplateListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllTemplatesAsync
     *
     * Retrieve a list of all of the Simple Setup templates available to the current user.
     *
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     * @param  bool $include_archived Include archived templates with the GetAll operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllTemplatesAsync($x_as_user_context = null, $include_archived = null)
    {
        return $this->getAllTemplatesAsyncWithHttpInfo($x_as_user_context, $include_archived)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllTemplatesAsyncWithHttpInfo
     *
     * Retrieve a list of all of the Simple Setup templates available to the current user.
     *
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     * @param  bool $include_archived Include archived templates with the GetAll operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllTemplatesAsyncWithHttpInfo($x_as_user_context = null, $include_archived = null)
    {
        $returnType = '\Nmusco\AssureSign\v3\Model\TemplateListResponse';
        $request = $this->getAllTemplatesRequest($x_as_user_context, $include_archived);

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
     * Create request for operation 'getAllTemplates'
     *
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     * @param  bool $include_archived Include archived templates with the GetAll operation (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAllTemplatesRequest($x_as_user_context = null, $include_archived = null)
    {

        $resourcePath = '/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_archived !== null) {
            if('form' === 'form' && is_array($include_archived)) {
                foreach($include_archived as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['includeArchived'] = $include_archived;
            }
        }

        // header params
        if ($x_as_user_context !== null) {
            $headerParams['X-AS-UserContext'] = ObjectSerializer::toHeaderValue($x_as_user_context);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTemplate
     *
     * Retrieve all of the data for the specified Simple Setup template.
     *
     * @param  string $template_id Specifies the unique identifier of the template. (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Nmusco\AssureSign\v3\Model\GetTemplateResponse
     */
    public function getTemplate($template_id, $x_as_user_context = null)
    {
        list($response) = $this->getTemplateWithHttpInfo($template_id, $x_as_user_context);
        return $response;
    }

    /**
     * Operation getTemplateWithHttpInfo
     *
     * Retrieve all of the data for the specified Simple Setup template.
     *
     * @param  string $template_id Specifies the unique identifier of the template. (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \Nmusco\AssureSign\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Nmusco\AssureSign\v3\Model\GetTemplateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplateWithHttpInfo($template_id, $x_as_user_context = null)
    {
        $request = $this->getTemplateRequest($template_id, $x_as_user_context);

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
                    if ('\Nmusco\AssureSign\v3\Model\GetTemplateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nmusco\AssureSign\v3\Model\GetTemplateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Nmusco\AssureSign\v3\Model\GetTemplateResponse';
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
                        '\Nmusco\AssureSign\v3\Model\GetTemplateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTemplateAsync
     *
     * Retrieve all of the data for the specified Simple Setup template.
     *
     * @param  string $template_id Specifies the unique identifier of the template. (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTemplateAsync($template_id, $x_as_user_context = null)
    {
        return $this->getTemplateAsyncWithHttpInfo($template_id, $x_as_user_context)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTemplateAsyncWithHttpInfo
     *
     * Retrieve all of the data for the specified Simple Setup template.
     *
     * @param  string $template_id Specifies the unique identifier of the template. (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTemplateAsyncWithHttpInfo($template_id, $x_as_user_context = null)
    {
        $returnType = '\Nmusco\AssureSign\v3\Model\GetTemplateResponse';
        $request = $this->getTemplateRequest($template_id, $x_as_user_context);

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
     * Create request for operation 'getTemplate'
     *
     * @param  string $template_id Specifies the unique identifier of the template. (required)
     * @param  string $x_as_user_context {username}:{DocumentNOW Account Context Identifier} (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTemplateRequest($template_id, $x_as_user_context = null)
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_id when calling getTemplate'
            );
        }

        $resourcePath = '/templates/{templateID}';
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
        if ($template_id !== null) {
            $resourcePath = str_replace(
                '{' . 'templateID' . '}',
                ObjectSerializer::toPathValue($template_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            'GET',
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
