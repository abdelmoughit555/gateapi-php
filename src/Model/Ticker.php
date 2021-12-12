<?php

/**
 * Ticker
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
 * Ticker Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class Ticker implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Ticker';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'currency_pair' => 'string',
        'last' => 'string',
        'lowest_ask' => 'string',
        'highest_bid' => 'string',
        'change_percentage' => 'string',
        'base_volume' => 'string',
        'quote_volume' => 'string',
        'high_24h' => 'string',
        'low_24h' => 'string',
        'etf_net_value' => 'string',
        'etf_pre_net_value' => 'string',
        'etf_pre_timestamp' => 'int',
        'etf_leverage' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'currency_pair' => null,
        'last' => null,
        'lowest_ask' => null,
        'highest_bid' => null,
        'change_percentage' => null,
        'base_volume' => null,
        'quote_volume' => null,
        'high_24h' => null,
        'low_24h' => null,
        'etf_net_value' => null,
        'etf_pre_net_value' => null,
        'etf_pre_timestamp' => 'int64',
        'etf_leverage' => null
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
        'currency_pair' => 'currency_pair',
        'last' => 'last',
        'lowest_ask' => 'lowest_ask',
        'highest_bid' => 'highest_bid',
        'change_percentage' => 'change_percentage',
        'base_volume' => 'base_volume',
        'quote_volume' => 'quote_volume',
        'high_24h' => 'high_24h',
        'low_24h' => 'low_24h',
        'etf_net_value' => 'etf_net_value',
        'etf_pre_net_value' => 'etf_pre_net_value',
        'etf_pre_timestamp' => 'etf_pre_timestamp',
        'etf_leverage' => 'etf_leverage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_pair' => 'setCurrencyPair',
        'last' => 'setLast',
        'lowest_ask' => 'setLowestAsk',
        'highest_bid' => 'setHighestBid',
        'change_percentage' => 'setChangePercentage',
        'base_volume' => 'setBaseVolume',
        'quote_volume' => 'setQuoteVolume',
        'high_24h' => 'setHigh24h',
        'low_24h' => 'setLow24h',
        'etf_net_value' => 'setEtfNetValue',
        'etf_pre_net_value' => 'setEtfPreNetValue',
        'etf_pre_timestamp' => 'setEtfPreTimestamp',
        'etf_leverage' => 'setEtfLeverage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_pair' => 'getCurrencyPair',
        'last' => 'getLast',
        'lowest_ask' => 'getLowestAsk',
        'highest_bid' => 'getHighestBid',
        'change_percentage' => 'getChangePercentage',
        'base_volume' => 'getBaseVolume',
        'quote_volume' => 'getQuoteVolume',
        'high_24h' => 'getHigh24h',
        'low_24h' => 'getLow24h',
        'etf_net_value' => 'getEtfNetValue',
        'etf_pre_net_value' => 'getEtfPreNetValue',
        'etf_pre_timestamp' => 'getEtfPreTimestamp',
        'etf_leverage' => 'getEtfLeverage'
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
    public $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['currency_pair'] = isset($data['currency_pair']) ? $data['currency_pair'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['lowest_ask'] = isset($data['lowest_ask']) ? $data['lowest_ask'] : null;
        $this->container['highest_bid'] = isset($data['highest_bid']) ? $data['highest_bid'] : null;
        $this->container['change_percentage'] = isset($data['change_percentage']) ? $data['change_percentage'] : null;
        $this->container['base_volume'] = isset($data['base_volume']) ? $data['base_volume'] : null;
        $this->container['quote_volume'] = isset($data['quote_volume']) ? $data['quote_volume'] : null;
        $this->container['high_24h'] = isset($data['high_24h']) ? $data['high_24h'] : null;
        $this->container['low_24h'] = isset($data['low_24h']) ? $data['low_24h'] : null;
        $this->container['etf_net_value'] = isset($data['etf_net_value']) ? $data['etf_net_value'] : null;
        $this->container['etf_pre_net_value'] = isset($data['etf_pre_net_value']) ? $data['etf_pre_net_value'] : null;
        $this->container['etf_pre_timestamp'] = isset($data['etf_pre_timestamp']) ? $data['etf_pre_timestamp'] : null;
        $this->container['etf_leverage'] = isset($data['etf_leverage']) ? $data['etf_leverage'] : null;
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
     * Gets currency_pair
     *
     * @return string|null
     */
    public function getCurrencyPair()
    {
        return $this->container['currency_pair'];
    }

    /**
     * Sets currency_pair
     *
     * @param string|null $currency_pair Currency pair
     *
     * @return $this
     */
    public function setCurrencyPair($currency_pair)
    {
        $this->container['currency_pair'] = $currency_pair;

        return $this;
    }

    /**
     * Gets last
     *
     * @return string|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param string|null $last Last trading price
     *
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets lowest_ask
     *
     * @return string|null
     */
    public function getLowestAsk()
    {
        return $this->container['lowest_ask'];
    }

    /**
     * Sets lowest_ask
     *
     * @param string|null $lowest_ask Lowest ask
     *
     * @return $this
     */
    public function setLowestAsk($lowest_ask)
    {
        $this->container['lowest_ask'] = $lowest_ask;

        return $this;
    }

    /**
     * Gets highest_bid
     *
     * @return string|null
     */
    public function getHighestBid()
    {
        return $this->container['highest_bid'];
    }

    /**
     * Sets highest_bid
     *
     * @param string|null $highest_bid Highest bid
     *
     * @return $this
     */
    public function setHighestBid($highest_bid)
    {
        $this->container['highest_bid'] = $highest_bid;

        return $this;
    }

    /**
     * Gets change_percentage
     *
     * @return string|null
     */
    public function getChangePercentage()
    {
        return $this->container['change_percentage'];
    }

    /**
     * Sets change_percentage
     *
     * @param string|null $change_percentage Change percentage.
     *
     * @return $this
     */
    public function setChangePercentage($change_percentage)
    {
        $this->container['change_percentage'] = $change_percentage;

        return $this;
    }

    /**
     * Gets base_volume
     *
     * @return string|null
     */
    public function getBaseVolume()
    {
        return $this->container['base_volume'];
    }

    /**
     * Sets base_volume
     *
     * @param string|null $base_volume Base currency trade volume
     *
     * @return $this
     */
    public function setBaseVolume($base_volume)
    {
        $this->container['base_volume'] = $base_volume;

        return $this;
    }

    /**
     * Gets quote_volume
     *
     * @return string|null
     */
    public function getQuoteVolume()
    {
        return $this->container['quote_volume'];
    }

    /**
     * Sets quote_volume
     *
     * @param string|null $quote_volume Quote currency trade volume
     *
     * @return $this
     */
    public function setQuoteVolume($quote_volume)
    {
        $this->container['quote_volume'] = $quote_volume;

        return $this;
    }

    /**
     * Gets high_24h
     *
     * @return string|null
     */
    public function getHigh24h()
    {
        return $this->container['high_24h'];
    }

    /**
     * Sets high_24h
     *
     * @param string|null $high_24h Highest price in 24h
     *
     * @return $this
     */
    public function setHigh24h($high_24h)
    {
        $this->container['high_24h'] = $high_24h;

        return $this;
    }

    /**
     * Gets low_24h
     *
     * @return string|null
     */
    public function getLow24h()
    {
        return $this->container['low_24h'];
    }

    /**
     * Sets low_24h
     *
     * @param string|null $low_24h Lowest price in 24h
     *
     * @return $this
     */
    public function setLow24h($low_24h)
    {
        $this->container['low_24h'] = $low_24h;

        return $this;
    }

    /**
     * Gets etf_net_value
     *
     * @return string|null
     */
    public function getEtfNetValue()
    {
        return $this->container['etf_net_value'];
    }

    /**
     * Sets etf_net_value
     *
     * @param string|null $etf_net_value ETF net value
     *
     * @return $this
     */
    public function setEtfNetValue($etf_net_value)
    {
        $this->container['etf_net_value'] = $etf_net_value;

        return $this;
    }

    /**
     * Gets etf_pre_net_value
     *
     * @return string|null
     */
    public function getEtfPreNetValue()
    {
        return $this->container['etf_pre_net_value'];
    }

    /**
     * Sets etf_pre_net_value
     *
     * @param string|null $etf_pre_net_value ETF previous net value at re-balancing time
     *
     * @return $this
     */
    public function setEtfPreNetValue($etf_pre_net_value)
    {
        $this->container['etf_pre_net_value'] = $etf_pre_net_value;

        return $this;
    }

    /**
     * Gets etf_pre_timestamp
     *
     * @return int|null
     */
    public function getEtfPreTimestamp()
    {
        return $this->container['etf_pre_timestamp'];
    }

    /**
     * Sets etf_pre_timestamp
     *
     * @param int|null $etf_pre_timestamp ETF previous re-balancing time
     *
     * @return $this
     */
    public function setEtfPreTimestamp($etf_pre_timestamp)
    {
        $this->container['etf_pre_timestamp'] = $etf_pre_timestamp;

        return $this;
    }

    /**
     * Gets etf_leverage
     *
     * @return string|null
     */
    public function getEtfLeverage()
    {
        return $this->container['etf_leverage'];
    }

    /**
     * Sets etf_leverage
     *
     * @param string|null $etf_leverage ETF current leverage
     *
     * @return $this
     */
    public function setEtfLeverage($etf_leverage)
    {
        $this->container['etf_leverage'] = $etf_leverage;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */

    public function offsetExists(mixed $offset)
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
