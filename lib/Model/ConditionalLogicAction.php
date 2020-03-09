<?php
/**
 * ConditionalLogicAction
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
 * ConditionalLogicAction Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConditionalLogicAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'conditionalLogicAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objectEntityID' => 'string',
        'objectEntityType' => 'string',
        'requireSignerAttachment' => 'bool',
        'isHidden' => 'bool',
        'isShown' => 'bool',
        'isRequired' => 'bool',
        'requirePayment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'objectEntityID' => null,
        'objectEntityType' => null,
        'requireSignerAttachment' => null,
        'isHidden' => null,
        'isShown' => null,
        'isRequired' => null,
        'requirePayment' => null
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
        'objectEntityID' => 'objectEntityID',
        'objectEntityType' => 'objectEntityType',
        'requireSignerAttachment' => 'requireSignerAttachment',
        'isHidden' => 'isHidden',
        'isShown' => 'isShown',
        'isRequired' => 'isRequired',
        'requirePayment' => 'requirePayment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objectEntityID' => 'setObjectEntityID',
        'objectEntityType' => 'setObjectEntityType',
        'requireSignerAttachment' => 'setRequireSignerAttachment',
        'isHidden' => 'setIsHidden',
        'isShown' => 'setIsShown',
        'isRequired' => 'setIsRequired',
        'requirePayment' => 'setRequirePayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objectEntityID' => 'getObjectEntityID',
        'objectEntityType' => 'getObjectEntityType',
        'requireSignerAttachment' => 'getRequireSignerAttachment',
        'isHidden' => 'getIsHidden',
        'isShown' => 'getIsShown',
        'isRequired' => 'getIsRequired',
        'requirePayment' => 'getRequirePayment'
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
        $this->container['objectEntityID'] = isset($data['objectEntityID']) ? $data['objectEntityID'] : null;
        $this->container['objectEntityType'] = isset($data['objectEntityType']) ? $data['objectEntityType'] : null;
        $this->container['requireSignerAttachment'] = isset($data['requireSignerAttachment']) ? $data['requireSignerAttachment'] : null;
        $this->container['isHidden'] = isset($data['isHidden']) ? $data['isHidden'] : null;
        $this->container['isShown'] = isset($data['isShown']) ? $data['isShown'] : null;
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
        $this->container['requirePayment'] = isset($data['requirePayment']) ? $data['requirePayment'] : null;
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
        if (!is_null($this->container['objectEntityType']) && !in_array($this->container['objectEntityType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'objectEntityType', must be one of '%s'",
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
     * Gets objectEntityID
     *
     * @return string|null
     */
    public function getObjectEntityID()
    {
        return $this->container['objectEntityID'];
    }

    /**
     * Sets objectEntityID
     *
     * @param string|null $objectEntityID links action to field
     *
     * @return $this
     */
    public function setObjectEntityID($objectEntityID)
    {
        $this->container['objectEntityID'] = $objectEntityID;

        return $this;
    }

    /**
     * Gets objectEntityType
     *
     * @return string|null
     */
    public function getObjectEntityType()
    {
        return $this->container['objectEntityType'];
    }

    /**
     * Sets objectEntityType
     *
     * @param string|null $objectEntityType objectEntityType
     *
     * @return $this
     */
    public function setObjectEntityType($objectEntityType)
    {
        $allowedValues = $this->getObjectEntityTypeAllowableValues();
        if (!is_null($objectEntityType) && !in_array($objectEntityType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'objectEntityType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['objectEntityType'] = $objectEntityType;

        return $this;
    }

    /**
     * Gets requireSignerAttachment
     *
     * @return bool|null
     */
    public function getRequireSignerAttachment()
    {
        return $this->container['requireSignerAttachment'];
    }

    /**
     * Sets requireSignerAttachment
     *
     * @param bool|null $requireSignerAttachment requireSignerAttachment
     *
     * @return $this
     */
    public function setRequireSignerAttachment($requireSignerAttachment)
    {
        $this->container['requireSignerAttachment'] = $requireSignerAttachment;

        return $this;
    }

    /**
     * Gets isHidden
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['isHidden'];
    }

    /**
     * Sets isHidden
     *
     * @param bool|null $isHidden isHidden
     *
     * @return $this
     */
    public function setIsHidden($isHidden)
    {
        $this->container['isHidden'] = $isHidden;

        return $this;
    }

    /**
     * Gets isShown
     *
     * @return bool|null
     */
    public function getIsShown()
    {
        return $this->container['isShown'];
    }

    /**
     * Sets isShown
     *
     * @param bool|null $isShown isShown
     *
     * @return $this
     */
    public function setIsShown($isShown)
    {
        $this->container['isShown'] = $isShown;

        return $this;
    }

    /**
     * Gets isRequired
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
     * Sets isRequired
     *
     * @param bool|null $isRequired isRequired
     *
     * @return $this
     */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;

        return $this;
    }

    /**
     * Gets requirePayment
     *
     * @return bool|null
     */
    public function getRequirePayment()
    {
        return $this->container['requirePayment'];
    }

    /**
     * Sets requirePayment
     *
     * @param bool|null $requirePayment requirePayment
     *
     * @return $this
     */
    public function setRequirePayment($requirePayment)
    {
        $this->container['requirePayment'] = $requirePayment;

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


