<?php
/**
 * Service
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
* No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
* OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
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
 * Service Class Doc Comment
 *
 * @category Class
 * @description service or fixed charge related to reservation
 * @package  HapiCommand
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Service implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'type' => 'string',
'price' => 'float',
'cost_type' => 'string',
'quantity' => 'int',
'dates' => '\HapiCommand\Model\TimeSpan',
'comment' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'type' => null,
'price' => null,
'cost_type' => null,
'quantity' => null,
'dates' => null,
'comment' => null    ];

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
        'id' => 'id',
'type' => 'type',
'price' => 'price',
'cost_type' => 'costType',
'quantity' => 'quantity',
'dates' => 'dates',
'comment' => 'comment'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'type' => 'setType',
'price' => 'setPrice',
'cost_type' => 'setCostType',
'quantity' => 'setQuantity',
'dates' => 'setDates',
'comment' => 'setComment'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'type' => 'getType',
'price' => 'getPrice',
'cost_type' => 'getCostType',
'quantity' => 'getQuantity',
'dates' => 'getDates',
'comment' => 'getComment'    ];

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

    const TYPE_SERVICE = 'SERVICE';
const TYPE_FIXED_CHARGE = 'FIXED_CHARGE';
const COST_TYPE_STAY = 'PER_STAY';
const COST_TYPE_NIGHT = 'PER_NIGHT';
const COST_TYPE_WEEK = 'PER_WEEK';
const COST_TYPE_PERSON_PER_NIGHT = 'PER_PERSON_PER_NIGHT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVICE,
self::TYPE_FIXED_CHARGE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCostTypeAllowableValues()
    {
        return [
            self::COST_TYPE_STAY,
self::COST_TYPE_NIGHT,
self::COST_TYPE_WEEK,
self::COST_TYPE_PERSON_PER_NIGHT,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['cost_type'] = isset($data['cost_type']) ? $data['cost_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCostTypeAllowableValues();
        if (!in_array($this->container['cost_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cost_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCostTypeAllowableValues();
        if (!in_array($this->container['cost_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id code that identifies service
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type service or fixed charge. defaults to SERVICE if not indicated
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price cost of service
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets cost_type
     *
     * @return string
     */
    public function getCostType()
    {
        return $this->container['cost_type'];
    }

    /**
     * Sets cost_type
     *
     * @param string $cost_type how is the service or charge priced
     *
     * @return $this
     */
    public function setCostType($cost_type)
    {
        $allowedValues = $this->getCostTypeAllowableValues();
        if (!is_null($cost_type) && !in_array($cost_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cost_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cost_type'] = $cost_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity number of service or fixed charge items
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \HapiCommand\Model\TimeSpan
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \HapiCommand\Model\TimeSpan $dates dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Fixed charge additional information
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
