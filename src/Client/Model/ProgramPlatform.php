<?php
/**
 * ProgramPlatform
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
 * ProgramPlatform Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgramPlatform implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    const GET_ALL_ATTRIBUTES = true;

    const GET_SET_ATTRIBUTES = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramPlatform';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_program' => 'string',
        'id_platform' => 'string',
        'downloads' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_program' => null,
        'id_platform' => null,
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
        'id_program' => 'id_program',
        'id_platform' => 'id_platform',
        'downloads' => 'downloads'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_program' => 'setIdProgram',
        'id_platform' => 'setIdPlatform',
        'downloads' => 'setDownloads'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_program' => 'getIdProgram',
        'id_platform' => 'getIdPlatform',
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
        array_key_exists('id_program', $data) && $this->container['id_program'] = $data['id_program'];
        array_key_exists('id_platform', $data) && $this->container['id_platform'] = $data['id_platform'];
        array_key_exists('downloads', $data) && $this->container['downloads'] = $data['downloads'];
    }

    /**
     * Returns true if all attributes are set. False otherwise.
     *
     * @return boolean
     */
    public function hasAllAttributesSet()
    {
        return count($this->container) === count(self::$attributeMap);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (array_key_exists('id_program', $this->container) && $this->container['id_program'] === null) {
            $invalidProperties[] = "'id_program' can't be null";
        }
        if (array_key_exists('id_platform', $this->container) && $this->container['id_platform'] === null) {
            $invalidProperties[] = "'id_platform' can't be null";
        }
        if (array_key_exists('downloads', $this->container) && $this->container['downloads'] === null) {
            $invalidProperties[] = "'downloads' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model ensuring the required ones are set
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->offsetGet('id_program') === null) {
            return false;
        }
        if ($this->offsetGet('id_platform') === null) {
            return false;
        }
        if ($this->offsetGet('downloads') === null) {
            return false;
        }

        return $this->validProperties();
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function validProperties()
    {

        if (array_key_exists('id_program', $this->container) && $this->container['id_program'] === null) {
            return false;
        }
        if (array_key_exists('id_platform', $this->container) && $this->container['id_platform'] === null) {
            return false;
        }
        if (array_key_exists('downloads', $this->container) && $this->container['downloads'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_program
     *
     * @return string
     */
    public function getIdProgram()
    {
        return array_key_exists('id_program', $this->container) ? $this->container['id_program'] : null;
    }

    /**
     * Sets id_program
     *
     * @param string $id_program Program identifier
     *
     * @return $this
     */
    public function setIdProgram($id_program)
    {
        $this->container['id_program'] = $id_program;

        return $this;
    }

    /**
     * Gets id_platform
     *
     * @return string
     */
    public function getIdPlatform()
    {
        return array_key_exists('id_platform', $this->container) ? $this->container['id_platform'] : null;
    }

    /**
     * Sets id_platform
     *
     * @param string $id_platform Platform identifier
     *
     * @return $this
     */
    public function setIdPlatform($id_platform)
    {
        $this->container['id_platform'] = $id_platform;

        return $this;
    }

    /**
     * Gets downloads
     *
     * @return int
     */
    public function getDownloads()
    {
        return array_key_exists('downloads', $this->container) ? $this->container['downloads'] : null;
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
    public function toArray($getAllAttributes = self::GET_SET_ATTRIBUTES)
    {
        if (!$getAllAttributes) {
            return $this->container;
        }

        $data = [];
        $data['id_program'] = $this->getIdProgram();
        $data['id_platform'] = $this->getIdPlatform();
        $data['downloads'] = $this->getDownloads();

        return $data;
    }
}


