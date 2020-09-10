<?php
/**
 * ConditionalLogicItemActions
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
 * AssureSign DocumentNOW electronic signature APIs (envelopes and documents) For DocumentNOW user and account management APIs, go to [Account API](https://account.assuresign.net/api/v3.6/account)
 *
 * The version of the OpenAPI document: 3.6
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * ConditionalLogicItemActions Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConditionalLogicItemActions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'conditionalLogicItem_actions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object_entity_id' => 'string',
        'object_entity_type' => 'string',
        'require_signer_attachment' => 'bool',
        'is_hidden' => 'bool',
        'is_shown' => 'bool',
        'is_required' => 'bool',
        'require_payment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'object_entity_id' => null,
        'object_entity_type' => null,
        'require_signer_attachment' => null,
        'is_hidden' => null,
        'is_shown' => null,
        'is_required' => null,
        'require_payment' => null
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
        'object_entity_id' => 'objectEntityID',
        'object_entity_type' => 'objectEntityType',
        'require_signer_attachment' => 'requireSignerAttachment',
        'is_hidden' => 'isHidden',
        'is_shown' => 'isShown',
        'is_required' => 'isRequired',
        'require_payment' => 'requirePayment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_entity_id' => 'setObjectEntityId',
        'object_entity_type' => 'setObjectEntityType',
        'require_signer_attachment' => 'setRequireSignerAttachment',
        'is_hidden' => 'setIsHidden',
        'is_shown' => 'setIsShown',
        'is_required' => 'setIsRequired',
        'require_payment' => 'setRequirePayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_entity_id' => 'getObjectEntityId',
        'object_entity_type' => 'getObjectEntityType',
        'require_signer_attachment' => 'getRequireSignerAttachment',
        'is_hidden' => 'getIsHidden',
        'is_shown' => 'getIsShown',
        'is_required' => 'getIsRequired',
        'require_payment' => 'getRequirePayment'
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

    const OBJECT_ENTITY_TYPE_FIELD = 'Field';
    const OBJECT_ENTITY_TYPE_SIGNER_ATTACHMENT = 'SignerAttachment';
    const OBJECT_ENTITY_TYPE_SIGNER_PAYMENT = 'SignerPayment';
    

    
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
            self::OBJECT_ENTITY_TYPE_SIGNER_PAYMENT,
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
        $this->container['object_entity_id'] = isset($data['object_entity_id']) ? $data['object_entity_id'] : null;
        $this->container['object_entity_type'] = isset($data['object_entity_type']) ? $data['object_entity_type'] : null;
        $this->container['require_signer_attachment'] = isset($data['require_signer_attachment']) ? $data['require_signer_attachment'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['is_shown'] = isset($data['is_shown']) ? $data['is_shown'] : null;
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['require_payment'] = isset($data['require_payment']) ? $data['require_payment'] : null;
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
     * @return string|null
     */
    public function getObjectEntityId()
    {
        return $this->container['object_entity_id'];
    }

    /**
     * Sets object_entity_id
     *
     * @param string|null $object_entity_id links action to field
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
     * @return string|null
     */
    public function getObjectEntityType()
    {
        return $this->container['object_entity_type'];
    }

    /**
     * Sets object_entity_type
     *
     * @param string|null $object_entity_type object_entity_type
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
     * Gets require_signer_attachment
     *
     * @return bool|null
     */
    public function getRequireSignerAttachment()
    {
        return $this->container['require_signer_attachment'];
    }

    /**
     * Sets require_signer_attachment
     *
     * @param bool|null $require_signer_attachment require_signer_attachment
     *
     * @return $this
     */
    public function setRequireSignerAttachment($require_signer_attachment)
    {
        $this->container['require_signer_attachment'] = $require_signer_attachment;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool|null $is_hidden is_hidden
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets is_shown
     *
     * @return bool|null
     */
    public function getIsShown()
    {
        return $this->container['is_shown'];
    }

    /**
     * Sets is_shown
     *
     * @param bool|null $is_shown is_shown
     *
     * @return $this
     */
    public function setIsShown($is_shown)
    {
        $this->container['is_shown'] = $is_shown;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required is_required
     *
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets require_payment
     *
     * @return bool|null
     */
    public function getRequirePayment()
    {
        return $this->container['require_payment'];
    }

    /**
     * Sets require_payment
     *
     * @param bool|null $require_payment require_payment
     *
     * @return $this
     */
    public function setRequirePayment($require_payment)
    {
        $this->container['require_payment'] = $require_payment;

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


