<?php
/**
 * OfferApi
 * PHP version 7.2
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.9.11
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChannelEngine\Merchant\ApiClient\ApiException;
use ChannelEngine\Merchant\ApiClient\Configuration;
use ChannelEngine\Merchant\ApiClient\HeaderSelector;
use ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * OfferApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferApi
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
     * Operation offerGetStock
     *
     * Get stock for products.
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s. (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s). (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse
     */
    public function offerGetStock($skus, $stockLocationIds)
    {
        list($response) = $this->offerGetStockWithHttpInfo($skus, $stockLocationIds);
        return $response;
    }

    /**
     * Operation offerGetStockWithHttpInfo
     *
     * Get stock for products.
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s. (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s). (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function offerGetStockWithHttpInfo($skus, $stockLocationIds)
    {
        $request = $this->offerGetStockRequest($skus, $stockLocationIds);

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
                    if ('\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation offerGetStockAsync
     *
     * Get stock for products.
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s. (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerGetStockAsync($skus, $stockLocationIds)
    {
        return $this->offerGetStockAsyncWithHttpInfo($skus, $stockLocationIds)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation offerGetStockAsyncWithHttpInfo
     *
     * Get stock for products.
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s. (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerGetStockAsyncWithHttpInfo($skus, $stockLocationIds)
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse';
        $request = $this->offerGetStockRequest($skus, $stockLocationIds);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'offerGetStock'
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s. (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function offerGetStockRequest($skus, $stockLocationIds)
    {
        // verify the required parameter 'skus' is set
        if ($skus === null || (is_array($skus) && count($skus) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $skus when calling offerGetStock'
            );
        }
        // verify the required parameter 'stockLocationIds' is set
        if ($stockLocationIds === null || (is_array($stockLocationIds) && count($stockLocationIds) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stockLocationIds when calling offerGetStock'
            );
        }

        $resourcePath = '/v2/offer/stock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($skus !== null) {
            if('form' === 'form' && is_array($skus)) {
                foreach($skus as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['skus'] = $skus;
            }
        }
        // query params
        if ($stockLocationIds !== null) {
            if('form' === 'form' && is_array($stockLocationIds)) {
                foreach($stockLocationIds as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['stockLocationIds'] = $stockLocationIds;
            }
        }




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
        if (count($formParams) > 0) {
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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
     * Operation offerStockPriceUpdate
     *
     * Update stock and/or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $merchantStockPriceUpdateRequest References to the products that should be updated, and the new values&lt;br /&gt;for the stock or price fields. It is possible to supply only one of the two fields&lt;br /&gt;or both. (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString
     */
    public function offerStockPriceUpdate($merchantStockPriceUpdateRequest)
    {
        list($response) = $this->offerStockPriceUpdateWithHttpInfo($merchantStockPriceUpdateRequest);
        return $response;
    }

    /**
     * Operation offerStockPriceUpdateWithHttpInfo
     *
     * Update stock and/or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $merchantStockPriceUpdateRequest References to the products that should be updated, and the new values&lt;br /&gt;for the stock or price fields. It is possible to supply only one of the two fields&lt;br /&gt;or both. (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString, HTTP status code, HTTP response headers (array of strings)
     */
    public function offerStockPriceUpdateWithHttpInfo($merchantStockPriceUpdateRequest)
    {
        $request = $this->offerStockPriceUpdateRequest($merchantStockPriceUpdateRequest);

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
                    if ('\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation offerStockPriceUpdateAsync
     *
     * Update stock and/or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $merchantStockPriceUpdateRequest References to the products that should be updated, and the new values&lt;br /&gt;for the stock or price fields. It is possible to supply only one of the two fields&lt;br /&gt;or both. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerStockPriceUpdateAsync($merchantStockPriceUpdateRequest)
    {
        return $this->offerStockPriceUpdateAsyncWithHttpInfo($merchantStockPriceUpdateRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation offerStockPriceUpdateAsyncWithHttpInfo
     *
     * Update stock and/or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $merchantStockPriceUpdateRequest References to the products that should be updated, and the new values&lt;br /&gt;for the stock or price fields. It is possible to supply only one of the two fields&lt;br /&gt;or both. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerStockPriceUpdateAsyncWithHttpInfo($merchantStockPriceUpdateRequest)
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString';
        $request = $this->offerStockPriceUpdateRequest($merchantStockPriceUpdateRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'offerStockPriceUpdate'
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $merchantStockPriceUpdateRequest References to the products that should be updated, and the new values&lt;br /&gt;for the stock or price fields. It is possible to supply only one of the two fields&lt;br /&gt;or both. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function offerStockPriceUpdateRequest($merchantStockPriceUpdateRequest)
    {
        // verify the required parameter 'merchantStockPriceUpdateRequest' is set
        if ($merchantStockPriceUpdateRequest === null || (is_array($merchantStockPriceUpdateRequest) && count($merchantStockPriceUpdateRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchantStockPriceUpdateRequest when calling offerStockPriceUpdate'
            );
        }

        $resourcePath = '/v2/offer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json-patch+json', 'application/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($merchantStockPriceUpdateRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($merchantStockPriceUpdateRequest));
            } else {
                $httpBody = $merchantStockPriceUpdateRequest;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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
