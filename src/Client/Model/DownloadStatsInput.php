<?php
/**
 * DownloadStatsInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Download Stats API docs
 *
 * To access the API: 1. Register a client with the proper permissions (`download_stats_api.*`) in the [Softonic OAuth Admin](https://oauth-admin.softonic.com) 1. Retrieve a token for that client with the proper scopes from the [Softonic OAuth API](https://oauth-v2.softonic.com). 1. Copy the token in the input field at the top of the page
 *
 * OpenAPI spec version: 1.69.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\DownloadStatsApiSdk\Client\Model;

use \ArrayAccess;
use \JsonSerializable;
use \Softonic\DownloadStatsApiSdk\ObjectSerializer;

/**
 * DownloadStatsInput Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DownloadStatsInput implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DownloadStatsInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_id' => 'string',
        'country' => 'string',
        'date' => '\DateTime',
        'downloads' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_id' => null,
        'country' => null,
        'date' => 'date-time',
        'downloads' => null
    ];

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
        'app_id' => 'appId',
        'country' => 'country',
        'date' => 'date',
        'downloads' => 'downloads'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'country' => 'setCountry',
        'date' => 'setDate',
        'downloads' => 'setDownloads'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'country' => 'getCountry',
        'date' => 'getDate',
        'downloads' => 'getDownloads'
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
    public function __construct(array $data = [])
    {
        array_key_exists('app_id', $data) && $this->container['app_id'] = $data['app_id'];
        array_key_exists('country', $data) && $this->container['country'] = $data['country'];
        array_key_exists('date', $data) && $this->container['date'] = $data['date'];
        array_key_exists('downloads', $data) && $this->container['downloads'] = $data['downloads'];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (array_key_exists('app_id', $this->container) && $this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if (array_key_exists('country', $this->container) && $this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if (array_key_exists('date', $this->container) && $this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if (array_key_exists('downloads', $this->container) && $this->container['downloads'] === null) {
            $invalidProperties[] = "'downloads' can't be null";
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

        if (array_key_exists('app_id', $this->container) && $this->container['app_id'] === null) {
            return false;
        }
        if (array_key_exists('country', $this->container) && $this->container['country'] === null) {
            return false;
        }
        if (array_key_exists('date', $this->container) && $this->container['date'] === null) {
            return false;
        }
        if (array_key_exists('downloads', $this->container) && $this->container['downloads'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id App id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Take into account downloads from that date. ISO 8601 format
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets downloads
     *
     * @return int
     */
    public function getDownloads()
    {
        return $this->container['downloads'];
    }

    /**
     * Sets downloads
     *
     * @param int $downloads Number of downloads
     *
     * @return $this
     */
    public function setDownloads($downloads)
    {
        $this->container['downloads'] = $downloads;

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
        return array_key_exists($offset, $this->container);
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

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        return $this->container;
    }

    /**
     * Returns data as array.
     *
     * @param bool $getAllAttributes Should convert with all attributes or just the set ones?
     *
     * @return array
     */
    public function toArray($getAllAttributes = self::GET_ALL_ATTRIBUTES)
    {
        if (!$getAllAttributes) {
            return $this->container;
        }

        foreach (self::$attributeMap as $attribute) {
            $data[$attribute] = $this->container[$attribute] ?? null;
        }

        return $data;
    }
}


