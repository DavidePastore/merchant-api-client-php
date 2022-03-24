<?php
/**
 * MerchantShipmentLabelCarrierResponse
 *
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
 * The version of the OpenAPI document: 2.10.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * MerchantShipmentLabelCarrierResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantShipmentLabelCarrierResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantShipmentLabelCarrierResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'code' => 'string',
        'restrictions' => 'string',
        'price' => 'float',
        'recommendation' => '\ChannelEngine\Merchant\ApiClient\Model\ChannelCarrierRecommendationApi',
        'collectionMethod' => '\ChannelEngine\Merchant\ApiClient\Model\ChannelCarrierCollectionMethodApi',
        'handoverDateTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'code' => null,
        'restrictions' => null,
        'price' => 'decimal',
        'recommendation' => null,
        'collectionMethod' => null,
        'handoverDateTime' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'Name',
        'code' => 'Code',
        'restrictions' => 'Restrictions',
        'price' => 'Price',
        'recommendation' => 'Recommendation',
        'collectionMethod' => 'CollectionMethod',
        'handoverDateTime' => 'HandoverDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'code' => 'setCode',
        'restrictions' => 'setRestrictions',
        'price' => 'setPrice',
        'recommendation' => 'setRecommendation',
        'collectionMethod' => 'setCollectionMethod',
        'handoverDateTime' => 'setHandoverDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'code' => 'getCode',
        'restrictions' => 'getRestrictions',
        'price' => 'getPrice',
        'recommendation' => 'getRecommendation',
        'collectionMethod' => 'getCollectionMethod',
        'handoverDateTime' => 'getHandoverDateTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['restrictions'] = $data['restrictions'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['recommendation'] = $data['recommendation'] ?? null;
        $this->container['collectionMethod'] = $data['collectionMethod'] ?? null;
        $this->container['handoverDateTime'] = $data['handoverDateTime'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The channel's name for the shipping label carrier
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The channel's code for the shipping label carrier
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return string|null
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param string|null $restrictions Optional. Any restrictions on this carriers, e.g. weight and/or dimensions
     *
     * @return self
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Optional. Price for this shipping label
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets recommendation
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ChannelCarrierRecommendationApi|null
     */
    public function getRecommendation()
    {
        return $this->container['recommendation'];
    }

    /**
     * Sets recommendation
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ChannelCarrierRecommendationApi|null $recommendation recommendation
     *
     * @return self
     */
    public function setRecommendation($recommendation)
    {
        $this->container['recommendation'] = $recommendation;

        return $this;
    }

    /**
     * Gets collectionMethod
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ChannelCarrierCollectionMethodApi|null
     */
    public function getCollectionMethod()
    {
        return $this->container['collectionMethod'];
    }

    /**
     * Sets collectionMethod
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ChannelCarrierCollectionMethodApi|null $collectionMethod collectionMethod
     *
     * @return self
     */
    public function setCollectionMethod($collectionMethod)
    {
        $this->container['collectionMethod'] = $collectionMethod;

        return $this;
    }

    /**
     * Gets handoverDateTime
     *
     * @return \DateTime|null
     */
    public function getHandoverDateTime()
    {
        return $this->container['handoverDateTime'];
    }

    /**
     * Sets handoverDateTime
     *
     * @param \DateTime|null $handoverDateTime Optional. When to handover the package to the carrier  It is in the ISO format including the timezone offset.  E.g. 2020-10-03T18:00:00+02:00  which is 3rd Oct 2020, at 18:00 PM in Amsterdam (Summer Time aka CEST: UTC +2:00 )
     *
     * @return self
     */
    public function setHandoverDateTime($handoverDateTime)
    {
        $this->container['handoverDateTime'] = $handoverDateTime;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


