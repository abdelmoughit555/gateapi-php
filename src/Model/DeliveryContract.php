<?php

/**
 * DeliveryContract
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
 * DeliveryContract Class Doc Comment
 *
 * @category    Class
 * @description Futures contract details
 * @package     GateApi
 * @author      GateIO
 * @link        https://www.gate.io
 */
class DeliveryContract implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DeliveryContract';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name' => 'string',
        'underlying' => 'string',
        'cycle' => 'string',
        'type' => 'string',
        'quanto_multiplier' => 'string',
        'leverage_min' => 'string',
        'leverage_max' => 'string',
        'maintenance_rate' => 'string',
        'mark_type' => 'string',
        'mark_price' => 'string',
        'index_price' => 'string',
        'last_price' => 'string',
        'maker_fee_rate' => 'string',
        'taker_fee_rate' => 'string',
        'order_price_round' => 'string',
        'mark_price_round' => 'string',
        'basis_rate' => 'string',
        'basis_value' => 'string',
        'basis_impact_value' => 'string',
        'settle_price' => 'string',
        'settle_price_interval' => 'int',
        'settle_price_duration' => 'int',
        'expire_time' => 'int',
        'risk_limit_base' => 'string',
        'risk_limit_step' => 'string',
        'risk_limit_max' => 'string',
        'order_size_min' => 'int',
        'order_size_max' => 'int',
        'order_price_deviate' => 'string',
        'ref_discount_rate' => 'string',
        'ref_rebate_rate' => 'string',
        'orderbook_id' => 'int',
        'trade_id' => 'int',
        'trade_size' => 'int',
        'position_size' => 'int',
        'config_change_time' => 'double',
        'in_delisting' => 'bool',
        'orders_limit' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'name' => null,
        'underlying' => null,
        'cycle' => null,
        'type' => null,
        'quanto_multiplier' => null,
        'leverage_min' => null,
        'leverage_max' => null,
        'maintenance_rate' => null,
        'mark_type' => null,
        'mark_price' => null,
        'index_price' => null,
        'last_price' => null,
        'maker_fee_rate' => null,
        'taker_fee_rate' => null,
        'order_price_round' => null,
        'mark_price_round' => null,
        'basis_rate' => null,
        'basis_value' => null,
        'basis_impact_value' => null,
        'settle_price' => null,
        'settle_price_interval' => null,
        'settle_price_duration' => null,
        'expire_time' => 'int64',
        'risk_limit_base' => null,
        'risk_limit_step' => null,
        'risk_limit_max' => null,
        'order_size_min' => 'int64',
        'order_size_max' => 'int64',
        'order_price_deviate' => null,
        'ref_discount_rate' => null,
        'ref_rebate_rate' => null,
        'orderbook_id' => 'int64',
        'trade_id' => 'int64',
        'trade_size' => 'int64',
        'position_size' => 'int64',
        'config_change_time' => 'double',
        'in_delisting' => null,
        'orders_limit' => null
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
        'name' => 'name',
        'underlying' => 'underlying',
        'cycle' => 'cycle',
        'type' => 'type',
        'quanto_multiplier' => 'quanto_multiplier',
        'leverage_min' => 'leverage_min',
        'leverage_max' => 'leverage_max',
        'maintenance_rate' => 'maintenance_rate',
        'mark_type' => 'mark_type',
        'mark_price' => 'mark_price',
        'index_price' => 'index_price',
        'last_price' => 'last_price',
        'maker_fee_rate' => 'maker_fee_rate',
        'taker_fee_rate' => 'taker_fee_rate',
        'order_price_round' => 'order_price_round',
        'mark_price_round' => 'mark_price_round',
        'basis_rate' => 'basis_rate',
        'basis_value' => 'basis_value',
        'basis_impact_value' => 'basis_impact_value',
        'settle_price' => 'settle_price',
        'settle_price_interval' => 'settle_price_interval',
        'settle_price_duration' => 'settle_price_duration',
        'expire_time' => 'expire_time',
        'risk_limit_base' => 'risk_limit_base',
        'risk_limit_step' => 'risk_limit_step',
        'risk_limit_max' => 'risk_limit_max',
        'order_size_min' => 'order_size_min',
        'order_size_max' => 'order_size_max',
        'order_price_deviate' => 'order_price_deviate',
        'ref_discount_rate' => 'ref_discount_rate',
        'ref_rebate_rate' => 'ref_rebate_rate',
        'orderbook_id' => 'orderbook_id',
        'trade_id' => 'trade_id',
        'trade_size' => 'trade_size',
        'position_size' => 'position_size',
        'config_change_time' => 'config_change_time',
        'in_delisting' => 'in_delisting',
        'orders_limit' => 'orders_limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'underlying' => 'setUnderlying',
        'cycle' => 'setCycle',
        'type' => 'setType',
        'quanto_multiplier' => 'setQuantoMultiplier',
        'leverage_min' => 'setLeverageMin',
        'leverage_max' => 'setLeverageMax',
        'maintenance_rate' => 'setMaintenanceRate',
        'mark_type' => 'setMarkType',
        'mark_price' => 'setMarkPrice',
        'index_price' => 'setIndexPrice',
        'last_price' => 'setLastPrice',
        'maker_fee_rate' => 'setMakerFeeRate',
        'taker_fee_rate' => 'setTakerFeeRate',
        'order_price_round' => 'setOrderPriceRound',
        'mark_price_round' => 'setMarkPriceRound',
        'basis_rate' => 'setBasisRate',
        'basis_value' => 'setBasisValue',
        'basis_impact_value' => 'setBasisImpactValue',
        'settle_price' => 'setSettlePrice',
        'settle_price_interval' => 'setSettlePriceInterval',
        'settle_price_duration' => 'setSettlePriceDuration',
        'expire_time' => 'setExpireTime',
        'risk_limit_base' => 'setRiskLimitBase',
        'risk_limit_step' => 'setRiskLimitStep',
        'risk_limit_max' => 'setRiskLimitMax',
        'order_size_min' => 'setOrderSizeMin',
        'order_size_max' => 'setOrderSizeMax',
        'order_price_deviate' => 'setOrderPriceDeviate',
        'ref_discount_rate' => 'setRefDiscountRate',
        'ref_rebate_rate' => 'setRefRebateRate',
        'orderbook_id' => 'setOrderbookId',
        'trade_id' => 'setTradeId',
        'trade_size' => 'setTradeSize',
        'position_size' => 'setPositionSize',
        'config_change_time' => 'setConfigChangeTime',
        'in_delisting' => 'setInDelisting',
        'orders_limit' => 'setOrdersLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'underlying' => 'getUnderlying',
        'cycle' => 'getCycle',
        'type' => 'getType',
        'quanto_multiplier' => 'getQuantoMultiplier',
        'leverage_min' => 'getLeverageMin',
        'leverage_max' => 'getLeverageMax',
        'maintenance_rate' => 'getMaintenanceRate',
        'mark_type' => 'getMarkType',
        'mark_price' => 'getMarkPrice',
        'index_price' => 'getIndexPrice',
        'last_price' => 'getLastPrice',
        'maker_fee_rate' => 'getMakerFeeRate',
        'taker_fee_rate' => 'getTakerFeeRate',
        'order_price_round' => 'getOrderPriceRound',
        'mark_price_round' => 'getMarkPriceRound',
        'basis_rate' => 'getBasisRate',
        'basis_value' => 'getBasisValue',
        'basis_impact_value' => 'getBasisImpactValue',
        'settle_price' => 'getSettlePrice',
        'settle_price_interval' => 'getSettlePriceInterval',
        'settle_price_duration' => 'getSettlePriceDuration',
        'expire_time' => 'getExpireTime',
        'risk_limit_base' => 'getRiskLimitBase',
        'risk_limit_step' => 'getRiskLimitStep',
        'risk_limit_max' => 'getRiskLimitMax',
        'order_size_min' => 'getOrderSizeMin',
        'order_size_max' => 'getOrderSizeMax',
        'order_price_deviate' => 'getOrderPriceDeviate',
        'ref_discount_rate' => 'getRefDiscountRate',
        'ref_rebate_rate' => 'getRefRebateRate',
        'orderbook_id' => 'getOrderbookId',
        'trade_id' => 'getTradeId',
        'trade_size' => 'getTradeSize',
        'position_size' => 'getPositionSize',
        'config_change_time' => 'getConfigChangeTime',
        'in_delisting' => 'getInDelisting',
        'orders_limit' => 'getOrdersLimit'
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

    const CYCLE_WEEKLY = 'WEEKLY';
    const CYCLE_BI_WEEKLY = 'BI-WEEKLY';
    const CYCLE_QUARTERLY = 'QUARTERLY';
    const CYCLE_BI_QUARTERLY = 'BI-QUARTERLY';
    const TYPE_INVERSE = 'inverse';
    const TYPE_DIRECT = 'direct';
    const MARK_TYPE_INTERNAL = 'internal';
    const MARK_TYPE_INDEX = 'index';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCycleAllowableValues()
    {
        return [
            self::CYCLE_WEEKLY,
            self::CYCLE_BI_WEEKLY,
            self::CYCLE_QUARTERLY,
            self::CYCLE_BI_QUARTERLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INVERSE,
            self::TYPE_DIRECT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarkTypeAllowableValues()
    {
        return [
            self::MARK_TYPE_INTERNAL,
            self::MARK_TYPE_INDEX,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['underlying'] = isset($data['underlying']) ? $data['underlying'] : null;
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['quanto_multiplier'] = isset($data['quanto_multiplier']) ? $data['quanto_multiplier'] : null;
        $this->container['leverage_min'] = isset($data['leverage_min']) ? $data['leverage_min'] : null;
        $this->container['leverage_max'] = isset($data['leverage_max']) ? $data['leverage_max'] : null;
        $this->container['maintenance_rate'] = isset($data['maintenance_rate']) ? $data['maintenance_rate'] : null;
        $this->container['mark_type'] = isset($data['mark_type']) ? $data['mark_type'] : null;
        $this->container['mark_price'] = isset($data['mark_price']) ? $data['mark_price'] : null;
        $this->container['index_price'] = isset($data['index_price']) ? $data['index_price'] : null;
        $this->container['last_price'] = isset($data['last_price']) ? $data['last_price'] : null;
        $this->container['maker_fee_rate'] = isset($data['maker_fee_rate']) ? $data['maker_fee_rate'] : null;
        $this->container['taker_fee_rate'] = isset($data['taker_fee_rate']) ? $data['taker_fee_rate'] : null;
        $this->container['order_price_round'] = isset($data['order_price_round']) ? $data['order_price_round'] : null;
        $this->container['mark_price_round'] = isset($data['mark_price_round']) ? $data['mark_price_round'] : null;
        $this->container['basis_rate'] = isset($data['basis_rate']) ? $data['basis_rate'] : null;
        $this->container['basis_value'] = isset($data['basis_value']) ? $data['basis_value'] : null;
        $this->container['basis_impact_value'] = isset($data['basis_impact_value']) ? $data['basis_impact_value'] : null;
        $this->container['settle_price'] = isset($data['settle_price']) ? $data['settle_price'] : null;
        $this->container['settle_price_interval'] = isset($data['settle_price_interval']) ? $data['settle_price_interval'] : null;
        $this->container['settle_price_duration'] = isset($data['settle_price_duration']) ? $data['settle_price_duration'] : null;
        $this->container['expire_time'] = isset($data['expire_time']) ? $data['expire_time'] : null;
        $this->container['risk_limit_base'] = isset($data['risk_limit_base']) ? $data['risk_limit_base'] : null;
        $this->container['risk_limit_step'] = isset($data['risk_limit_step']) ? $data['risk_limit_step'] : null;
        $this->container['risk_limit_max'] = isset($data['risk_limit_max']) ? $data['risk_limit_max'] : null;
        $this->container['order_size_min'] = isset($data['order_size_min']) ? $data['order_size_min'] : null;
        $this->container['order_size_max'] = isset($data['order_size_max']) ? $data['order_size_max'] : null;
        $this->container['order_price_deviate'] = isset($data['order_price_deviate']) ? $data['order_price_deviate'] : null;
        $this->container['ref_discount_rate'] = isset($data['ref_discount_rate']) ? $data['ref_discount_rate'] : null;
        $this->container['ref_rebate_rate'] = isset($data['ref_rebate_rate']) ? $data['ref_rebate_rate'] : null;
        $this->container['orderbook_id'] = isset($data['orderbook_id']) ? $data['orderbook_id'] : null;
        $this->container['trade_id'] = isset($data['trade_id']) ? $data['trade_id'] : null;
        $this->container['trade_size'] = isset($data['trade_size']) ? $data['trade_size'] : null;
        $this->container['position_size'] = isset($data['position_size']) ? $data['position_size'] : null;
        $this->container['config_change_time'] = isset($data['config_change_time']) ? $data['config_change_time'] : null;
        $this->container['in_delisting'] = isset($data['in_delisting']) ? $data['in_delisting'] : null;
        $this->container['orders_limit'] = isset($data['orders_limit']) ? $data['orders_limit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCycleAllowableValues();
        if (!is_null($this->container['cycle']) && !in_array($this->container['cycle'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cycle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMarkTypeAllowableValues();
        if (!is_null($this->container['mark_type']) && !in_array($this->container['mark_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mark_type', must be one of '%s'",
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Futures contract
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets underlying
     *
     * @return string|null
     */
    public function getUnderlying()
    {
        return $this->container['underlying'];
    }

    /**
     * Sets underlying
     *
     * @param string|null $underlying Underlying
     *
     * @return $this
     */
    public function setUnderlying($underlying)
    {
        $this->container['underlying'] = $underlying;

        return $this;
    }

    /**
     * Gets cycle
     *
     * @return string|null
     */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
     * Sets cycle
     *
     * @param string|null $cycle Cycle type, e.g. WEEKLY, QUARTERLY
     *
     * @return $this
     */
    public function setCycle($cycle)
    {
        $allowedValues = $this->getCycleAllowableValues();
        if (!is_null($cycle) && !in_array($cycle, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cycle', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cycle'] = $cycle;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Futures contract type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets quanto_multiplier
     *
     * @return string|null
     */
    public function getQuantoMultiplier()
    {
        return $this->container['quanto_multiplier'];
    }

    /**
     * Sets quanto_multiplier
     *
     * @param string|null $quanto_multiplier Multiplier used in converting from invoicing to settlement currency
     *
     * @return $this
     */
    public function setQuantoMultiplier($quanto_multiplier)
    {
        $this->container['quanto_multiplier'] = $quanto_multiplier;

        return $this;
    }

    /**
     * Gets leverage_min
     *
     * @return string|null
     */
    public function getLeverageMin()
    {
        return $this->container['leverage_min'];
    }

    /**
     * Sets leverage_min
     *
     * @param string|null $leverage_min Minimum leverage
     *
     * @return $this
     */
    public function setLeverageMin($leverage_min)
    {
        $this->container['leverage_min'] = $leverage_min;

        return $this;
    }

    /**
     * Gets leverage_max
     *
     * @return string|null
     */
    public function getLeverageMax()
    {
        return $this->container['leverage_max'];
    }

    /**
     * Sets leverage_max
     *
     * @param string|null $leverage_max Maximum leverage
     *
     * @return $this
     */
    public function setLeverageMax($leverage_max)
    {
        $this->container['leverage_max'] = $leverage_max;

        return $this;
    }

    /**
     * Gets maintenance_rate
     *
     * @return string|null
     */
    public function getMaintenanceRate()
    {
        return $this->container['maintenance_rate'];
    }

    /**
     * Sets maintenance_rate
     *
     * @param string|null $maintenance_rate Maintenance rate of margin
     *
     * @return $this
     */
    public function setMaintenanceRate($maintenance_rate)
    {
        $this->container['maintenance_rate'] = $maintenance_rate;

        return $this;
    }

    /**
     * Gets mark_type
     *
     * @return string|null
     */
    public function getMarkType()
    {
        return $this->container['mark_type'];
    }

    /**
     * Sets mark_type
     *
     * @param string|null $mark_type Mark price type, internal - based on internal trading, index - based on external index price
     *
     * @return $this
     */
    public function setMarkType($mark_type)
    {
        $allowedValues = $this->getMarkTypeAllowableValues();
        if (!is_null($mark_type) && !in_array($mark_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mark_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mark_type'] = $mark_type;

        return $this;
    }

    /**
     * Gets mark_price
     *
     * @return string|null
     */
    public function getMarkPrice()
    {
        return $this->container['mark_price'];
    }

    /**
     * Sets mark_price
     *
     * @param string|null $mark_price Current mark price
     *
     * @return $this
     */
    public function setMarkPrice($mark_price)
    {
        $this->container['mark_price'] = $mark_price;

        return $this;
    }

    /**
     * Gets index_price
     *
     * @return string|null
     */
    public function getIndexPrice()
    {
        return $this->container['index_price'];
    }

    /**
     * Sets index_price
     *
     * @param string|null $index_price Current index price
     *
     * @return $this
     */
    public function setIndexPrice($index_price)
    {
        $this->container['index_price'] = $index_price;

        return $this;
    }

    /**
     * Gets last_price
     *
     * @return string|null
     */
    public function getLastPrice()
    {
        return $this->container['last_price'];
    }

    /**
     * Sets last_price
     *
     * @param string|null $last_price Last trading price
     *
     * @return $this
     */
    public function setLastPrice($last_price)
    {
        $this->container['last_price'] = $last_price;

        return $this;
    }

    /**
     * Gets maker_fee_rate
     *
     * @return string|null
     */
    public function getMakerFeeRate()
    {
        return $this->container['maker_fee_rate'];
    }

    /**
     * Sets maker_fee_rate
     *
     * @param string|null $maker_fee_rate Maker fee rate, where negative means rebate
     *
     * @return $this
     */
    public function setMakerFeeRate($maker_fee_rate)
    {
        $this->container['maker_fee_rate'] = $maker_fee_rate;

        return $this;
    }

    /**
     * Gets taker_fee_rate
     *
     * @return string|null
     */
    public function getTakerFeeRate()
    {
        return $this->container['taker_fee_rate'];
    }

    /**
     * Sets taker_fee_rate
     *
     * @param string|null $taker_fee_rate Taker fee rate
     *
     * @return $this
     */
    public function setTakerFeeRate($taker_fee_rate)
    {
        $this->container['taker_fee_rate'] = $taker_fee_rate;

        return $this;
    }

    /**
     * Gets order_price_round
     *
     * @return string|null
     */
    public function getOrderPriceRound()
    {
        return $this->container['order_price_round'];
    }

    /**
     * Sets order_price_round
     *
     * @param string|null $order_price_round Minimum order price increment
     *
     * @return $this
     */
    public function setOrderPriceRound($order_price_round)
    {
        $this->container['order_price_round'] = $order_price_round;

        return $this;
    }

    /**
     * Gets mark_price_round
     *
     * @return string|null
     */
    public function getMarkPriceRound()
    {
        return $this->container['mark_price_round'];
    }

    /**
     * Sets mark_price_round
     *
     * @param string|null $mark_price_round Minimum mark price increment
     *
     * @return $this
     */
    public function setMarkPriceRound($mark_price_round)
    {
        $this->container['mark_price_round'] = $mark_price_round;

        return $this;
    }

    /**
     * Gets basis_rate
     *
     * @return string|null
     */
    public function getBasisRate()
    {
        return $this->container['basis_rate'];
    }

    /**
     * Sets basis_rate
     *
     * @param string|null $basis_rate Fair basis rate
     *
     * @return $this
     */
    public function setBasisRate($basis_rate)
    {
        $this->container['basis_rate'] = $basis_rate;

        return $this;
    }

    /**
     * Gets basis_value
     *
     * @return string|null
     */
    public function getBasisValue()
    {
        return $this->container['basis_value'];
    }

    /**
     * Sets basis_value
     *
     * @param string|null $basis_value Fair basis value
     *
     * @return $this
     */
    public function setBasisValue($basis_value)
    {
        $this->container['basis_value'] = $basis_value;

        return $this;
    }

    /**
     * Gets basis_impact_value
     *
     * @return string|null
     */
    public function getBasisImpactValue()
    {
        return $this->container['basis_impact_value'];
    }

    /**
     * Sets basis_impact_value
     *
     * @param string|null $basis_impact_value Funding used for calculating impact bid, ask price
     *
     * @return $this
     */
    public function setBasisImpactValue($basis_impact_value)
    {
        $this->container['basis_impact_value'] = $basis_impact_value;

        return $this;
    }

    /**
     * Gets settle_price
     *
     * @return string|null
     */
    public function getSettlePrice()
    {
        return $this->container['settle_price'];
    }

    /**
     * Sets settle_price
     *
     * @param string|null $settle_price Settle price
     *
     * @return $this
     */
    public function setSettlePrice($settle_price)
    {
        $this->container['settle_price'] = $settle_price;

        return $this;
    }

    /**
     * Gets settle_price_interval
     *
     * @return int|null
     */
    public function getSettlePriceInterval()
    {
        return $this->container['settle_price_interval'];
    }

    /**
     * Sets settle_price_interval
     *
     * @param int|null $settle_price_interval Settle price update interval
     *
     * @return $this
     */
    public function setSettlePriceInterval($settle_price_interval)
    {
        $this->container['settle_price_interval'] = $settle_price_interval;

        return $this;
    }

    /**
     * Gets settle_price_duration
     *
     * @return int|null
     */
    public function getSettlePriceDuration()
    {
        return $this->container['settle_price_duration'];
    }

    /**
     * Sets settle_price_duration
     *
     * @param int|null $settle_price_duration Settle price update duration in seconds
     *
     * @return $this
     */
    public function setSettlePriceDuration($settle_price_duration)
    {
        $this->container['settle_price_duration'] = $settle_price_duration;

        return $this;
    }

    /**
     * Gets expire_time
     *
     * @return int|null
     */
    public function getExpireTime()
    {
        return $this->container['expire_time'];
    }

    /**
     * Sets expire_time
     *
     * @param int|null $expire_time Contract expiry timestamp
     *
     * @return $this
     */
    public function setExpireTime($expire_time)
    {
        $this->container['expire_time'] = $expire_time;

        return $this;
    }

    /**
     * Gets risk_limit_base
     *
     * @return string|null
     */
    public function getRiskLimitBase()
    {
        return $this->container['risk_limit_base'];
    }

    /**
     * Sets risk_limit_base
     *
     * @param string|null $risk_limit_base Risk limit base
     *
     * @return $this
     */
    public function setRiskLimitBase($risk_limit_base)
    {
        $this->container['risk_limit_base'] = $risk_limit_base;

        return $this;
    }

    /**
     * Gets risk_limit_step
     *
     * @return string|null
     */
    public function getRiskLimitStep()
    {
        return $this->container['risk_limit_step'];
    }

    /**
     * Sets risk_limit_step
     *
     * @param string|null $risk_limit_step Step of adjusting risk limit
     *
     * @return $this
     */
    public function setRiskLimitStep($risk_limit_step)
    {
        $this->container['risk_limit_step'] = $risk_limit_step;

        return $this;
    }

    /**
     * Gets risk_limit_max
     *
     * @return string|null
     */
    public function getRiskLimitMax()
    {
        return $this->container['risk_limit_max'];
    }

    /**
     * Sets risk_limit_max
     *
     * @param string|null $risk_limit_max Maximum risk limit the contract allowed
     *
     * @return $this
     */
    public function setRiskLimitMax($risk_limit_max)
    {
        $this->container['risk_limit_max'] = $risk_limit_max;

        return $this;
    }

    /**
     * Gets order_size_min
     *
     * @return int|null
     */
    public function getOrderSizeMin()
    {
        return $this->container['order_size_min'];
    }

    /**
     * Sets order_size_min
     *
     * @param int|null $order_size_min Minimum order size the contract allowed
     *
     * @return $this
     */
    public function setOrderSizeMin($order_size_min)
    {
        $this->container['order_size_min'] = $order_size_min;

        return $this;
    }

    /**
     * Gets order_size_max
     *
     * @return int|null
     */
    public function getOrderSizeMax()
    {
        return $this->container['order_size_max'];
    }

    /**
     * Sets order_size_max
     *
     * @param int|null $order_size_max Maximum order size the contract allowed
     *
     * @return $this
     */
    public function setOrderSizeMax($order_size_max)
    {
        $this->container['order_size_max'] = $order_size_max;

        return $this;
    }

    /**
     * Gets order_price_deviate
     *
     * @return string|null
     */
    public function getOrderPriceDeviate()
    {
        return $this->container['order_price_deviate'];
    }

    /**
     * Sets order_price_deviate
     *
     * @param string|null $order_price_deviate deviation between order price and current index price. If price of an order is denoted as order_price, it must meet the following condition:      abs(order_price - mark_price) <= mark_price * order_price_deviate
     *
     * @return $this
     */
    public function setOrderPriceDeviate($order_price_deviate)
    {
        $this->container['order_price_deviate'] = $order_price_deviate;

        return $this;
    }

    /**
     * Gets ref_discount_rate
     *
     * @return string|null
     */
    public function getRefDiscountRate()
    {
        return $this->container['ref_discount_rate'];
    }

    /**
     * Sets ref_discount_rate
     *
     * @param string|null $ref_discount_rate Referral fee rate discount
     *
     * @return $this
     */
    public function setRefDiscountRate($ref_discount_rate)
    {
        $this->container['ref_discount_rate'] = $ref_discount_rate;

        return $this;
    }

    /**
     * Gets ref_rebate_rate
     *
     * @return string|null
     */
    public function getRefRebateRate()
    {
        return $this->container['ref_rebate_rate'];
    }

    /**
     * Sets ref_rebate_rate
     *
     * @param string|null $ref_rebate_rate Referrer commission rate
     *
     * @return $this
     */
    public function setRefRebateRate($ref_rebate_rate)
    {
        $this->container['ref_rebate_rate'] = $ref_rebate_rate;

        return $this;
    }

    /**
     * Gets orderbook_id
     *
     * @return int|null
     */
    public function getOrderbookId()
    {
        return $this->container['orderbook_id'];
    }

    /**
     * Sets orderbook_id
     *
     * @param int|null $orderbook_id Current orderbook ID
     *
     * @return $this
     */
    public function setOrderbookId($orderbook_id)
    {
        $this->container['orderbook_id'] = $orderbook_id;

        return $this;
    }

    /**
     * Gets trade_id
     *
     * @return int|null
     */
    public function getTradeId()
    {
        return $this->container['trade_id'];
    }

    /**
     * Sets trade_id
     *
     * @param int|null $trade_id Current trade ID
     *
     * @return $this
     */
    public function setTradeId($trade_id)
    {
        $this->container['trade_id'] = $trade_id;

        return $this;
    }

    /**
     * Gets trade_size
     *
     * @return int|null
     */
    public function getTradeSize()
    {
        return $this->container['trade_size'];
    }

    /**
     * Sets trade_size
     *
     * @param int|null $trade_size Historical accumulated trade size
     *
     * @return $this
     */
    public function setTradeSize($trade_size)
    {
        $this->container['trade_size'] = $trade_size;

        return $this;
    }

    /**
     * Gets position_size
     *
     * @return int|null
     */
    public function getPositionSize()
    {
        return $this->container['position_size'];
    }

    /**
     * Sets position_size
     *
     * @param int|null $position_size Current total long position size
     *
     * @return $this
     */
    public function setPositionSize($position_size)
    {
        $this->container['position_size'] = $position_size;

        return $this;
    }

    /**
     * Gets config_change_time
     *
     * @return double|null
     */
    public function getConfigChangeTime()
    {
        return $this->container['config_change_time'];
    }

    /**
     * Sets config_change_time
     *
     * @param double|null $config_change_time Last changed time of configuration
     *
     * @return $this
     */
    public function setConfigChangeTime($config_change_time)
    {
        $this->container['config_change_time'] = $config_change_time;

        return $this;
    }

    /**
     * Gets in_delisting
     *
     * @return bool|null
     */
    public function getInDelisting()
    {
        return $this->container['in_delisting'];
    }

    /**
     * Sets in_delisting
     *
     * @param bool|null $in_delisting Contract is delisting
     *
     * @return $this
     */
    public function setInDelisting($in_delisting)
    {
        $this->container['in_delisting'] = $in_delisting;

        return $this;
    }

    /**
     * Gets orders_limit
     *
     * @return int|null
     */
    public function getOrdersLimit()
    {
        return $this->container['orders_limit'];
    }

    /**
     * Sets orders_limit
     *
     * @param int|null $orders_limit Maximum number of open orders
     *
     * @return $this
     */
    public function setOrdersLimit($orders_limit)
    {
        $this->container['orders_limit'] = $orders_limit;

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
