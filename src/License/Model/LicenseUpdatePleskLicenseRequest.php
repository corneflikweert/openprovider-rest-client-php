<?php
/**
 * LicenseUpdatePleskLicenseRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\License
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * License
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\License\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * LicenseUpdatePleskLicenseRequest Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\License
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LicenseUpdatePleskLicenseRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'licenseUpdatePleskLicenseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attached_keys' => 'string[]',
        'comment' => 'string',
        'ip_address_binding' => 'string',
        'items' => 'string[]',
        'key_id' => 'int',
        'parent_key_id' => 'int',
        'period' => 'int',
        'restrict_ip_binding' => 'bool',
        'suspended' => 'bool',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attached_keys' => null,
        'comment' => null,
        'ip_address_binding' => null,
        'items' => null,
        'key_id' => 'int32',
        'parent_key_id' => 'int32',
        'period' => 'int32',
        'restrict_ip_binding' => 'boolean',
        'suspended' => 'boolean',
        'title' => null
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
        'attached_keys' => 'attached_keys',
        'comment' => 'comment',
        'ip_address_binding' => 'ip_address_binding',
        'items' => 'items',
        'key_id' => 'key_id',
        'parent_key_id' => 'parent_key_id',
        'period' => 'period',
        'restrict_ip_binding' => 'restrict_ip_binding',
        'suspended' => 'suspended',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attached_keys' => 'setAttachedKeys',
        'comment' => 'setComment',
        'ip_address_binding' => 'setIpAddressBinding',
        'items' => 'setItems',
        'key_id' => 'setKeyId',
        'parent_key_id' => 'setParentKeyId',
        'period' => 'setPeriod',
        'restrict_ip_binding' => 'setRestrictIpBinding',
        'suspended' => 'setSuspended',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attached_keys' => 'getAttachedKeys',
        'comment' => 'getComment',
        'ip_address_binding' => 'getIpAddressBinding',
        'items' => 'getItems',
        'key_id' => 'getKeyId',
        'parent_key_id' => 'getParentKeyId',
        'period' => 'getPeriod',
        'restrict_ip_binding' => 'getRestrictIpBinding',
        'suspended' => 'getSuspended',
        'title' => 'getTitle'
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
        $this->container['attached_keys'] = isset($data['attached_keys']) ? $data['attached_keys'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['ip_address_binding'] = isset($data['ip_address_binding']) ? $data['ip_address_binding'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['key_id'] = isset($data['key_id']) ? $data['key_id'] : null;
        $this->container['parent_key_id'] = isset($data['parent_key_id']) ? $data['parent_key_id'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['restrict_ip_binding'] = isset($data['restrict_ip_binding']) ? $data['restrict_ip_binding'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
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
     * Gets attached_keys
     *
     * @return string[]|null
     */
    public function getAttachedKeys()
    {
        return $this->container['attached_keys'];
    }

    /**
     * Sets attached_keys
     *
     * @param string[]|null $attached_keys attached_keys
     *
     * @return $this
     */
    public function setAttachedKeys($attached_keys)
    {
        $this->container['attached_keys'] = $attached_keys;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets ip_address_binding
     *
     * @return string|null
     */
    public function getIpAddressBinding()
    {
        return $this->container['ip_address_binding'];
    }

    /**
     * Sets ip_address_binding
     *
     * @param string|null $ip_address_binding ip_address_binding
     *
     * @return $this
     */
    public function setIpAddressBinding($ip_address_binding)
    {
        $this->container['ip_address_binding'] = $ip_address_binding;

        return $this;
    }

    /**
     * Gets items
     *
     * @return string[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param string[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets key_id
     *
     * @return int|null
     */
    public function getKeyId()
    {
        return $this->container['key_id'];
    }

    /**
     * Sets key_id
     *
     * @param int|null $key_id key_id
     *
     * @return $this
     */
    public function setKeyId($key_id)
    {
        $this->container['key_id'] = $key_id;

        return $this;
    }

    /**
     * Gets parent_key_id
     *
     * @return int|null
     */
    public function getParentKeyId()
    {
        return $this->container['parent_key_id'];
    }

    /**
     * Sets parent_key_id
     *
     * @param int|null $parent_key_id parent_key_id
     *
     * @return $this
     */
    public function setParentKeyId($parent_key_id)
    {
        $this->container['parent_key_id'] = $parent_key_id;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets restrict_ip_binding
     *
     * @return bool|null
     */
    public function getRestrictIpBinding()
    {
        return $this->container['restrict_ip_binding'];
    }

    /**
     * Sets restrict_ip_binding
     *
     * @param bool|null $restrict_ip_binding restrict_ip_binding
     *
     * @return $this
     */
    public function setRestrictIpBinding($restrict_ip_binding)
    {
        $this->container['restrict_ip_binding'] = $restrict_ip_binding;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended suspended
     *
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
}


