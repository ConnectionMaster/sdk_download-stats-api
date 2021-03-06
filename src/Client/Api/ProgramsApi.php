<?php
/**
 * ProgramsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * download-stats-api
 *
 * To see the project documentation go to https://download-stats-api-v2.docs.softonic.io/
 *
 * OpenAPI spec version: 2.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\DownloadStatsApiSdk\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Softonic\DownloadStatsApiSdk\ApiException;
use Softonic\DownloadStatsApiSdk\Client\Model\ModelInterface;
use Softonic\DownloadStatsApiSdk\Configuration;
use Softonic\DownloadStatsApiSdk\HeaderSelector;
use Softonic\DownloadStatsApiSdk\ObjectSerializer;

/**
 * ProgramsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation findProgram
     *
     * Get the list of the downloads stats ordered by downloads
     *
     * @param  int $days_ago Take into account downloads from last given days (optional)
     * @param  int $min_downloads Take into account programs with at least the given downloads (optional)
     * @param  int $max_downloads Take into account programs with not more than the given downloads (optional)
     * @param  int $page Page (optional, default to 1)
     * @param  int $per_page Number of results per page (optional, default to 10)
     *
     * @throws \Softonic\DownloadStatsApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2
     */
    public function findProgram($days_ago = null, $min_downloads = null, $max_downloads = null, $page = '1', $per_page = '10')
    {
        list($response) = $this->findProgramWithHttpInfo($days_ago, $min_downloads, $max_downloads, $page, $per_page);
        return $response;
    }

    /**
     * Operation findProgramWithHttpInfo
     *
     * Get the list of the downloads stats ordered by downloads
     *
     * @param  int $days_ago Take into account downloads from last given days (optional)
     * @param  int $min_downloads Take into account programs with at least the given downloads (optional)
     * @param  int $max_downloads Take into account programs with not more than the given downloads (optional)
     * @param  int $page Page (optional, default to 1)
     * @param  int $per_page Number of results per page (optional, default to 10)
     *
     * @throws \Softonic\DownloadStatsApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2, HTTP status code, HTTP response headers (array of strings)
     */
    public function findProgramWithHttpInfo($days_ago = null, $min_downloads = null, $max_downloads = null, $page = '1', $per_page = '10')
    {
        $returnType = '\Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2';
        $request = $this->findProgramRequest($days_ago, $min_downloads, $max_downloads, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findProgramAsync
     *
     * Get the list of the downloads stats ordered by downloads
     *
     * @param  int $days_ago Take into account downloads from last given days (optional)
     * @param  int $min_downloads Take into account programs with at least the given downloads (optional)
     * @param  int $max_downloads Take into account programs with not more than the given downloads (optional)
     * @param  int $page Page (optional, default to 1)
     * @param  int $per_page Number of results per page (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findProgramAsync($days_ago = null, $min_downloads = null, $max_downloads = null, $page = '1', $per_page = '10')
    {
        return $this->findProgramAsyncWithHttpInfo($days_ago, $min_downloads, $max_downloads, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findProgramAsyncWithHttpInfo
     *
     * Get the list of the downloads stats ordered by downloads
     *
     * @param  int $days_ago Take into account downloads from last given days (optional)
     * @param  int $min_downloads Take into account programs with at least the given downloads (optional)
     * @param  int $max_downloads Take into account programs with not more than the given downloads (optional)
     * @param  int $page Page (optional, default to 1)
     * @param  int $per_page Number of results per page (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findProgramAsyncWithHttpInfo($days_ago = null, $min_downloads = null, $max_downloads = null, $page = '1', $per_page = '10')
    {
        $returnType = '\Softonic\DownloadStatsApiSdk\Client\Model\ItemsPaginationModel2';
        $request = $this->findProgramRequest($days_ago, $min_downloads, $max_downloads, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'findProgram'
     *
     * @param  int $days_ago Take into account downloads from last given days (optional)
     * @param  int $min_downloads Take into account programs with at least the given downloads (optional)
     * @param  int $max_downloads Take into account programs with not more than the given downloads (optional)
     * @param  int $page Page (optional, default to 1)
     * @param  int $per_page Number of results per page (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function findProgramRequest($days_ago = null, $min_downloads = null, $max_downloads = null, $page = '1', $per_page = '10')
    {
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProgramsApi.findProgram, must be bigger than or equal to 1.');
        }

        if ($per_page !== null && $per_page > 100) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling ProgramsApi.findProgram, must be smaller than or equal to 100.');
        }
        if ($per_page !== null && $per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling ProgramsApi.findProgram, must be bigger than or equal to 1.');
        }


        $resourcePath = '/programs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($days_ago !== null) {
            $queryParams['daysAgo'] = ObjectSerializer::toQueryValue($days_ago);
        }
        // query params
        if ($min_downloads !== null) {
            $queryParams['minDownloads'] = ObjectSerializer::toQueryValue($min_downloads);
        }
        // query params
        if ($max_downloads !== null) {
            $queryParams['maxDownloads'] = ObjectSerializer::toQueryValue($max_downloads);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['perPage'] = ObjectSerializer::toQueryValue($per_page);
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
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProgramPlatform
     *
     * Get the list of the downloads stats for a given program platform
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \Softonic\DownloadStatsApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform
     */
    public function getProgramPlatform($id_program, $id_platform, $days_ago = null)
    {
        list($response) = $this->getProgramPlatformWithHttpInfo($id_program, $id_platform, $days_ago);
        return $response;
    }

    /**
     * Operation getProgramPlatformWithHttpInfo
     *
     * Get the list of the downloads stats for a given program platform
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \Softonic\DownloadStatsApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProgramPlatformWithHttpInfo($id_program, $id_platform, $days_ago = null)
    {
        $returnType = '\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform';
        $request = $this->getProgramPlatformRequest($id_program, $id_platform, $days_ago);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProgramPlatformAsync
     *
     * Get the list of the downloads stats for a given program platform
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramPlatformAsync($id_program, $id_platform, $days_ago = null)
    {
        return $this->getProgramPlatformAsyncWithHttpInfo($id_program, $id_platform, $days_ago)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProgramPlatformAsyncWithHttpInfo
     *
     * Get the list of the downloads stats for a given program platform
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramPlatformAsyncWithHttpInfo($id_program, $id_platform, $days_ago = null)
    {
        $returnType = '\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatform';
        $request = $this->getProgramPlatformRequest($id_program, $id_platform, $days_ago);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProgramPlatform'
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProgramPlatformRequest($id_program, $id_platform, $days_ago = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_program when calling getProgramPlatform'
            );
        }
        // verify the required parameter 'id_platform' is set
        if ($id_platform === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_platform when calling getProgramPlatform'
            );
        }

        $resourcePath = '/programs/{id_program}/platforms/{id_platform}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($days_ago !== null) {
            $queryParams['daysAgo'] = ObjectSerializer::toQueryValue($days_ago);
        }

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                '{' . 'id_program' . '}',
                ObjectSerializer::toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_platform !== null) {
            $resourcePath = str_replace(
                '{' . 'id_platform' . '}',
                ObjectSerializer::toPathValue($id_platform),
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
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProgramPlatformLanguage
     *
     * Get the list of the downloads stats for a given program platform language
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  string $id_language Language identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \Softonic\DownloadStatsApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLanguage
     */
    public function getProgramPlatformLanguage($id_program, $id_platform, $id_language, $days_ago = null)
    {
        list($response) = $this->getProgramPlatformLanguageWithHttpInfo($id_program, $id_platform, $id_language, $days_ago);
        return $response;
    }

    /**
     * Operation getProgramPlatformLanguageWithHttpInfo
     *
     * Get the list of the downloads stats for a given program platform language
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  string $id_language Language identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \Softonic\DownloadStatsApiSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLanguage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProgramPlatformLanguageWithHttpInfo($id_program, $id_platform, $id_language, $days_ago = null)
    {
        $returnType = '\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLanguage';
        $request = $this->getProgramPlatformLanguageRequest($id_program, $id_platform, $id_language, $days_ago);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLanguage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProgramPlatformLanguageAsync
     *
     * Get the list of the downloads stats for a given program platform language
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  string $id_language Language identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramPlatformLanguageAsync($id_program, $id_platform, $id_language, $days_ago = null)
    {
        return $this->getProgramPlatformLanguageAsyncWithHttpInfo($id_program, $id_platform, $id_language, $days_ago)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProgramPlatformLanguageAsyncWithHttpInfo
     *
     * Get the list of the downloads stats for a given program platform language
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  string $id_language Language identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProgramPlatformLanguageAsyncWithHttpInfo($id_program, $id_platform, $id_language, $days_ago = null)
    {
        $returnType = '\Softonic\DownloadStatsApiSdk\Client\Model\ProgramPlatformLanguage';
        $request = $this->getProgramPlatformLanguageRequest($id_program, $id_platform, $id_language, $days_ago);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProgramPlatformLanguage'
     *
     * @param  string $id_program Program identifier (required)
     * @param  string $id_platform Platform identifier (required)
     * @param  string $id_language Language identifier (required)
     * @param  float $days_ago Take into account downloads from last given days (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProgramPlatformLanguageRequest($id_program, $id_platform, $id_language, $days_ago = null)
    {
        // verify the required parameter 'id_program' is set
        if ($id_program === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_program when calling getProgramPlatformLanguage'
            );
        }
        // verify the required parameter 'id_platform' is set
        if ($id_platform === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_platform when calling getProgramPlatformLanguage'
            );
        }
        // verify the required parameter 'id_language' is set
        if ($id_language === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_language when calling getProgramPlatformLanguage'
            );
        }

        $resourcePath = '/programs/{id_program}/platforms/{id_platform}/languages/{id_language}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($days_ago !== null) {
            $queryParams['daysAgo'] = ObjectSerializer::toQueryValue($days_ago);
        }

        // path params
        if ($id_program !== null) {
            $resourcePath = str_replace(
                '{' . 'id_program' . '}',
                ObjectSerializer::toPathValue($id_program),
                $resourcePath
            );
        }
        // path params
        if ($id_platform !== null) {
            $resourcePath = str_replace(
                '{' . 'id_platform' . '}',
                ObjectSerializer::toPathValue($id_platform),
                $resourcePath
            );
        }
        // path params
        if ($id_language !== null) {
            $resourcePath = str_replace(
                '{' . 'id_language' . '}',
                ObjectSerializer::toPathValue($id_language),
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
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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
