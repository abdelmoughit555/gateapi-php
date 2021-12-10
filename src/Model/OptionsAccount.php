<?php
/**
 * OptionsAccount
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * OptionsAccount Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class OptionsAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OptionsAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user' => 'int',
        'total' => 'string',
        'short_enabled' => 'bool',
        'unrealised_pnl' => 'string',
        'init_margin' => 'string',
        'maint_margin' => 'string',
        'order_margin' => 'string',
        'available' => 'string',
        'point' => 'string',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user' => null,
        'total' => null,
        'short_enabled' => null,
        'unrealised_pnl' => null,
        'init_margin' => null,
        'maint_margin' => null,
        'order_margin' => null,
        'available' => null,
        'point' => null,
        'currency' => null
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
        'user' => 'user',
        'total' => 'total',
        'short_enabled' => 'short_enabled',
        'unrealised_pnl' => 'unrealised_pnl',
        'init_margin' => 'init_margin',
        'maint_margin' => 'maint_margin',
        'order_margin' => 'order_margin',
        'available' => 'available',
        'point' => 'point',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'total' => 'setTotal',
        'short_enabled' => 'setShortEnabled',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'init_margin' => 'setInitMargin',
        'maint_margin' => 'setMaintMargin',
        'order_margin' => 'setOrderMargin',
        'available' => 'setAvailable',
        'point' => 'setPoint',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'total' => 'getTotal',
        'short_enabled' => 'getShortEnabled',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'init_margin' => 'getInitMargin',
        'maint_margin' => 'getMaintMargin',
        'order_margin' => 'getOrderMargin',
        'available' => 'getAvailable',
        'point' => 'getPoint',
        'currency' => 'getCurrency'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['short_enabled'] = isset($data['short_enabled']) ? $data['short_enabled'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['init_margin'] = isset($data['init_margin']) ? $data['init_margin'] : null;
        $this->container['maint_margin'] = isset($data['maint_margin']) ? $data['maint_margin'] : null;
        $this->container['order_margin'] = isset($data['order_margin']) ? $data['order_margin'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['point'] = isset($data['point']) ? $data['point'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
     * Gets user
     *
     * @return int|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int|null $user User ID
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total Total account balance
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets short_enabled
     *
     * @return bool|null
     */
    public function getShortEnabled()
    {
        return $this->container['short_enabled'];
    }

    /**
     * Sets short_enabled
     *
     * @param bool|null $short_enabled If the account is allowed to short
     *
     * @return $this
     */
    public function setShortEnabled($short_enabled)
    {
        $this->container['short_enabled'] = $short_enabled;

        return $this;
    }

    /**
     * Gets unrealised_pnl
     *
     * @return string|null
     */
    public function getUnrealisedPnl()
    {
        return $this->container['unrealised_pnl'];
    }

    /**
     * Sets unrealised_pnl
     *
     * @param string|null $unrealised_pnl Unrealized PNL
     *
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        $this->container['unrealised_pnl'] = $unrealised_pnl;

        return $this;
    }

    /**
     * Gets init_margin
     *
     * @return string|null
     */
    public function getInitMargin()
    {
        return $this->container['init_margin'];
    }

    /**
     * Sets init_margin
     *
     * @param string|null $init_margin Initial position margin
     *
     * @return $this
     */
    public function setInitMargin($init_margin)
    {
        $this->container['init_margin'] = $init_margin;

        return $this;
    }

    /**
     * Gets maint_margin
     *
     * @return string|null
     */
    public function getMaintMargin()
    {
        return $this->container['maint_margin'];
    }

    /**
     * Sets maint_margin
     *
     * @param string|null $maint_margin Position maintenance margin
     *
     * @return $this
     */
    public function setMaintMargin($maint_margin)
    {
        $this->container['maint_margin'] = $maint_margin;

        return $this;
    }

    /**
     * Gets order_margin
     *
     * @return string|null
     */
    public function getOrderMargin()
    {
        return $this->container['order_margin'];
    }

    /**
     * Sets order_margin
     *
     * @param string|null $order_margin Order margin of unfinished orders
     *
     * @return $this
     */
    public function setOrderMargin($order_margin)
    {
        $this->container['order_margin'] = $order_margin;

        return $this;
    }

    /**
     * Gets available
     *
     * @return string|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param string|null $available Available balance to transfer out or trade
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets point
     *
     * @return string|null
     */
    public function getPoint()
    {
        return $this->container['point'];
    }

    /**
     * Sets point
     *
     * @param string|null $point POINT amount
     *
     * @return $this
     */
    public function setPoint($point)
    {
        $this->container['point'] = $point;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Settle currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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


