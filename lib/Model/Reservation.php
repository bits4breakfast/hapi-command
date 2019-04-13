<?php
/**
 * Reservation
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
 * Reservation Class Doc Comment
 *
 * @category Class
 * @package  HapiCommand
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reservation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Reservation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'booking_confirmation_id' => 'string',
'arrival_date' => 'string',
'arrival_time' => 'string',
'departure_date' => 'string',
'creator' => 'string',
'cancellation_number' => 'string',
'cancelled_date' => 'string',
'cancellation_comment' => 'string',
'adults' => 'int',
'children' => 'int',
'status' => 'string',
'guests' => '\HapiCommand\Model\Guest[]',
'profiles' => '\HapiCommand\Model\Profile[]',
'room_stays' => '\HapiCommand\Model\RoomStay[]',
'comments' => '\HapiCommand\Model\Comment[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'booking_confirmation_id' => null,
'arrival_date' => null,
'arrival_time' => null,
'departure_date' => null,
'creator' => null,
'cancellation_number' => null,
'cancelled_date' => null,
'cancellation_comment' => null,
'adults' => 'int32',
'children' => 'int32',
'status' => null,
'guests' => null,
'profiles' => null,
'room_stays' => null,
'comments' => null    ];

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
'booking_confirmation_id' => 'bookingConfirmationId',
'arrival_date' => 'arrivalDate',
'arrival_time' => 'arrivalTime',
'departure_date' => 'departureDate',
'creator' => 'creator',
'cancellation_number' => 'cancellationNumber',
'cancelled_date' => 'cancelledDate',
'cancellation_comment' => 'cancellationComment',
'adults' => 'adults',
'children' => 'children',
'status' => 'status',
'guests' => 'guests',
'profiles' => 'profiles',
'room_stays' => 'roomStays',
'comments' => 'comments'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'booking_confirmation_id' => 'setBookingConfirmationId',
'arrival_date' => 'setArrivalDate',
'arrival_time' => 'setArrivalTime',
'departure_date' => 'setDepartureDate',
'creator' => 'setCreator',
'cancellation_number' => 'setCancellationNumber',
'cancelled_date' => 'setCancelledDate',
'cancellation_comment' => 'setCancellationComment',
'adults' => 'setAdults',
'children' => 'setChildren',
'status' => 'setStatus',
'guests' => 'setGuests',
'profiles' => 'setProfiles',
'room_stays' => 'setRoomStays',
'comments' => 'setComments'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'booking_confirmation_id' => 'getBookingConfirmationId',
'arrival_date' => 'getArrivalDate',
'arrival_time' => 'getArrivalTime',
'departure_date' => 'getDepartureDate',
'creator' => 'getCreator',
'cancellation_number' => 'getCancellationNumber',
'cancelled_date' => 'getCancelledDate',
'cancellation_comment' => 'getCancellationComment',
'adults' => 'getAdults',
'children' => 'getChildren',
'status' => 'getStatus',
'guests' => 'getGuests',
'profiles' => 'getProfiles',
'room_stays' => 'getRoomStays',
'comments' => 'getComments'    ];

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

    const STATUS_REQUESTED = 'REQUESTED';
const STATUS_RESERVED = 'RESERVED';
const STATUS_IN_HOUSE = 'IN_HOUSE';
const STATUS_CANCELLED = 'CANCELLED';
const STATUS_CHECKED_OUT = 'CHECKED_OUT';
const STATUS_NO_SHOW = 'NO_SHOW';
const STATUS_WAIT_LIST = 'WAIT_LIST';
const STATUS_UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_REQUESTED,
self::STATUS_RESERVED,
self::STATUS_IN_HOUSE,
self::STATUS_CANCELLED,
self::STATUS_CHECKED_OUT,
self::STATUS_NO_SHOW,
self::STATUS_WAIT_LIST,
self::STATUS_UNKNOWN,        ];
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
        $this->container['booking_confirmation_id'] = isset($data['booking_confirmation_id']) ? $data['booking_confirmation_id'] : null;
        $this->container['arrival_date'] = isset($data['arrival_date']) ? $data['arrival_date'] : null;
        $this->container['arrival_time'] = isset($data['arrival_time']) ? $data['arrival_time'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['cancellation_number'] = isset($data['cancellation_number']) ? $data['cancellation_number'] : null;
        $this->container['cancelled_date'] = isset($data['cancelled_date']) ? $data['cancelled_date'] : null;
        $this->container['cancellation_comment'] = isset($data['cancellation_comment']) ? $data['cancellation_comment'] : null;
        $this->container['adults'] = isset($data['adults']) ? $data['adults'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['guests'] = isset($data['guests']) ? $data['guests'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['room_stays'] = isset($data['room_stays']) ? $data['room_stays'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
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
     * @param string $id reservation identifier and object key
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets booking_confirmation_id
     *
     * @return string
     */
    public function getBookingConfirmationId()
    {
        return $this->container['booking_confirmation_id'];
    }

    /**
     * Sets booking_confirmation_id
     *
     * @param string $booking_confirmation_id unique confirmation id within given hotel
     *
     * @return $this
     */
    public function setBookingConfirmationId($booking_confirmation_id)
    {
        $this->container['booking_confirmation_id'] = $booking_confirmation_id;

        return $this;
    }

    /**
     * Gets arrival_date
     *
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->container['arrival_date'];
    }

    /**
     * Sets arrival_date
     *
     * @param string $arrival_date check-in date, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setArrivalDate($arrival_date)
    {
        $this->container['arrival_date'] = $arrival_date;

        return $this;
    }

    /**
     * Gets arrival_time
     *
     * @return string
     */
    public function getArrivalTime()
    {
        return $this->container['arrival_time'];
    }

    /**
     * Sets arrival_time
     *
     * @param string $arrival_time estimated check-in time
     *
     * @return $this
     */
    public function setArrivalTime($arrival_time)
    {
        $this->container['arrival_time'] = $arrival_time;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return string
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param string $departure_date check-out date, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator user or interface who created reservation
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets cancellation_number
     *
     * @return string
     */
    public function getCancellationNumber()
    {
        return $this->container['cancellation_number'];
    }

    /**
     * Sets cancellation_number
     *
     * @param string $cancellation_number cancellation number for reservation. may be supplied externally or returned from pms
     *
     * @return $this
     */
    public function setCancellationNumber($cancellation_number)
    {
        $this->container['cancellation_number'] = $cancellation_number;

        return $this;
    }

    /**
     * Gets cancelled_date
     *
     * @return string
     */
    public function getCancelledDate()
    {
        return $this->container['cancelled_date'];
    }

    /**
     * Sets cancelled_date
     *
     * @param string $cancelled_date date of reservation cancellation, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->container['cancelled_date'] = $cancelled_date;

        return $this;
    }

    /**
     * Gets cancellation_comment
     *
     * @return string
     */
    public function getCancellationComment()
    {
        return $this->container['cancellation_comment'];
    }

    /**
     * Sets cancellation_comment
     *
     * @param string $cancellation_comment reason for reservation cancellation
     *
     * @return $this
     */
    public function setCancellationComment($cancellation_comment)
    {
        $this->container['cancellation_comment'] = $cancellation_comment;

        return $this;
    }

    /**
     * Gets adults
     *
     * @return int
     */
    public function getAdults()
    {
        return $this->container['adults'];
    }

    /**
     * Sets adults
     *
     * @param int $adults adults
     *
     * @return $this
     */
    public function setAdults($adults)
    {
        $this->container['adults'] = $adults;

        return $this;
    }

    /**
     * Gets children
     *
     * @return int
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param int $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status current status of reservation
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets guests
     *
     * @return \HapiCommand\Model\Guest[]
     */
    public function getGuests()
    {
        return $this->container['guests'];
    }

    /**
     * Sets guests
     *
     * @param \HapiCommand\Model\Guest[] $guests guest profiles associated to reservation
     *
     * @return $this
     */
    public function setGuests($guests)
    {
        $this->container['guests'] = $guests;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return \HapiCommand\Model\Profile[]
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param \HapiCommand\Model\Profile[] $profiles non-guest profiles associated to reservation
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets room_stays
     *
     * @return \HapiCommand\Model\RoomStay[]
     */
    public function getRoomStays()
    {
        return $this->container['room_stays'];
    }

    /**
     * Sets room_stays
     *
     * @param \HapiCommand\Model\RoomStay[] $room_stays room stay information associated to reservation
     *
     * @return $this
     */
    public function setRoomStays($room_stays)
    {
        $this->container['room_stays'] = $room_stays;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \HapiCommand\Model\Comment[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \HapiCommand\Model\Comment[] $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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
