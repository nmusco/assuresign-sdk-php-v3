<?php
/**
 * DocumentApiModel
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
 * DocumentApiModel Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentApiModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'documentApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_agreement' => 'string',
        'additional_disclosures' => 'string',
        'additional_terms' => 'string',
        'culture_type' => 'string',
        'document_id' => 'string',
        'name' => 'string',
        'file_extension' => 'string',
        'page_count' => 'int',
        'signing_device_enabled' => 'bool',
        'is_finalized' => 'bool',
        'completion_date' => '\DateTime',
        'declined_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'additional_agreement' => null,
        'additional_disclosures' => null,
        'additional_terms' => null,
        'culture_type' => null,
        'document_id' => 'uuid',
        'name' => null,
        'file_extension' => null,
        'page_count' => 'int32',
        'signing_device_enabled' => null,
        'is_finalized' => null,
        'completion_date' => 'date-time',
        'declined_date' => 'date-time'
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
        'additional_agreement' => 'additionalAgreement',
        'additional_disclosures' => 'additionalDisclosures',
        'additional_terms' => 'additionalTerms',
        'culture_type' => 'cultureType',
        'document_id' => 'documentID',
        'name' => 'name',
        'file_extension' => 'fileExtension',
        'page_count' => 'pageCount',
        'signing_device_enabled' => 'signingDeviceEnabled',
        'is_finalized' => 'isFinalized',
        'completion_date' => 'completionDate',
        'declined_date' => 'declinedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_agreement' => 'setAdditionalAgreement',
        'additional_disclosures' => 'setAdditionalDisclosures',
        'additional_terms' => 'setAdditionalTerms',
        'culture_type' => 'setCultureType',
        'document_id' => 'setDocumentId',
        'name' => 'setName',
        'file_extension' => 'setFileExtension',
        'page_count' => 'setPageCount',
        'signing_device_enabled' => 'setSigningDeviceEnabled',
        'is_finalized' => 'setIsFinalized',
        'completion_date' => 'setCompletionDate',
        'declined_date' => 'setDeclinedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_agreement' => 'getAdditionalAgreement',
        'additional_disclosures' => 'getAdditionalDisclosures',
        'additional_terms' => 'getAdditionalTerms',
        'culture_type' => 'getCultureType',
        'document_id' => 'getDocumentId',
        'name' => 'getName',
        'file_extension' => 'getFileExtension',
        'page_count' => 'getPageCount',
        'signing_device_enabled' => 'getSigningDeviceEnabled',
        'is_finalized' => 'getIsFinalized',
        'completion_date' => 'getCompletionDate',
        'declined_date' => 'getDeclinedDate'
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
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_agreement'] = isset($data['additional_agreement']) ? $data['additional_agreement'] : null;
        $this->container['additional_disclosures'] = isset($data['additional_disclosures']) ? $data['additional_disclosures'] : null;
        $this->container['additional_terms'] = isset($data['additional_terms']) ? $data['additional_terms'] : null;
        $this->container['culture_type'] = isset($data['culture_type']) ? $data['culture_type'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['file_extension'] = isset($data['file_extension']) ? $data['file_extension'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['signing_device_enabled'] = isset($data['signing_device_enabled']) ? $data['signing_device_enabled'] : null;
        $this->container['is_finalized'] = isset($data['is_finalized']) ? $data['is_finalized'] : null;
        $this->container['completion_date'] = isset($data['completion_date']) ? $data['completion_date'] : null;
        $this->container['declined_date'] = isset($data['declined_date']) ? $data['declined_date'] : null;
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
     * Gets additional_agreement
     *
     * @return string|null
     */
    public function getAdditionalAgreement()
    {
        return $this->container['additional_agreement'];
    }

    /**
     * Sets additional_agreement
     *
     * @param string|null $additional_agreement additional_agreement
     *
     * @return $this
     */
    public function setAdditionalAgreement($additional_agreement)
    {
        $this->container['additional_agreement'] = $additional_agreement;

        return $this;
    }

    /**
     * Gets additional_disclosures
     *
     * @return string|null
     */
    public function getAdditionalDisclosures()
    {
        return $this->container['additional_disclosures'];
    }

    /**
     * Sets additional_disclosures
     *
     * @param string|null $additional_disclosures additional_disclosures
     *
     * @return $this
     */
    public function setAdditionalDisclosures($additional_disclosures)
    {
        $this->container['additional_disclosures'] = $additional_disclosures;

        return $this;
    }

    /**
     * Gets additional_terms
     *
     * @return string|null
     */
    public function getAdditionalTerms()
    {
        return $this->container['additional_terms'];
    }

    /**
     * Sets additional_terms
     *
     * @param string|null $additional_terms additional_terms
     *
     * @return $this
     */
    public function setAdditionalTerms($additional_terms)
    {
        $this->container['additional_terms'] = $additional_terms;

        return $this;
    }

    /**
     * Gets culture_type
     *
     * @return string|null
     */
    public function getCultureType()
    {
        return $this->container['culture_type'];
    }

    /**
     * Sets culture_type
     *
     * @param string|null $culture_type culture_type
     *
     * @return $this
     */
    public function setCultureType($culture_type)
    {
        $this->container['culture_type'] = $culture_type;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string|null $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

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
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string|null
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string|null $file_extension file_extension
     *
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets page_count
     *
     * @return int|null
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     *
     * @param int|null $page_count page_count
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets signing_device_enabled
     *
     * @return bool|null
     */
    public function getSigningDeviceEnabled()
    {
        return $this->container['signing_device_enabled'];
    }

    /**
     * Sets signing_device_enabled
     *
     * @param bool|null $signing_device_enabled signing_device_enabled
     *
     * @return $this
     */
    public function setSigningDeviceEnabled($signing_device_enabled)
    {
        $this->container['signing_device_enabled'] = $signing_device_enabled;

        return $this;
    }

    /**
     * Gets is_finalized
     *
     * @return bool|null
     */
    public function getIsFinalized()
    {
        return $this->container['is_finalized'];
    }

    /**
     * Sets is_finalized
     *
     * @param bool|null $is_finalized is_finalized
     *
     * @return $this
     */
    public function setIsFinalized($is_finalized)
    {
        $this->container['is_finalized'] = $is_finalized;

        return $this;
    }

    /**
     * Gets completion_date
     *
     * @return \DateTime|null
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     *
     * @param \DateTime|null $completion_date completion_date
     *
     * @return $this
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets declined_date
     *
     * @return \DateTime|null
     */
    public function getDeclinedDate()
    {
        return $this->container['declined_date'];
    }

    /**
     * Sets declined_date
     *
     * @param \DateTime|null $declined_date declined_date
     *
     * @return $this
     */
    public function setDeclinedDate($declined_date)
    {
        $this->container['declined_date'] = $declined_date;

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


