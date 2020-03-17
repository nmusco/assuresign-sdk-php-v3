<?php
/**
 * SigningLink
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
 * SigningLink Class Doc Comment
 *
 * @category Class
 * @package  AssureSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SigningLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'signingLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'envelope_id' => 'string',
'signatory_email' => 'string',
'signatory_mobile_phone' => 'string',
'url' => 'string',
'expiration_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'envelope_id' => 'uuid',
'signatory_email' => 'email',
'signatory_mobile_phone' => null,
'url' => null,
'expiration_date' => 'date-time'    ];

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
        'envelope_id' => 'envelopeID',
'signatory_email' => 'signatoryEmail',
'signatory_mobile_phone' => 'signatoryMobilePhone',
'url' => 'url',
'expiration_date' => 'expirationDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'envelope_id' => 'setEnvelopeId',
'signatory_email' => 'setSignatoryEmail',
'signatory_mobile_phone' => 'setSignatoryMobilePhone',
'url' => 'setUrl',
'expiration_date' => 'setExpirationDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'envelope_id' => 'getEnvelopeId',
'signatory_email' => 'getSignatoryEmail',
'signatory_mobile_phone' => 'getSignatoryMobilePhone',
'url' => 'getUrl',
'expiration_date' => 'getExpirationDate'    ];

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
        $this->container['envelope_id'] = isset($data['envelope_id']) ? $data['envelope_id'] : null;
        $this->container['signatory_email'] = isset($data['signatory_email']) ? $data['signatory_email'] : null;
        $this->container['signatory_mobile_phone'] = isset($data['signatory_mobile_phone']) ? $data['signatory_mobile_phone'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
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
     * Gets envelope_id
     *
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->container['envelope_id'];
    }

    /**
     * Sets envelope_id
     *
     * @param string $envelope_id envelope_id
     *
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        $this->container['envelope_id'] = $envelope_id;

        return $this;
    }

    /**
     * Gets signatory_email
     *
     * @return string
     */
    public function getSignatoryEmail()
    {
        return $this->container['signatory_email'];
    }

    /**
     * Sets signatory_email
     *
     * @param string $signatory_email signatory_email
     *
     * @return $this
     */
    public function setSignatoryEmail($signatory_email)
    {
        $this->container['signatory_email'] = $signatory_email;

        return $this;
    }

    /**
     * Gets signatory_mobile_phone
     *
     * @return string
     */
    public function getSignatoryMobilePhone()
    {
        return $this->container['signatory_mobile_phone'];
    }

    /**
     * Sets signatory_mobile_phone
     *
     * @param string $signatory_mobile_phone signatory_mobile_phone
     *
     * @return $this
     */
    public function setSignatoryMobilePhone($signatory_mobile_phone)
    {
        $this->container['signatory_mobile_phone'] = $signatory_mobile_phone;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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
