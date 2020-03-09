<?php
/**
 * Signer
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
 * Signer Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Signer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'signer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'label' => 'string',
        'mobilePhone' => 'string',
        'name' => 'string',
        'password' => 'string',
        'passwordPrompt' => 'string',
        'signatureStyle' => 'string',
        'smsAuthPhone' => 'string',
        'enableKba' => 'bool',
        'kba' => '\Nmusco\AssureSign\v3\Model\SignerKBA'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'email' => 'email',
        'label' => null,
        'mobilePhone' => null,
        'name' => null,
        'password' => null,
        'passwordPrompt' => null,
        'signatureStyle' => null,
        'smsAuthPhone' => null,
        'enableKba' => null,
        'kba' => null
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
        'email' => 'email',
        'label' => 'label',
        'mobilePhone' => 'mobilePhone',
        'name' => 'name',
        'password' => 'password',
        'passwordPrompt' => 'passwordPrompt',
        'signatureStyle' => 'signatureStyle',
        'smsAuthPhone' => 'smsAuthPhone',
        'enableKba' => 'enableKba',
        'kba' => 'kba'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'label' => 'setLabel',
        'mobilePhone' => 'setMobilePhone',
        'name' => 'setName',
        'password' => 'setPassword',
        'passwordPrompt' => 'setPasswordPrompt',
        'signatureStyle' => 'setSignatureStyle',
        'smsAuthPhone' => 'setSmsAuthPhone',
        'enableKba' => 'setEnableKba',
        'kba' => 'setKba'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'label' => 'getLabel',
        'mobilePhone' => 'getMobilePhone',
        'name' => 'getName',
        'password' => 'getPassword',
        'passwordPrompt' => 'getPasswordPrompt',
        'signatureStyle' => 'getSignatureStyle',
        'smsAuthPhone' => 'getSmsAuthPhone',
        'enableKba' => 'getEnableKba',
        'kba' => 'getKba'
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

    const SIGNATURE_STYLE_SELECTABLE = 'Selectable';
    const SIGNATURE_STYLE_DRAWN = 'Drawn';
    const SIGNATURE_STYLE_TYPED = 'Typed';
    const SIGNATURE_STYLE_CLASSIC = 'Classic';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureStyleAllowableValues()
    {
        return [
            self::SIGNATURE_STYLE_SELECTABLE,
            self::SIGNATURE_STYLE_DRAWN,
            self::SIGNATURE_STYLE_TYPED,
            self::SIGNATURE_STYLE_CLASSIC,
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['passwordPrompt'] = isset($data['passwordPrompt']) ? $data['passwordPrompt'] : null;
        $this->container['signatureStyle'] = isset($data['signatureStyle']) ? $data['signatureStyle'] : null;
        $this->container['smsAuthPhone'] = isset($data['smsAuthPhone']) ? $data['smsAuthPhone'] : null;
        $this->container['enableKba'] = isset($data['enableKba']) ? $data['enableKba'] : null;
        $this->container['kba'] = isset($data['kba']) ? $data['kba'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSignatureStyleAllowableValues();
        if (!is_null($this->container['signatureStyle']) && !in_array($this->container['signatureStyle'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signatureStyle', must be one of '%s'",
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Specifies the email address for the signer.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Specifies a label for the signer.  This label can be referenced when specifying the signer for a field or when specifying recipients for an email or SMS notification.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string|null $mobilePhone Specifies the mobile phone number for the signer.
     *
     * @return $this
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
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
     * @param string|null $name Specifies the full name for the signer.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Specifies a password for the signer that will need to be provided in order to access signing or envelope downloads.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets passwordPrompt
     *
     * @return string|null
     */
    public function getPasswordPrompt()
    {
        return $this->container['passwordPrompt'];
    }

    /**
     * Sets passwordPrompt
     *
     * @param string|null $passwordPrompt Specifies the prompt that will be presented to the signer indicating what to enter as a password.  For example: &apos;For security purposes, please enter the last 4 digits of your account number.&apos;
     *
     * @return $this
     */
    public function setPasswordPrompt($passwordPrompt)
    {
        $this->container['passwordPrompt'] = $passwordPrompt;

        return $this;
    }

    /**
     * Gets signatureStyle
     *
     * @return string|null
     */
    public function getSignatureStyle()
    {
        return $this->container['signatureStyle'];
    }

    /**
     * Sets signatureStyle
     *
     * @param string|null $signatureStyle Specifies the style of signature the signer will adopt for fields with a &apos;FieldType&apos; of &apos;Signature&apos;.
     *
     * @return $this
     */
    public function setSignatureStyle($signatureStyle)
    {
        $allowedValues = $this->getSignatureStyleAllowableValues();
        if (!is_null($signatureStyle) && !in_array($signatureStyle, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signatureStyle', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signatureStyle'] = $signatureStyle;

        return $this;
    }

    /**
     * Gets smsAuthPhone
     *
     * @return string|null
     */
    public function getSmsAuthPhone()
    {
        return $this->container['smsAuthPhone'];
    }

    /**
     * Sets smsAuthPhone
     *
     * @param string|null $smsAuthPhone Specifies the phone number that SMS Two-Factor authentication should use to authenticate the signer for signing or envelope downloads.
     *
     * @return $this
     */
    public function setSmsAuthPhone($smsAuthPhone)
    {
        $this->container['smsAuthPhone'] = $smsAuthPhone;

        return $this;
    }

    /**
     * Gets enableKba
     *
     * @return bool|null
     */
    public function getEnableKba()
    {
        return $this->container['enableKba'];
    }

    /**
     * Sets enableKba
     *
     * @param bool|null $enableKba When set to true, KBA property must be populated
     *
     * @return $this
     */
    public function setEnableKba($enableKba)
    {
        $this->container['enableKba'] = $enableKba;

        return $this;
    }

    /**
     * Gets kba
     *
     * @return \Nmusco\AssureSign\v3\Model\SignerKBA|null
     */
    public function getKba()
    {
        return $this->container['kba'];
    }

    /**
     * Sets kba
     *
     * @param \Nmusco\AssureSign\v3\Model\SignerKBA|null $kba kba
     *
     * @return $this
     */
    public function setKba($kba)
    {
        $this->container['kba'] = $kba;

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


