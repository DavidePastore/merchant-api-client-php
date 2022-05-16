<?php
/**
 * AdvanceSettingsResponse
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 2.11.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
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
 * AdvanceSettingsResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdvanceSettingsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdvanceSettingsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'manageStock' => 'bool',
        'disableAddressValidation' => 'bool',
        'skipHouseNumberValidation' => 'bool',
        'skipHouseNumberValidationForCountryCodes' => 'string[]',
        'setOrdersToClosedOnImport' => 'bool',
        'disableStockReservation' => 'bool',
        'disableAutoOrderCancellation' => 'bool',
        'automaticallySetPhoneNumberIfEmpty' => 'string',
        'defaultVatRate' => 'float',
        'orderTooLongOnNewHoursOffset' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'manageStock' => null,
        'disableAddressValidation' => null,
        'skipHouseNumberValidation' => null,
        'skipHouseNumberValidationForCountryCodes' => null,
        'setOrdersToClosedOnImport' => null,
        'disableStockReservation' => null,
        'disableAutoOrderCancellation' => null,
        'automaticallySetPhoneNumberIfEmpty' => null,
        'defaultVatRate' => 'decimal',
        'orderTooLongOnNewHoursOffset' => 'int32'
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
        'manageStock' => 'ManageStock',
        'disableAddressValidation' => 'DisableAddressValidation',
        'skipHouseNumberValidation' => 'SkipHouseNumberValidation',
        'skipHouseNumberValidationForCountryCodes' => 'SkipHouseNumberValidationForCountryCodes',
        'setOrdersToClosedOnImport' => 'SetOrdersToClosedOnImport',
        'disableStockReservation' => 'DisableStockReservation',
        'disableAutoOrderCancellation' => 'DisableAutoOrderCancellation',
        'automaticallySetPhoneNumberIfEmpty' => 'AutomaticallySetPhoneNumberIfEmpty',
        'defaultVatRate' => 'DefaultVatRate',
        'orderTooLongOnNewHoursOffset' => 'OrderTooLongOnNewHoursOffset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'manageStock' => 'setManageStock',
        'disableAddressValidation' => 'setDisableAddressValidation',
        'skipHouseNumberValidation' => 'setSkipHouseNumberValidation',
        'skipHouseNumberValidationForCountryCodes' => 'setSkipHouseNumberValidationForCountryCodes',
        'setOrdersToClosedOnImport' => 'setSetOrdersToClosedOnImport',
        'disableStockReservation' => 'setDisableStockReservation',
        'disableAutoOrderCancellation' => 'setDisableAutoOrderCancellation',
        'automaticallySetPhoneNumberIfEmpty' => 'setAutomaticallySetPhoneNumberIfEmpty',
        'defaultVatRate' => 'setDefaultVatRate',
        'orderTooLongOnNewHoursOffset' => 'setOrderTooLongOnNewHoursOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'manageStock' => 'getManageStock',
        'disableAddressValidation' => 'getDisableAddressValidation',
        'skipHouseNumberValidation' => 'getSkipHouseNumberValidation',
        'skipHouseNumberValidationForCountryCodes' => 'getSkipHouseNumberValidationForCountryCodes',
        'setOrdersToClosedOnImport' => 'getSetOrdersToClosedOnImport',
        'disableStockReservation' => 'getDisableStockReservation',
        'disableAutoOrderCancellation' => 'getDisableAutoOrderCancellation',
        'automaticallySetPhoneNumberIfEmpty' => 'getAutomaticallySetPhoneNumberIfEmpty',
        'defaultVatRate' => 'getDefaultVatRate',
        'orderTooLongOnNewHoursOffset' => 'getOrderTooLongOnNewHoursOffset'
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
        $this->container['manageStock'] = $data['manageStock'] ?? null;
        $this->container['disableAddressValidation'] = $data['disableAddressValidation'] ?? null;
        $this->container['skipHouseNumberValidation'] = $data['skipHouseNumberValidation'] ?? null;
        $this->container['skipHouseNumberValidationForCountryCodes'] = $data['skipHouseNumberValidationForCountryCodes'] ?? null;
        $this->container['setOrdersToClosedOnImport'] = $data['setOrdersToClosedOnImport'] ?? null;
        $this->container['disableStockReservation'] = $data['disableStockReservation'] ?? null;
        $this->container['disableAutoOrderCancellation'] = $data['disableAutoOrderCancellation'] ?? null;
        $this->container['automaticallySetPhoneNumberIfEmpty'] = $data['automaticallySetPhoneNumberIfEmpty'] ?? null;
        $this->container['defaultVatRate'] = $data['defaultVatRate'] ?? null;
        $this->container['orderTooLongOnNewHoursOffset'] = $data['orderTooLongOnNewHoursOffset'] ?? null;
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
     * Gets manageStock
     *
     * @return bool|null
     */
    public function getManageStock()
    {
        return $this->container['manageStock'];
    }

    /**
     * Sets manageStock
     *
     * @param bool|null $manageStock manageStock
     *
     * @return self
     */
    public function setManageStock($manageStock)
    {
        $this->container['manageStock'] = $manageStock;

        return $this;
    }

    /**
     * Gets disableAddressValidation
     *
     * @return bool|null
     */
    public function getDisableAddressValidation()
    {
        return $this->container['disableAddressValidation'];
    }

    /**
     * Sets disableAddressValidation
     *
     * @param bool|null $disableAddressValidation disableAddressValidation
     *
     * @return self
     */
    public function setDisableAddressValidation($disableAddressValidation)
    {
        $this->container['disableAddressValidation'] = $disableAddressValidation;

        return $this;
    }

    /**
     * Gets skipHouseNumberValidation
     *
     * @return bool|null
     */
    public function getSkipHouseNumberValidation()
    {
        return $this->container['skipHouseNumberValidation'];
    }

    /**
     * Sets skipHouseNumberValidation
     *
     * @param bool|null $skipHouseNumberValidation skipHouseNumberValidation
     *
     * @return self
     */
    public function setSkipHouseNumberValidation($skipHouseNumberValidation)
    {
        $this->container['skipHouseNumberValidation'] = $skipHouseNumberValidation;

        return $this;
    }

    /**
     * Gets skipHouseNumberValidationForCountryCodes
     *
     * @return string[]|null
     */
    public function getSkipHouseNumberValidationForCountryCodes()
    {
        return $this->container['skipHouseNumberValidationForCountryCodes'];
    }

    /**
     * Sets skipHouseNumberValidationForCountryCodes
     *
     * @param string[]|null $skipHouseNumberValidationForCountryCodes skipHouseNumberValidationForCountryCodes
     *
     * @return self
     */
    public function setSkipHouseNumberValidationForCountryCodes($skipHouseNumberValidationForCountryCodes)
    {
        $this->container['skipHouseNumberValidationForCountryCodes'] = $skipHouseNumberValidationForCountryCodes;

        return $this;
    }

    /**
     * Gets setOrdersToClosedOnImport
     *
     * @return bool|null
     */
    public function getSetOrdersToClosedOnImport()
    {
        return $this->container['setOrdersToClosedOnImport'];
    }

    /**
     * Sets setOrdersToClosedOnImport
     *
     * @param bool|null $setOrdersToClosedOnImport setOrdersToClosedOnImport
     *
     * @return self
     */
    public function setSetOrdersToClosedOnImport($setOrdersToClosedOnImport)
    {
        $this->container['setOrdersToClosedOnImport'] = $setOrdersToClosedOnImport;

        return $this;
    }

    /**
     * Gets disableStockReservation
     *
     * @return bool|null
     */
    public function getDisableStockReservation()
    {
        return $this->container['disableStockReservation'];
    }

    /**
     * Sets disableStockReservation
     *
     * @param bool|null $disableStockReservation disableStockReservation
     *
     * @return self
     */
    public function setDisableStockReservation($disableStockReservation)
    {
        $this->container['disableStockReservation'] = $disableStockReservation;

        return $this;
    }

    /**
     * Gets disableAutoOrderCancellation
     *
     * @return bool|null
     */
    public function getDisableAutoOrderCancellation()
    {
        return $this->container['disableAutoOrderCancellation'];
    }

    /**
     * Sets disableAutoOrderCancellation
     *
     * @param bool|null $disableAutoOrderCancellation disableAutoOrderCancellation
     *
     * @return self
     */
    public function setDisableAutoOrderCancellation($disableAutoOrderCancellation)
    {
        $this->container['disableAutoOrderCancellation'] = $disableAutoOrderCancellation;

        return $this;
    }

    /**
     * Gets automaticallySetPhoneNumberIfEmpty
     *
     * @return string|null
     */
    public function getAutomaticallySetPhoneNumberIfEmpty()
    {
        return $this->container['automaticallySetPhoneNumberIfEmpty'];
    }

    /**
     * Sets automaticallySetPhoneNumberIfEmpty
     *
     * @param string|null $automaticallySetPhoneNumberIfEmpty automaticallySetPhoneNumberIfEmpty
     *
     * @return self
     */
    public function setAutomaticallySetPhoneNumberIfEmpty($automaticallySetPhoneNumberIfEmpty)
    {
        $this->container['automaticallySetPhoneNumberIfEmpty'] = $automaticallySetPhoneNumberIfEmpty;

        return $this;
    }

    /**
     * Gets defaultVatRate
     *
     * @return float|null
     */
    public function getDefaultVatRate()
    {
        return $this->container['defaultVatRate'];
    }

    /**
     * Sets defaultVatRate
     *
     * @param float|null $defaultVatRate defaultVatRate
     *
     * @return self
     */
    public function setDefaultVatRate($defaultVatRate)
    {
        $this->container['defaultVatRate'] = $defaultVatRate;

        return $this;
    }

    /**
     * Gets orderTooLongOnNewHoursOffset
     *
     * @return int|null
     */
    public function getOrderTooLongOnNewHoursOffset()
    {
        return $this->container['orderTooLongOnNewHoursOffset'];
    }

    /**
     * Sets orderTooLongOnNewHoursOffset
     *
     * @param int|null $orderTooLongOnNewHoursOffset orderTooLongOnNewHoursOffset
     *
     * @return self
     */
    public function setOrderTooLongOnNewHoursOffset($orderTooLongOnNewHoursOffset)
    {
        $this->container['orderTooLongOnNewHoursOffset'] = $orderTooLongOnNewHoursOffset;

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


