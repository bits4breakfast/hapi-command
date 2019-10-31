<?php
/**
 * InventoryBlock
 *
 * PHP version 5
 *
 * @category Class
 * @package  HapiCommand
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HAPI Command API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HapiCommand\Model;

use \ArrayAccess;
use \HapiCommand\ObjectSerializer;

/**
 * InventoryBlock Class Doc Comment
 *
 * @category Class
 * @description Inventory block detail for allotment
 * @package  HapiCommand
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InventoryBlock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'room_type' => 'string',
        'rate_code' => 'string',
        'dates' => '\HapiCommand\Model\TimeSpan',
        'number_to_block' => 'int',
        'number_sold' => 'int',
        'comp_rooms_number' => 'int',
        'pick_up_status' => 'string',
        'currency_code' => 'string',
        'rates' => '\HapiCommand\Model\BlockRate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'room_type' => null,
        'rate_code' => null,
        'dates' => null,
        'number_to_block' => 'int32',
        'number_sold' => 'int32',
        'comp_rooms_number' => 'int32',
        'pick_up_status' => null,
        'currency_code' => null,
        'rates' => null
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
        'room_type' => 'roomType',
        'rate_code' => 'rateCode',
        'dates' => 'dates',
        'number_to_block' => 'numberToBlock',
        'number_sold' => 'numberSold',
        'comp_rooms_number' => 'compRoomsNumber',
        'pick_up_status' => 'pickUpStatus',
        'currency_code' => 'currencyCode',
        'rates' => 'rates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'room_type' => 'setRoomType',
        'rate_code' => 'setRateCode',
        'dates' => 'setDates',
        'number_to_block' => 'setNumberToBlock',
        'number_sold' => 'setNumberSold',
        'comp_rooms_number' => 'setCompRoomsNumber',
        'pick_up_status' => 'setPickUpStatus',
        'currency_code' => 'setCurrencyCode',
        'rates' => 'setRates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'room_type' => 'getRoomType',
        'rate_code' => 'getRateCode',
        'dates' => 'getDates',
        'number_to_block' => 'getNumberToBlock',
        'number_sold' => 'getNumberSold',
        'comp_rooms_number' => 'getCompRoomsNumber',
        'pick_up_status' => 'getPickUpStatus',
        'currency_code' => 'getCurrencyCode',
        'rates' => 'getRates'
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
        $this->container['room_type'] = isset($data['room_type']) ? $data['room_type'] : null;
        $this->container['rate_code'] = isset($data['rate_code']) ? $data['rate_code'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['number_to_block'] = isset($data['number_to_block']) ? $data['number_to_block'] : null;
        $this->container['number_sold'] = isset($data['number_sold']) ? $data['number_sold'] : null;
        $this->container['comp_rooms_number'] = isset($data['comp_rooms_number']) ? $data['comp_rooms_number'] : null;
        $this->container['pick_up_status'] = isset($data['pick_up_status']) ? $data['pick_up_status'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
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
     * Gets room_type
     *
     * @return string|null
     */
    public function getRoomType()
    {
        return $this->container['room_type'];
    }

    /**
     * Sets room_type
     *
     * @param string|null $room_type Room type
     *
     * @return $this
     */
    public function setRoomType($room_type)
    {
        $this->container['room_type'] = $room_type;

        return $this;
    }

    /**
     * Gets rate_code
     *
     * @return string|null
     */
    public function getRateCode()
    {
        return $this->container['rate_code'];
    }

    /**
     * Sets rate_code
     *
     * @param string|null $rate_code Code identifying rate for block
     *
     * @return $this
     */
    public function setRateCode($rate_code)
    {
        $this->container['rate_code'] = $rate_code;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \HapiCommand\Model\TimeSpan|null
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \HapiCommand\Model\TimeSpan|null $dates dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets number_to_block
     *
     * @return int|null
     */
    public function getNumberToBlock()
    {
        return $this->container['number_to_block'];
    }

    /**
     * Sets number_to_block
     *
     * @param int|null $number_to_block Number of rooms for this block per day per room type
     *
     * @return $this
     */
    public function setNumberToBlock($number_to_block)
    {
        $this->container['number_to_block'] = $number_to_block;

        return $this;
    }

    /**
     * Gets number_sold
     *
     * @return int|null
     */
    public function getNumberSold()
    {
        return $this->container['number_sold'];
    }

    /**
     * Sets number_sold
     *
     * @param int|null $number_sold Number of rooms sold in block
     *
     * @return $this
     */
    public function setNumberSold($number_sold)
    {
        $this->container['number_sold'] = $number_sold;

        return $this;
    }

    /**
     * Gets comp_rooms_number
     *
     * @return int|null
     */
    public function getCompRoomsNumber()
    {
        return $this->container['comp_rooms_number'];
    }

    /**
     * Sets comp_rooms_number
     *
     * @param int|null $comp_rooms_number Number of comp rooms available in block
     *
     * @return $this
     */
    public function setCompRoomsNumber($comp_rooms_number)
    {
        $this->container['comp_rooms_number'] = $comp_rooms_number;

        return $this;
    }

    /**
     * Gets pick_up_status
     *
     * @return string|null
     */
    public function getPickUpStatus()
    {
        return $this->container['pick_up_status'];
    }

    /**
     * Sets pick_up_status
     *
     * @param string|null $pick_up_status Inventory count type
     *
     * @return $this
     */
    public function setPickUpStatus($pick_up_status)
    {
        $this->container['pick_up_status'] = $pick_up_status;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Code identifying type of currency associated to rate
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \HapiCommand\Model\BlockRate[]|null
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \HapiCommand\Model\BlockRate[]|null $rates Rate and occupancy detail for room type in block
     *
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

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


