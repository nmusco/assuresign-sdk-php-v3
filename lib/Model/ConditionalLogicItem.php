<?php
/**
 * ConditionalLogicItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AssureSign DocumentNOW API Documentation
 *
 * <h2>AssureSign DocumentNOW electronic signature APIs (envelopes and documents)</h2><h3>For DocumentNOW user and account management APIs, go to [Account API](https://account.assuresign.net/api/v3.6/account)</h3>
 *
 * The version of the OpenAPI document: 3.6
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Nmusco\AssureSign\v3\Model;

use \ArrayAccess;
use \Nmusco\AssureSign\v3\ObjectSerializer;

/**
 * ConditionalLogicItem Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConditionalLogicItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'conditionalLogicItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'andOrType' => 'string',
        'conditions' => '\Nmusco\AssureSign\v3\Model\ConditionalLogicCondition[]',
        'actions' => '\Nmusco\AssureSign\v3\Model\ConditionalLogicAction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'andOrType' => null,
        'conditions' => null,
        'actions' => null
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
        'andOrType' => 'andOrType',
        'conditions' => 'conditions',
        'actions' => 'actions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'andOrType' => 'setAndOrType',
        'conditions' => 'setConditions',
        'actions' => 'setActions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'andOrType' => 'getAndOrType',
        'conditions' => 'getConditions',
        'actions' => 'getActions'
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

    const AND_OR_TYPE__AND = 'And';
    const AND_OR_TYPE__OR = 'Or';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAndOrTypeAllowableValues()
    {
        return [
            self::AND_OR_TYPE__AND,
            self::AND_OR_TYPE__OR,
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
        $this->container['andOrType'] = isset($data['andOrType']) ? $data['andOrType'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAndOrTypeAllowableValues();
        if (!is_null($this->container['andOrType']) && !in_array($this->container['andOrType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'andOrType', must be one of '%s'",
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
     * Gets andOrType
     *
     * @return string|null
     */
    public function getAndOrType()
    {
        return $this->container['andOrType'];
    }

    /**
     * Sets andOrType
     *
     * @param string|null $andOrType andOrType
     *
     * @return $this
     */
    public function setAndOrType($andOrType)
    {
        $allowedValues = $this->getAndOrTypeAllowableValues();
        if (!is_null($andOrType) && !in_array($andOrType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'andOrType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['andOrType'] = $andOrType;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \Nmusco\AssureSign\v3\Model\ConditionalLogicCondition[]|null
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \Nmusco\AssureSign\v3\Model\ConditionalLogicCondition[]|null $conditions conditions
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \Nmusco\AssureSign\v3\Model\ConditionalLogicAction[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \Nmusco\AssureSign\v3\Model\ConditionalLogicAction[]|null $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

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

