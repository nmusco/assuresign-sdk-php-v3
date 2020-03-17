<?php
/**
 * TermsAndConditions
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
 * TermsAndConditions Class Doc Comment
 *
 * @category Class
 * @package  AssureSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TermsAndConditions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'termsAndConditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_compliance_statement' => 'string',
'additional_agreement_statement' => 'string',
'additional_extended_disclosures' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_compliance_statement' => null,
'additional_agreement_statement' => null,
'additional_extended_disclosures' => null    ];

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
        'additional_compliance_statement' => 'additionalComplianceStatement',
'additional_agreement_statement' => 'additionalAgreementStatement',
'additional_extended_disclosures' => 'additionalExtendedDisclosures'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_compliance_statement' => 'setAdditionalComplianceStatement',
'additional_agreement_statement' => 'setAdditionalAgreementStatement',
'additional_extended_disclosures' => 'setAdditionalExtendedDisclosures'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_compliance_statement' => 'getAdditionalComplianceStatement',
'additional_agreement_statement' => 'getAdditionalAgreementStatement',
'additional_extended_disclosures' => 'getAdditionalExtendedDisclosures'    ];

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
        $this->container['additional_compliance_statement'] = isset($data['additional_compliance_statement']) ? $data['additional_compliance_statement'] : null;
        $this->container['additional_agreement_statement'] = isset($data['additional_agreement_statement']) ? $data['additional_agreement_statement'] : null;
        $this->container['additional_extended_disclosures'] = isset($data['additional_extended_disclosures']) ? $data['additional_extended_disclosures'] : null;
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
     * Gets additional_compliance_statement
     *
     * @return string
     */
    public function getAdditionalComplianceStatement()
    {
        return $this->container['additional_compliance_statement'];
    }

    /**
     * Sets additional_compliance_statement
     *
     * @param string $additional_compliance_statement Optional information that will be appended to any default system or account terms.
     *
     * @return $this
     */
    public function setAdditionalComplianceStatement($additional_compliance_statement)
    {
        $this->container['additional_compliance_statement'] = $additional_compliance_statement;

        return $this;
    }

    /**
     * Gets additional_agreement_statement
     *
     * @return string
     */
    public function getAdditionalAgreementStatement()
    {
        return $this->container['additional_agreement_statement'];
    }

    /**
     * Sets additional_agreement_statement
     *
     * @param string $additional_agreement_statement Optional information that will be appended to any default system or account agreement terms.
     *
     * @return $this
     */
    public function setAdditionalAgreementStatement($additional_agreement_statement)
    {
        $this->container['additional_agreement_statement'] = $additional_agreement_statement;

        return $this;
    }

    /**
     * Gets additional_extended_disclosures
     *
     * @return string
     */
    public function getAdditionalExtendedDisclosures()
    {
        return $this->container['additional_extended_disclosures'];
    }

    /**
     * Sets additional_extended_disclosures
     *
     * @param string $additional_extended_disclosures Optional information that will be appended to any default system or account disclosures terms.
     *
     * @return $this
     */
    public function setAdditionalExtendedDisclosures($additional_extended_disclosures)
    {
        $this->container['additional_extended_disclosures'] = $additional_extended_disclosures;

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
