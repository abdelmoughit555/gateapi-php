<?php
/**
 * FuturesInitialOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * OpenAPI spec version: 4.5.1
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * FuturesInitialOrder Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FuturesInitialOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesInitialOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract' => 'string',
        'size' => 'int',
        'price' => 'string',
        'close' => 'bool',
        'tif' => 'string',
        'text' => 'string',
        'reduce_only' => 'bool',
        'is_reduce_only' => 'bool',
        'is_close' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contract' => null,
        'size' => 'int64',
        'price' => null,
        'close' => null,
        'tif' => null,
        'text' => null,
        'reduce_only' => null,
        'is_reduce_only' => null,
        'is_close' => null
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
        'contract' => 'contract',
        'size' => 'size',
        'price' => 'price',
        'close' => 'close',
        'tif' => 'tif',
        'text' => 'text',
        'reduce_only' => 'reduce_only',
        'is_reduce_only' => 'is_reduce_only',
        'is_close' => 'is_close'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'size' => 'setSize',
        'price' => 'setPrice',
        'close' => 'setClose',
        'tif' => 'setTif',
        'text' => 'setText',
        'reduce_only' => 'setReduceOnly',
        'is_reduce_only' => 'setIsReduceOnly',
        'is_close' => 'setIsClose'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'size' => 'getSize',
        'price' => 'getPrice',
        'close' => 'getClose',
        'tif' => 'getTif',
        'text' => 'getText',
        'reduce_only' => 'getReduceOnly',
        'is_reduce_only' => 'getIsReduceOnly',
        'is_close' => 'getIsClose'
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

    const TIF_GTC = 'gtc';
    const TIF_IOC = 'ioc';
    const TEXT_WEB = 'web';
    const TEXT_API = 'api';
    const TEXT_APP = 'app';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTifAllowableValues()
    {
        return [
            self::TIF_GTC,
            self::TIF_IOC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextAllowableValues()
    {
        return [
            self::TEXT_WEB,
            self::TEXT_API,
            self::TEXT_APP,
        ];
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
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['close'] = isset($data['close']) ? $data['close'] : false;
        $this->container['tif'] = isset($data['tif']) ? $data['tif'] : 'gtc';
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['reduce_only'] = isset($data['reduce_only']) ? $data['reduce_only'] : false;
        $this->container['is_reduce_only'] = isset($data['is_reduce_only']) ? $data['is_reduce_only'] : null;
        $this->container['is_close'] = isset($data['is_close']) ? $data['is_close'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        $allowedValues = $this->getTifAllowableValues();
        if (!is_null($this->container['tif']) && !in_array($this->container['tif'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tif', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextAllowableValues();
        if (!is_null($this->container['text']) && !in_array($this->container['text'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string $contract Futures contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Order size. Positive size means to buy, while negative one means to sell. Set to 0 to close the position
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price Order price. Set to 0 to use market price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets close
     *
     * @return bool|null
     */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
     * Sets close
     *
     * @param bool|null $close Set to true if trying to close the position
     *
     * @return $this
     */
    public function setClose($close)
    {
        $this->container['close'] = $close;

        return $this;
    }

    /**
     * Gets tif
     *
     * @return string|null
     */
    public function getTif()
    {
        return $this->container['tif'];
    }

    /**
     * Sets tif
     *
     * @param string|null $tif Time in force. If using market price, only `ioc` is supported.  - gtc: GoodTillCancelled - ioc: ImmediateOrCancelled
     *
     * @return $this
     */
    public function setTif($tif)
    {
        $allowedValues = $this->getTifAllowableValues();
        if (!is_null($tif) && !in_array($tif, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tif', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tif'] = $tif;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text How the order is created. Possible values are: web, api and app
     *
     * @return $this
     */
    public function setText($text)
    {
        $allowedValues = $this->getTextAllowableValues();
        if (!is_null($text) && !in_array($text, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets reduce_only
     *
     * @return bool|null
     */
    public function getReduceOnly()
    {
        return $this->container['reduce_only'];
    }

    /**
     * Sets reduce_only
     *
     * @param bool|null $reduce_only Set to true to create an post-only order
     *
     * @return $this
     */
    public function setReduceOnly($reduce_only)
    {
        $this->container['reduce_only'] = $reduce_only;

        return $this;
    }

    /**
     * Gets is_reduce_only
     *
     * @return bool|null
     */
    public function getIsReduceOnly()
    {
        return $this->container['is_reduce_only'];
    }

    /**
     * Sets is_reduce_only
     *
     * @param bool|null $is_reduce_only Is the order post-only
     *
     * @return $this
     */
    public function setIsReduceOnly($is_reduce_only)
    {
        $this->container['is_reduce_only'] = $is_reduce_only;

        return $this;
    }

    /**
     * Gets is_close
     *
     * @return bool|null
     */
    public function getIsClose()
    {
        return $this->container['is_close'];
    }

    /**
     * Sets is_close
     *
     * @param bool|null $is_close Is the order to close position
     *
     * @return $this
     */
    public function setIsClose($is_close)
    {
        $this->container['is_close'] = $is_close;

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


