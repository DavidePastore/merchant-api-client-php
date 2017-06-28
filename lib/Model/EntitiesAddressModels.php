<?php
/**
 * EntitiesAddressModels
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\ApiClient\Model;

use \ArrayAccess;

/**
 * EntitiesAddressModels Class Doc Comment
 *
 * @category    Class
 * @package     ChannelEngine\ApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EntitiesAddressModels implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EntitiesAddressModels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gender' => 'string',
        'companyName' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'streetName' => 'string',
        'houseNr' => 'string',
        'houseNrAddition' => 'string',
        'zipCode' => 'string',
        'city' => 'string',
        'region' => 'string',
        'countryIso' => 'string',
        'original' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'gender' => 'Gender',
        'companyName' => 'CompanyName',
        'firstName' => 'FirstName',
        'lastName' => 'LastName',
        'streetName' => 'StreetName',
        'houseNr' => 'HouseNr',
        'houseNrAddition' => 'HouseNrAddition',
        'zipCode' => 'ZipCode',
        'city' => 'City',
        'region' => 'Region',
        'countryIso' => 'CountryIso',
        'original' => 'Original'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'gender' => 'setGender',
        'companyName' => 'setCompanyName',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'streetName' => 'setStreetName',
        'houseNr' => 'setHouseNr',
        'houseNrAddition' => 'setHouseNrAddition',
        'zipCode' => 'setZipCode',
        'city' => 'setCity',
        'region' => 'setRegion',
        'countryIso' => 'setCountryIso',
        'original' => 'setOriginal'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'gender' => 'getGender',
        'companyName' => 'getCompanyName',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'streetName' => 'getStreetName',
        'houseNr' => 'getHouseNr',
        'houseNrAddition' => 'getHouseNrAddition',
        'zipCode' => 'getZipCode',
        'city' => 'getCity',
        'region' => 'getRegion',
        'countryIso' => 'getCountryIso',
        'original' => 'getOriginal'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    const GENDER_NOT_APPLICABLE = 'NOT_APPLICABLE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_NOT_APPLICABLE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['streetName'] = isset($data['streetName']) ? $data['streetName'] : null;
        $this->container['houseNr'] = isset($data['houseNr']) ? $data['houseNr'] : null;
        $this->container['houseNrAddition'] = isset($data['houseNrAddition']) ? $data['houseNrAddition'] : null;
        $this->container['zipCode'] = isset($data['zipCode']) ? $data['zipCode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['countryIso'] = isset($data['countryIso']) ? $data['countryIso'] : null;
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["MALE", "FEMALE", "NOT_APPLICABLE"];
        if (!in_array($this->container['gender'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'gender', must be one of 'MALE', 'FEMALE', 'NOT_APPLICABLE'.";
        }

        if (!is_null($this->container['houseNr']) && (strlen($this->container['houseNr']) > 50)) {
            $invalid_properties[] = "invalid value for 'houseNr', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['houseNr']) && (strlen($this->container['houseNr']) < 0)) {
            $invalid_properties[] = "invalid value for 'houseNr', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['houseNrAddition']) && (strlen($this->container['houseNrAddition']) > 50)) {
            $invalid_properties[] = "invalid value for 'houseNrAddition', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['houseNrAddition']) && (strlen($this->container['houseNrAddition']) < 0)) {
            $invalid_properties[] = "invalid value for 'houseNrAddition', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['region']) && (strlen($this->container['region']) > 50)) {
            $invalid_properties[] = "invalid value for 'region', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['region']) && (strlen($this->container['region']) < 0)) {
            $invalid_properties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['countryIso']) && (strlen($this->container['countryIso']) > 2)) {
            $invalid_properties[] = "invalid value for 'countryIso', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['countryIso']) && (strlen($this->container['countryIso']) < 0)) {
            $invalid_properties[] = "invalid value for 'countryIso', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['original']) && (strlen($this->container['original']) > 256)) {
            $invalid_properties[] = "invalid value for 'original', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['original']) && (strlen($this->container['original']) < 0)) {
            $invalid_properties[] = "invalid value for 'original', the character length must be bigger than or equal to 0.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["MALE", "FEMALE", "NOT_APPLICABLE"];
        if (!in_array($this->container['gender'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['houseNr']) > 50) {
            return false;
        }
        if (strlen($this->container['houseNr']) < 0) {
            return false;
        }
        if (strlen($this->container['houseNrAddition']) > 50) {
            return false;
        }
        if (strlen($this->container['houseNrAddition']) < 0) {
            return false;
        }
        if (strlen($this->container['region']) > 50) {
            return false;
        }
        if (strlen($this->container['region']) < 0) {
            return false;
        }
        if (strlen($this->container['countryIso']) > 2) {
            return false;
        }
        if (strlen($this->container['countryIso']) < 0) {
            return false;
        }
        if (strlen($this->container['original']) > 256) {
            return false;
        }
        if (strlen($this->container['original']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $allowed_values = array('MALE', 'FEMALE', 'NOT_APPLICABLE');
        if (!is_null($gender) && (!in_array($gender, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'gender', must be one of 'MALE', 'FEMALE', 'NOT_APPLICABLE'");
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets companyName
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets streetName
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['streetName'];
    }

    /**
     * Sets streetName
     * @param string $streetName
     * @return $this
     */
    public function setStreetName($streetName)
    {
        $this->container['streetName'] = $streetName;

        return $this;
    }

    /**
     * Gets houseNr
     * @return string
     */
    public function getHouseNr()
    {
        return $this->container['houseNr'];
    }

    /**
     * Sets houseNr
     * @param string $houseNr
     * @return $this
     */
    public function setHouseNr($houseNr)
    {
        if (!is_null($houseNr) && (strlen($houseNr) > 50)) {
            throw new \InvalidArgumentException('invalid length for $houseNr when calling EntitiesAddressModels., must be smaller than or equal to 50.');
        }
        if (!is_null($houseNr) && (strlen($houseNr) < 0)) {
            throw new \InvalidArgumentException('invalid length for $houseNr when calling EntitiesAddressModels., must be bigger than or equal to 0.');
        }

        $this->container['houseNr'] = $houseNr;

        return $this;
    }

    /**
     * Gets houseNrAddition
     * @return string
     */
    public function getHouseNrAddition()
    {
        return $this->container['houseNrAddition'];
    }

    /**
     * Sets houseNrAddition
     * @param string $houseNrAddition
     * @return $this
     */
    public function setHouseNrAddition($houseNrAddition)
    {
        if (!is_null($houseNrAddition) && (strlen($houseNrAddition) > 50)) {
            throw new \InvalidArgumentException('invalid length for $houseNrAddition when calling EntitiesAddressModels., must be smaller than or equal to 50.');
        }
        if (!is_null($houseNrAddition) && (strlen($houseNrAddition) < 0)) {
            throw new \InvalidArgumentException('invalid length for $houseNrAddition when calling EntitiesAddressModels., must be bigger than or equal to 0.');
        }

        $this->container['houseNrAddition'] = $houseNrAddition;

        return $this;
    }

    /**
     * Gets zipCode
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     * @param string $zipCode
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        if (!is_null($region) && (strlen($region) > 50)) {
            throw new \InvalidArgumentException('invalid length for $region when calling EntitiesAddressModels., must be smaller than or equal to 50.');
        }
        if (!is_null($region) && (strlen($region) < 0)) {
            throw new \InvalidArgumentException('invalid length for $region when calling EntitiesAddressModels., must be bigger than or equal to 0.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets countryIso
     * @return string
     */
    public function getCountryIso()
    {
        return $this->container['countryIso'];
    }

    /**
     * Sets countryIso
     * @param string $countryIso
     * @return $this
     */
    public function setCountryIso($countryIso)
    {
        if (!is_null($countryIso) && (strlen($countryIso) > 2)) {
            throw new \InvalidArgumentException('invalid length for $countryIso when calling EntitiesAddressModels., must be smaller than or equal to 2.');
        }
        if (!is_null($countryIso) && (strlen($countryIso) < 0)) {
            throw new \InvalidArgumentException('invalid length for $countryIso when calling EntitiesAddressModels., must be bigger than or equal to 0.');
        }

        $this->container['countryIso'] = $countryIso;

        return $this;
    }

    /**
     * Gets original
     * @return string
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     * @param string $original
     * @return $this
     */
    public function setOriginal($original)
    {
        if (!is_null($original) && (strlen($original) > 256)) {
            throw new \InvalidArgumentException('invalid length for $original when calling EntitiesAddressModels., must be smaller than or equal to 256.');
        }
        if (!is_null($original) && (strlen($original) < 0)) {
            throw new \InvalidArgumentException('invalid length for $original when calling EntitiesAddressModels., must be bigger than or equal to 0.');
        }

        $this->container['original'] = $original;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


