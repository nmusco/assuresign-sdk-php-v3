<?php
/**
 * ConditionalLogicCondition
 *
 * PHP version 5
 *
 * @category Class
 * @package  AssureSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AssureSign DocumentNOW API Documentation
 *
 * <h2>AssureSign DocumentNOW electronic signature APIs (envelopes and documents)</h2><h3>For DocumentNOW user and account management APIs, go to [Account API](https://localhost:44304/api/v3.6/account)</h3>
 *
 * OpenAPI spec version: 3.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.14
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nmusco\AssureSign\v3\Model;

use \ArrayAccess;
use \Nmusco\AssureSign\v3\ObjectSerializer;

/**
 * ConditionalLogicCondition Class Doc Comment
 *
 * @category Class
 * @package  AssureSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConditionalLogicCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'conditionalLogicCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object_entity_id' => 'string',
'object_entity_type' => 'string',
'regex' => 'string',
'compare_type' => 'string',
'conditional_value' => 'string',
'is_case_sensitive' => 'string',
'trim' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object_entity_id' => null,
'object_entity_type' => null,
'regex' => null,
'compare_type' => null,
'conditional_value' => null,
'is_case_sensitive' => null,
'trim' => null    ];

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
        'object_entity_id' => 'objectEntityID',
'object_entity_type' => 'objectEntityType',
'regex' => 'regex',
'compare_type' => 'compareType',
'conditional_value' => 'conditionalValue',
'is_case_sensitive' => 'isCaseSensitive',
'trim' => 'trim'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_entity_id' => 'setObjectEntityId',
'object_entity_type' => 'setObjectEntityType',
'regex' => 'setRegex',
'compare_type' => 'setCompareType',
'conditional_value' => 'setConditionalValue',
'is_case_sensitive' => 'setIsCaseSensitive',
'trim' => 'setTrim'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_entity_id' => 'getObjectEntityId',
'object_entity_type' => 'getObjectEntityType',
'regex' => 'getRegex',
'compare_type' => 'getCompareType',
'conditional_value' => 'getConditionalValue',
'is_case_sensitive' => 'getIsCaseSensitive',
'trim' => 'getTrim'    ];

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

    const OBJECT_ENTITY_TYPE_FIELD = 'Field';
const OBJECT_ENTITY_TYPE_SIGNER_ATTACHMENT = 'SignerAttachment';
const OBJECT_ENTITY_TYPE_SIGNER_PAYMENT = 'SignerPayment';
const COMPARE_TYPE_ANYTHING = 'Anything';
const COMPARE_TYPE_EQUAL_TO = 'EqualTo';
const COMPARE_TYPE_NOT_EQUAL_TO = 'NotEqualTo';
const COMPARE_TYPE_GREATER_THAN = 'GreaterThan';
const COMPARE_TYPE_LESS_THAN = 'LessThan';
const COMPARE_TYPE_SKIPPED = 'Skipped';
const COMPARE_TYPE_ENABLED = 'Enabled';
const COMPARE_TYPE_REGEX = 'Regex';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectEntityTypeAllowableValues()
    {
        return [
            self::OBJECT_ENTITY_TYPE_FIELD,
self::OBJECT_ENTITY_TYPE_SIGNER_ATTACHMENT,
self::OBJECT_ENTITY_TYPE_SIGNER_PAYMENT,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompareTypeAllowableValues()
    {
        return [
            self::COMPARE_TYPE_ANYTHING,
self::COMPARE_TYPE_EQUAL_TO,
self::COMPARE_TYPE_NOT_EQUAL_TO,
self::COMPARE_TYPE_GREATER_THAN,
self::COMPARE_TYPE_LESS_THAN,
self::COMPARE_TYPE_SKIPPED,
self::COMPARE_TYPE_ENABLED,
self::COMPARE_TYPE_REGEX,        ];
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
        $this->container['object_entity_id'] = isset($data['object_entity_id']) ? $data['object_entity_id'] : null;
        $this->container['object_entity_type'] = isset($data['object_entity_type']) ? $data['object_entity_type'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['compare_type'] = isset($data['compare_type']) ? $data['compare_type'] : null;
        $this->container['conditional_value'] = isset($data['conditional_value']) ? $data['conditional_value'] : null;
        $this->container['is_case_sensitive'] = isset($data['is_case_sensitive']) ? $data['is_case_sensitive'] : null;
        $this->container['trim'] = isset($data['trim']) ? $data['trim'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getObjectEntityTypeAllowableValues();
        if (!is_null($this->container['object_entity_type']) && !in_array($this->container['object_entity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'object_entity_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCompareTypeAllowableValues();
        if (!is_null($this->container['compare_type']) && !in_array($this->container['compare_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'compare_type', must be one of '%s'",
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
     * Gets object_entity_id
     *
     * @return string
     */
    public function getObjectEntityId()
    {
        return $this->container['object_entity_id'];
    }

    /**
     * Sets object_entity_id
     *
     * @param string $object_entity_id object_entity_id
     *
     * @return $this
     */
    public function setObjectEntityId($object_entity_id)
    {
        $this->container['object_entity_id'] = $object_entity_id;

        return $this;
    }

    /**
     * Gets object_entity_type
     *
     * @return string
     */
    public function getObjectEntityType()
    {
        return $this->container['object_entity_type'];
    }

    /**
     * Sets object_entity_type
     *
     * @param string $object_entity_type object_entity_type
     *
     * @return $this
     */
    public function setObjectEntityType($object_entity_type)
    {
        $allowedValues = $this->getObjectEntityTypeAllowableValues();
        if (!is_null($object_entity_type) && !in_array($object_entity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'object_entity_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object_entity_type'] = $object_entity_type;

        return $this;
    }

    /**
     * Gets regex
     *
     * @return string
     */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
     * Sets regex
     *
     * @param string $regex regex
     *
     * @return $this
     */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;

        return $this;
    }

    /**
     * Gets compare_type
     *
     * @return string
     */
    public function getCompareType()
    {
        return $this->container['compare_type'];
    }

    /**
     * Sets compare_type
     *
     * @param string $compare_type compare_type
     *
     * @return $this
     */
    public function setCompareType($compare_type)
    {
        $allowedValues = $this->getCompareTypeAllowableValues();
        if (!is_null($compare_type) && !in_array($compare_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'compare_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compare_type'] = $compare_type;

        return $this;
    }

    /**
     * Gets conditional_value
     *
     * @return string
     */
    public function getConditionalValue()
    {
        return $this->container['conditional_value'];
    }

    /**
     * Sets conditional_value
     *
     * @param string $conditional_value conditional_value
     *
     * @return $this
     */
    public function setConditionalValue($conditional_value)
    {
        $this->container['conditional_value'] = $conditional_value;

        return $this;
    }

    /**
     * Gets is_case_sensitive
     *
     * @return string
     */
    public function getIsCaseSensitive()
    {
        return $this->container['is_case_sensitive'];
    }

    /**
     * Sets is_case_sensitive
     *
     * @param string $is_case_sensitive is_case_sensitive
     *
     * @return $this
     */
    public function setIsCaseSensitive($is_case_sensitive)
    {
        $this->container['is_case_sensitive'] = $is_case_sensitive;

        return $this;
    }

    /**
     * Gets trim
     *
     * @return bool
     */
    public function getTrim()
    {
        return $this->container['trim'];
    }

    /**
     * Sets trim
     *
     * @param bool $trim trim
     *
     * @return $this
     */
    public function setTrim($trim)
    {
        $this->container['trim'] = $trim;

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
}
