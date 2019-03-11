<?php
/**
 * Loan
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
 * Loan Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Loan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Loan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'create_time' => 'string',
        'expire_time' => 'string',
        'status' => 'string',
        'side' => 'string',
        'currency' => 'string',
        'rate' => 'string',
        'amount' => 'string',
        'days' => 'int',
        'auto_renew' => 'bool',
        'currency_pair' => 'string',
        'left' => 'string',
        'repaid' => 'string',
        'paid_interest' => 'string',
        'unpaid_interest' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'create_time' => null,
        'expire_time' => null,
        'status' => null,
        'side' => null,
        'currency' => null,
        'rate' => null,
        'amount' => null,
        'days' => null,
        'auto_renew' => null,
        'currency_pair' => null,
        'left' => null,
        'repaid' => null,
        'paid_interest' => null,
        'unpaid_interest' => null
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
        'id' => 'id',
        'create_time' => 'create_time',
        'expire_time' => 'expire_time',
        'status' => 'status',
        'side' => 'side',
        'currency' => 'currency',
        'rate' => 'rate',
        'amount' => 'amount',
        'days' => 'days',
        'auto_renew' => 'auto_renew',
        'currency_pair' => 'currency_pair',
        'left' => 'left',
        'repaid' => 'repaid',
        'paid_interest' => 'paid_interest',
        'unpaid_interest' => 'unpaid_interest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'create_time' => 'setCreateTime',
        'expire_time' => 'setExpireTime',
        'status' => 'setStatus',
        'side' => 'setSide',
        'currency' => 'setCurrency',
        'rate' => 'setRate',
        'amount' => 'setAmount',
        'days' => 'setDays',
        'auto_renew' => 'setAutoRenew',
        'currency_pair' => 'setCurrencyPair',
        'left' => 'setLeft',
        'repaid' => 'setRepaid',
        'paid_interest' => 'setPaidInterest',
        'unpaid_interest' => 'setUnpaidInterest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'create_time' => 'getCreateTime',
        'expire_time' => 'getExpireTime',
        'status' => 'getStatus',
        'side' => 'getSide',
        'currency' => 'getCurrency',
        'rate' => 'getRate',
        'amount' => 'getAmount',
        'days' => 'getDays',
        'auto_renew' => 'getAutoRenew',
        'currency_pair' => 'getCurrencyPair',
        'left' => 'getLeft',
        'repaid' => 'getRepaid',
        'paid_interest' => 'getPaidInterest',
        'unpaid_interest' => 'getUnpaidInterest'
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

    const STATUS_OPEN = 'open';
    const STATUS_LOANED = 'loaned';
    const STATUS_FINISHED = 'finished';
    const STATUS_AUTO_REPAID = 'auto_repaid';
    const SIDE_LEND = 'lend';
    const SIDE_BORROW = 'borrow';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_LOANED,
            self::STATUS_FINISHED,
            self::STATUS_AUTO_REPAID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideAllowableValues()
    {
        return [
            self::SIDE_LEND,
            self::SIDE_BORROW,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['expire_time'] = isset($data['expire_time']) ? $data['expire_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : false;
        $this->container['currency_pair'] = isset($data['currency_pair']) ? $data['currency_pair'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['repaid'] = isset($data['repaid']) ? $data['repaid'] : null;
        $this->container['paid_interest'] = isset($data['paid_interest']) ? $data['paid_interest'] : null;
        $this->container['unpaid_interest'] = isset($data['unpaid_interest']) ? $data['unpaid_interest'] : null;
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
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
        }
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($this->container['side']) && !in_array($this->container['side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['days'] === null) {
            $invalidProperties[] = "'days' can't be null";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Loan ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string|null $create_time Creation time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets expire_time
     *
     * @return string|null
     */
    public function getExpireTime()
    {
        return $this->container['expire_time'];
    }

    /**
     * Sets expire_time
     *
     * @param string|null $expire_time Repay time of the loan. No value will be returned for lending loan
     *
     * @return $this
     */
    public function setExpireTime($expire_time)
    {
        $this->container['expire_time'] = $expire_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Loan status  open - not fully loaned loaned - all loaned out for lending loan; loaned in for borrowing side finished - loan is finished, either being all repaid or cancelled by the lender auto_repaid - automatically repaid by the system
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string $side Loan side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $allowedValues = $this->getSideAllowableValues();
        if (!in_array($side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Loan currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string $rate Loan rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Loan amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int $days Loan days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets auto_renew
     *
     * @return bool|null
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     *
     * @param bool|null $auto_renew Auto renew the loan on expiration
     *
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
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
     * @param string|null $currency_pair Currency pair. Required for borrowing side
     *
     * @return $this
     */
    public function setCurrencyPair($currency_pair)
    {
        $this->container['currency_pair'] = $currency_pair;

        return $this;
    }

    /**
     * Gets left
     *
     * @return string|null
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param string|null $left Amount not lending out
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets repaid
     *
     * @return string|null
     */
    public function getRepaid()
    {
        return $this->container['repaid'];
    }

    /**
     * Sets repaid
     *
     * @param string|null $repaid Repaid amount
     *
     * @return $this
     */
    public function setRepaid($repaid)
    {
        $this->container['repaid'] = $repaid;

        return $this;
    }

    /**
     * Gets paid_interest
     *
     * @return string|null
     */
    public function getPaidInterest()
    {
        return $this->container['paid_interest'];
    }

    /**
     * Sets paid_interest
     *
     * @param string|null $paid_interest Repaid interest
     *
     * @return $this
     */
    public function setPaidInterest($paid_interest)
    {
        $this->container['paid_interest'] = $paid_interest;

        return $this;
    }

    /**
     * Gets unpaid_interest
     *
     * @return string|null
     */
    public function getUnpaidInterest()
    {
        return $this->container['unpaid_interest'];
    }

    /**
     * Sets unpaid_interest
     *
     * @param string|null $unpaid_interest Interest not repaid
     *
     * @return $this
     */
    public function setUnpaidInterest($unpaid_interest)
    {
        $this->container['unpaid_interest'] = $unpaid_interest;

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


