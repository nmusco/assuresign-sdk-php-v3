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
        'additionalAgreement' => 'string',
        'additionalDisclosures' => 'string',
        'additionalTerms' => 'string',
        'cultureType' => 'string',
        'documentID' => 'string',
        'name' => 'string',
        'fileExtension' => 'string',
        'pageCount' => 'int',
        'signingDeviceEnabled' => 'bool',
        'isFinalized' => 'bool',
        'completionDate' => '\DateTime',
        'declinedDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'additionalAgreement' => null,
        'additionalDisclosures' => null,
        'additionalTerms' => null,
        'cultureType' => null,
        'documentID' => 'uuid',
        'name' => null,
        'fileExtension' => null,
        'pageCount' => 'int32',
        'signingDeviceEnabled' => null,
        'isFinalized' => null,
        'completionDate' => 'date-time',
        'declinedDate' => 'date-time'
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
        'additionalAgreement' => 'additionalAgreement',
        'additionalDisclosures' => 'additionalDisclosures',
        'additionalTerms' => 'additionalTerms',
        'cultureType' => 'cultureType',
        'documentID' => 'documentID',
        'name' => 'name',
        'fileExtension' => 'fileExtension',
        'pageCount' => 'pageCount',
        'signingDeviceEnabled' => 'signingDeviceEnabled',
        'isFinalized' => 'isFinalized',
        'completionDate' => 'completionDate',
        'declinedDate' => 'declinedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalAgreement' => 'setAdditionalAgreement',
        'additionalDisclosures' => 'setAdditionalDisclosures',
        'additionalTerms' => 'setAdditionalTerms',
        'cultureType' => 'setCultureType',
        'documentID' => 'setDocumentID',
        'name' => 'setName',
        'fileExtension' => 'setFileExtension',
        'pageCount' => 'setPageCount',
        'signingDeviceEnabled' => 'setSigningDeviceEnabled',
        'isFinalized' => 'setIsFinalized',
        'completionDate' => 'setCompletionDate',
        'declinedDate' => 'setDeclinedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalAgreement' => 'getAdditionalAgreement',
        'additionalDisclosures' => 'getAdditionalDisclosures',
        'additionalTerms' => 'getAdditionalTerms',
        'cultureType' => 'getCultureType',
        'documentID' => 'getDocumentID',
        'name' => 'getName',
        'fileExtension' => 'getFileExtension',
        'pageCount' => 'getPageCount',
        'signingDeviceEnabled' => 'getSigningDeviceEnabled',
        'isFinalized' => 'getIsFinalized',
        'completionDate' => 'getCompletionDate',
        'declinedDate' => 'getDeclinedDate'
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
        $this->container['additionalAgreement'] = isset($data['additionalAgreement']) ? $data['additionalAgreement'] : null;
        $this->container['additionalDisclosures'] = isset($data['additionalDisclosures']) ? $data['additionalDisclosures'] : null;
        $this->container['additionalTerms'] = isset($data['additionalTerms']) ? $data['additionalTerms'] : null;
        $this->container['cultureType'] = isset($data['cultureType']) ? $data['cultureType'] : null;
        $this->container['documentID'] = isset($data['documentID']) ? $data['documentID'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fileExtension'] = isset($data['fileExtension']) ? $data['fileExtension'] : null;
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
        $this->container['signingDeviceEnabled'] = isset($data['signingDeviceEnabled']) ? $data['signingDeviceEnabled'] : null;
        $this->container['isFinalized'] = isset($data['isFinalized']) ? $data['isFinalized'] : null;
        $this->container['completionDate'] = isset($data['completionDate']) ? $data['completionDate'] : null;
        $this->container['declinedDate'] = isset($data['declinedDate']) ? $data['declinedDate'] : null;
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
     * Gets additionalAgreement
     *
     * @return string|null
     */
    public function getAdditionalAgreement()
    {
        return $this->container['additionalAgreement'];
    }

    /**
     * Sets additionalAgreement
     *
     * @param string|null $additionalAgreement additionalAgreement
     *
     * @return $this
     */
    public function setAdditionalAgreement($additionalAgreement)
    {
        $this->container['additionalAgreement'] = $additionalAgreement;

        return $this;
    }

    /**
     * Gets additionalDisclosures
     *
     * @return string|null
     */
    public function getAdditionalDisclosures()
    {
        return $this->container['additionalDisclosures'];
    }

    /**
     * Sets additionalDisclosures
     *
     * @param string|null $additionalDisclosures additionalDisclosures
     *
     * @return $this
     */
    public function setAdditionalDisclosures($additionalDisclosures)
    {
        $this->container['additionalDisclosures'] = $additionalDisclosures;

        return $this;
    }

    /**
     * Gets additionalTerms
     *
     * @return string|null
     */
    public function getAdditionalTerms()
    {
        return $this->container['additionalTerms'];
    }

    /**
     * Sets additionalTerms
     *
     * @param string|null $additionalTerms additionalTerms
     *
     * @return $this
     */
    public function setAdditionalTerms($additionalTerms)
    {
        $this->container['additionalTerms'] = $additionalTerms;

        return $this;
    }

    /**
     * Gets cultureType
     *
     * @return string|null
     */
    public function getCultureType()
    {
        return $this->container['cultureType'];
    }

    /**
     * Sets cultureType
     *
     * @param string|null $cultureType cultureType
     *
     * @return $this
     */
    public function setCultureType($cultureType)
    {
        $this->container['cultureType'] = $cultureType;

        return $this;
    }

    /**
     * Gets documentID
     *
     * @return string|null
     */
    public function getDocumentID()
    {
        return $this->container['documentID'];
    }

    /**
     * Sets documentID
     *
     * @param string|null $documentID documentID
     *
     * @return $this
     */
    public function setDocumentID($documentID)
    {
        $this->container['documentID'] = $documentID;

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
     * Gets fileExtension
     *
     * @return string|null
     */
    public function getFileExtension()
    {
        return $this->container['fileExtension'];
    }

    /**
     * Sets fileExtension
     *
     * @param string|null $fileExtension fileExtension
     *
     * @return $this
     */
    public function setFileExtension($fileExtension)
    {
        $this->container['fileExtension'] = $fileExtension;

        return $this;
    }

    /**
     * Gets pageCount
     *
     * @return int|null
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
     * Sets pageCount
     *
     * @param int|null $pageCount pageCount
     *
     * @return $this
     */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;

        return $this;
    }

    /**
     * Gets signingDeviceEnabled
     *
     * @return bool|null
     */
    public function getSigningDeviceEnabled()
    {
        return $this->container['signingDeviceEnabled'];
    }

    /**
     * Sets signingDeviceEnabled
     *
     * @param bool|null $signingDeviceEnabled signingDeviceEnabled
     *
     * @return $this
     */
    public function setSigningDeviceEnabled($signingDeviceEnabled)
    {
        $this->container['signingDeviceEnabled'] = $signingDeviceEnabled;

        return $this;
    }

    /**
     * Gets isFinalized
     *
     * @return bool|null
     */
    public function getIsFinalized()
    {
        return $this->container['isFinalized'];
    }

    /**
     * Sets isFinalized
     *
     * @param bool|null $isFinalized isFinalized
     *
     * @return $this
     */
    public function setIsFinalized($isFinalized)
    {
        $this->container['isFinalized'] = $isFinalized;

        return $this;
    }

    /**
     * Gets completionDate
     *
     * @return \DateTime|null
     */
    public function getCompletionDate()
    {
        return $this->container['completionDate'];
    }

    /**
     * Sets completionDate
     *
     * @param \DateTime|null $completionDate completionDate
     *
     * @return $this
     */
    public function setCompletionDate($completionDate)
    {
        $this->container['completionDate'] = $completionDate;

        return $this;
    }

    /**
     * Gets declinedDate
     *
     * @return \DateTime|null
     */
    public function getDeclinedDate()
    {
        return $this->container['declinedDate'];
    }

    /**
     * Sets declinedDate
     *
     * @param \DateTime|null $declinedDate declinedDate
     *
     * @return $this
     */
    public function setDeclinedDate($declinedDate)
    {
        $this->container['declinedDate'] = $declinedDate;

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

