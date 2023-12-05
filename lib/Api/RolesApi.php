<?php
/**
 * RolesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Iambackoffice
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Iam Backoffice Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Iambackoffice\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GeminiCommerce\Iambackoffice\ApiException;
use GeminiCommerce\Iambackoffice\Configuration;
use GeminiCommerce\Iambackoffice\HeaderSelector;
use GeminiCommerce\Iambackoffice\ObjectSerializer;

/**
 * RolesApi Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Iambackoffice
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RolesApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'assignRoles' => [
            'application/json',
        ],
        'unassignRoles' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation assignRoles
     *
     * Assign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignRoles'] to see the possible values for this operation
     *
     * @throws \GeminiCommerce\Iambackoffice\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus
     */
    public function assignRoles($body, string $contentType = self::contentTypes['assignRoles'][0])
    {
        list($response) = $this->assignRolesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation assignRolesWithHttpInfo
     *
     * Assign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignRoles'] to see the possible values for this operation
     *
     * @throws \GeminiCommerce\Iambackoffice\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function assignRolesWithHttpInfo($body, string $contentType = self::contentTypes['assignRoles'][0])
    {
        $request = $this->assignRolesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GeminiCommerce\Iambackoffice\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GeminiCommerce\Iambackoffice\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GeminiCommerce\Iambackoffice\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation assignRolesAsync
     *
     * Assign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignRolesAsync($body, string $contentType = self::contentTypes['assignRoles'][0])
    {
        return $this->assignRolesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation assignRolesAsyncWithHttpInfo
     *
     * Assign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assignRolesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['assignRoles'][0])
    {
        $returnType = '\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse';
        $request = $this->assignRolesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'assignRoles'
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['assignRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function assignRolesRequest($body, string $contentType = self::contentTypes['assignRoles'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling assignRoles'
            );
        }


        $resourcePath = '/iambackoffice.IamBackoffice/AssignRoles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation unassignRoles
     *
     * Unassign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unassignRoles'] to see the possible values for this operation
     *
     * @throws \GeminiCommerce\Iambackoffice\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus
     */
    public function unassignRoles($body, string $contentType = self::contentTypes['unassignRoles'][0])
    {
        list($response) = $this->unassignRolesWithHttpInfo($body, $contentType);
        return $response;
    }

    /**
     * Operation unassignRolesWithHttpInfo
     *
     * Unassign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unassignRoles'] to see the possible values for this operation
     *
     * @throws \GeminiCommerce\Iambackoffice\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus|\GeminiCommerce\Iambackoffice\Model\RpcStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function unassignRolesWithHttpInfo($body, string $contentType = self::contentTypes['unassignRoles'][0])
    {
        $request = $this->unassignRolesRequest($body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\GeminiCommerce\Iambackoffice\Model\RpcStatus' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\GeminiCommerce\Iambackoffice\Model\RpcStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GeminiCommerce\Iambackoffice\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GeminiCommerce\Iambackoffice\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GeminiCommerce\Iambackoffice\Model\RpcStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation unassignRolesAsync
     *
     * Unassign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unassignRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unassignRolesAsync($body, string $contentType = self::contentTypes['unassignRoles'][0])
    {
        return $this->unassignRolesAsyncWithHttpInfo($body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation unassignRolesAsyncWithHttpInfo
     *
     * Unassign Roles
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unassignRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unassignRolesAsyncWithHttpInfo($body, string $contentType = self::contentTypes['unassignRoles'][0])
    {
        $returnType = '\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse';
        $request = $this->unassignRolesRequest($body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'unassignRoles'
     *
     * @param  \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unassignRoles'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function unassignRolesRequest($body, string $contentType = self::contentTypes['unassignRoles'][0])
    {

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling unassignRoles'
            );
        }


        $resourcePath = '/iambackoffice.IamBackoffice/UnassignRoles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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