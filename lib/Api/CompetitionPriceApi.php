<?php
/**
 * CompetitionPriceApi
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
 * CompetitionPriceApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CompetitionPriceApi
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
     * Operation competitionPricesGetBuyBoxPrices
     *
     * Get the BuyBox winner prices
     *
     * @param  int $channelId The id of the channel (optional)
     * @param  string[] $gtinList Search products by submitting a list of GTIN&#39;s. (optional)&lt;br /&gt;Max. 2000. (optional)
     * @param  string[] $skuList Search products by submitting a list of Sku&#39;s. (optional)&lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice|\ChannelEngine\Merchant\ApiClient\Model\ApiResponse
     */
    public function competitionPricesGetBuyBoxPrices($channelId = null, $gtinList = null, $skuList = null, $page = null)
    {
        list($response) = $this->competitionPricesGetBuyBoxPricesWithHttpInfo($channelId, $gtinList, $skuList, $page);
        return $response;
    }

    /**
     * Operation competitionPricesGetBuyBoxPricesWithHttpInfo
     *
     * Get the BuyBox winner prices
     *
     * @param  int $channelId The id of the channel (optional)
     * @param  string[] $gtinList Search products by submitting a list of GTIN&#39;s. (optional)&lt;br /&gt;Max. 2000. (optional)
     * @param  string[] $skuList Search products by submitting a list of Sku&#39;s. (optional)&lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice|\ChannelEngine\Merchant\ApiClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function competitionPricesGetBuyBoxPricesWithHttpInfo($channelId = null, $gtinList = null, $skuList = null, $page = null)
    {
        $request = $this->competitionPricesGetBuyBoxPricesRequest($channelId, $gtinList, $skuList, $page);

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
                    if ('\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\ChannelEngine\Merchant\ApiClient\Model\ApiResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChannelEngine\Merchant\ApiClient\Model\ApiResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice';
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
                        '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChannelEngine\Merchant\ApiClient\Model\ApiResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation competitionPricesGetBuyBoxPricesAsync
     *
     * Get the BuyBox winner prices
     *
     * @param  int $channelId The id of the channel (optional)
     * @param  string[] $gtinList Search products by submitting a list of GTIN&#39;s. (optional)&lt;br /&gt;Max. 2000. (optional)
     * @param  string[] $skuList Search products by submitting a list of Sku&#39;s. (optional)&lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function competitionPricesGetBuyBoxPricesAsync($channelId = null, $gtinList = null, $skuList = null, $page = null)
    {
        return $this->competitionPricesGetBuyBoxPricesAsyncWithHttpInfo($channelId, $gtinList, $skuList, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation competitionPricesGetBuyBoxPricesAsyncWithHttpInfo
     *
     * Get the BuyBox winner prices
     *
     * @param  int $channelId The id of the channel (optional)
     * @param  string[] $gtinList Search products by submitting a list of GTIN&#39;s. (optional)&lt;br /&gt;Max. 2000. (optional)
     * @param  string[] $skuList Search products by submitting a list of Sku&#39;s. (optional)&lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function competitionPricesGetBuyBoxPricesAsyncWithHttpInfo($channelId = null, $gtinList = null, $skuList = null, $page = null)
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice';
        $request = $this->competitionPricesGetBuyBoxPricesRequest($channelId, $gtinList, $skuList, $page);

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
     * Create request for operation 'competitionPricesGetBuyBoxPrices'
     *
     * @param  int $channelId The id of the channel (optional)
     * @param  string[] $gtinList Search products by submitting a list of GTIN&#39;s. (optional)&lt;br /&gt;Max. 2000. (optional)
     * @param  string[] $skuList Search products by submitting a list of Sku&#39;s. (optional)&lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. (optional)
     * @param  int $page The page to filter on. Starts at 1. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function competitionPricesGetBuyBoxPricesRequest($channelId = null, $gtinList = null, $skuList = null, $page = null)
    {

        $resourcePath = '/v2/competitionprices/buyboxprices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($channelId !== null) {
            if('form' === 'form' && is_array($channelId)) {
                foreach($channelId as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['channelId'] = $channelId;
            }
        }
        // query params
        if ($gtinList !== null) {
            if('form' === 'form' && is_array($gtinList)) {
                foreach($gtinList as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['gtinList'] = $gtinList;
            }
        }
        // query params
        if ($skuList !== null) {
            if('form' === 'form' && is_array($skuList)) {
                foreach($skuList as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['skuList'] = $skuList;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
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
