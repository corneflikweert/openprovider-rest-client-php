<?php
/**
 * DomainContacts
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
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

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * DomainContacts Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainContacts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainContacts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_handle' => 'string',
        'billing_handle' => 'string',
        'owner_handle' => 'string',
        'tech_handle' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'admin_handle' => null,
        'billing_handle' => null,
        'owner_handle' => null,
        'tech_handle' => null
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
        'admin_handle' => 'admin_handle',
        'billing_handle' => 'billing_handle',
        'owner_handle' => 'owner_handle',
        'tech_handle' => 'tech_handle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_handle' => 'setAdminHandle',
        'billing_handle' => 'setBillingHandle',
        'owner_handle' => 'setOwnerHandle',
        'tech_handle' => 'setTechHandle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_handle' => 'getAdminHandle',
        'billing_handle' => 'getBillingHandle',
        'owner_handle' => 'getOwnerHandle',
        'tech_handle' => 'getTechHandle'
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
        $this->container['admin_handle'] = isset($data['admin_handle']) ? $data['admin_handle'] : null;
        $this->container['billing_handle'] = isset($data['billing_handle']) ? $data['billing_handle'] : null;
        $this->container['owner_handle'] = isset($data['owner_handle']) ? $data['owner_handle'] : null;
        $this->container['tech_handle'] = isset($data['tech_handle']) ? $data['tech_handle'] : null;
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
     * Gets admin_handle
     *
     * @return string|null
     */
    public function getAdminHandle()
    {
        return $this->container['admin_handle'];
    }

    /**
     * Sets admin_handle
     *
     * @param string|null $admin_handle admin_handle
     *
     * @return $this
     */
    public function setAdminHandle($admin_handle)
    {
        $this->container['admin_handle'] = $admin_handle;

        return $this;
    }

    /**
     * Gets billing_handle
     *
     * @return string|null
     */
    public function getBillingHandle()
    {
        return $this->container['billing_handle'];
    }

    /**
     * Sets billing_handle
     *
     * @param string|null $billing_handle billing_handle
     *
     * @return $this
     */
    public function setBillingHandle($billing_handle)
    {
        $this->container['billing_handle'] = $billing_handle;

        return $this;
    }

    /**
     * Gets owner_handle
     *
     * @return string|null
     */
    public function getOwnerHandle()
    {
        return $this->container['owner_handle'];
    }

    /**
     * Sets owner_handle
     *
     * @param string|null $owner_handle owner_handle
     *
     * @return $this
     */
    public function setOwnerHandle($owner_handle)
    {
        $this->container['owner_handle'] = $owner_handle;

        return $this;
    }

    /**
     * Gets tech_handle
     *
     * @return string|null
     */
    public function getTechHandle()
    {
        return $this->container['tech_handle'];
    }

    /**
     * Sets tech_handle
     *
     * @param string|null $tech_handle tech_handle
     *
     * @return $this
     */
    public function setTechHandle($tech_handle)
    {
        $this->container['tech_handle'] = $tech_handle;

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


