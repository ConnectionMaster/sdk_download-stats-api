<?php
/**
 * TotalItemsPagePerPageTotalPagesNextModel
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
 * OpenAPI spec version: 1.64.0
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
 * TotalItemsPagePerPageTotalPagesNextModel Class Doc Comment
 *
 * @category Class
 * @package  Softonic\DownloadStatsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TotalItemsPagePerPageTotalPagesNextModel implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TotalItemsPagePerPageTotalPagesNextModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_items' => 'int',
        'page' => 'int',
        'per_page' => 'int',
        'total_pages' => 'int',
        'next' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_items' => null,
        'page' => null,
        'per_page' => null,
        'total_pages' => null,
        'next' => null
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
        'total_items' => 'totalItems',
        'page' => 'page',
        'per_page' => 'perPage',
        'total_pages' => 'totalPages',
        'next' => 'next'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_items' => 'setTotalItems',
        'page' => 'setPage',
        'per_page' => 'setPerPage',
        'total_pages' => 'setTotalPages',
        'next' => 'setNext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_items' => 'getTotalItems',
        'page' => 'getPage',
        'per_page' => 'getPerPage',
        'total_pages' => 'getTotalPages',
        'next' => 'getNext'
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
    public function __construct(array $data = null)
    {
        $this->container['total_items'] = isset($data['total_items']) ? $data['total_items'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['per_page'] = isset($data['per_page']) ? $data['per_page'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_items'] === null) {
            $invalidProperties[] = "'total_items' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['per_page'] === null) {
            $invalidProperties[] = "'per_page' can't be null";
        }
        if ($this->container['total_pages'] === null) {
            $invalidProperties[] = "'total_pages' can't be null";
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

        if ($this->container['total_items'] === null) {
            return false;
        }
        if ($this->container['page'] === null) {
            return false;
        }
        if ($this->container['per_page'] === null) {
            return false;
        }
        if ($this->container['total_pages'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets total_items
     *
     * @return int
     */
    public function getTotalItems()
    {
        return $this->container['total_items'];
    }

    /**
     * Sets total_items
     *
     * @param int $total_items Total number of items
     *
     * @return $this
     */
    public function setTotalItems($total_items)
    {
        $this->container['total_items'] = $total_items;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page Page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets per_page
     *
     * @return int
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     *
     * @param int $per_page Number of results per page
     *
     * @return $this
     */
    public function setPerPage($per_page)
    {
        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int $total_pages Total number of pages
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string $next Url of the next page
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

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

    /**
     * Returns data which can be serialized by json_encode()
     *
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        return $this->container;
    }
}


