<?php
/**
 * PropertyId
 *
 * PHP version 5
 *
 * @category Class
 * @package  HapiCommand
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * HAPI Command API
 *
 * API for creating/updating/canceling objects in PMS
 *
 * OpenAPI spec version: v1-oas3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HapiCommand\Model;

use \ArrayAccess;
use \HapiCommand\ObjectSerializer;

/**
 * PropertyId Class Doc Comment
 *
 * @category Class
 * @description Property id in HAPI system
 * @package  HapiCommand
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chain_code' => 'string',
'brand_code' => 'string',
'property_code' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chain_code' => null,
'brand_code' => null,
'property_code' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'chain_code' => 'chainCode',
'brand_code' => 'brandCode',
'property_code' => 'propertyCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chain_code' => 'setChainCode',
'brand_code' => 'setBrandCode',
'property_code' => 'setPropertyCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chain_code' => 'getChainCode',
'brand_code' => 'getBrandCode',
'property_code' => 'getPropertyCode'    ];

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
        return self::$swaggerModelName;
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
        $this->container['chain_code'] = isset($data['chain_code']) ? $data['chain_code'] : null;
        $this->container['brand_code'] = isset($data['brand_code']) ? $data['brand_code'] : null;
        $this->container['property_code'] = isset($data['property_code']) ? $data['property_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['chain_code'] === null) {
            $invalidProperties[] = "'chain_code' can't be null";
        }
        if ($this->container['property_code'] === null) {
            $invalidProperties[] = "'property_code' can't be null";
        }
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
     * Gets chain_code
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->container['chain_code'];
    }

    /**
     * Sets chain_code
     *
     * @param string $chain_code chain_code
     *
     * @return $this
     */
    public function setChainCode($chain_code)
    {
        $this->container['chain_code'] = $chain_code;

        return $this;
    }

    /**
     * Gets brand_code
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->container['brand_code'];
    }

    /**
     * Sets brand_code
     *
     * @param string $brand_code brand_code
     *
     * @return $this
     */
    public function setBrandCode($brand_code)
    {
        $this->container['brand_code'] = $brand_code;

        return $this;
    }

    /**
     * Gets property_code
     *
     * @return string
     */
    public function getPropertyCode()
    {
        return $this->container['property_code'];
    }

    /**
     * Sets property_code
     *
     * @param string $property_code property_code
     *
     * @return $this
     */
    public function setPropertyCode($property_code)
    {
        $this->container['property_code'] = $property_code;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
