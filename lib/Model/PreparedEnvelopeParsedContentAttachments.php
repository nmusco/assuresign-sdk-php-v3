<?php
/**
 * PreparedEnvelopeParsedContentAttachments
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
 * PreparedEnvelopeParsedContentAttachments Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PreparedEnvelopeParsedContentAttachments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'preparedEnvelopeParsed_content_attachments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_multiple_uploads' => 'bool',
        'instructions' => 'string',
        'label' => 'string',
        'required' => 'bool',
        'signer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'allow_multiple_uploads' => null,
        'instructions' => null,
        'label' => null,
        'required' => null,
        'signer' => null
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
        'allow_multiple_uploads' => 'allowMultipleUploads',
        'instructions' => 'instructions',
        'label' => 'label',
        'required' => 'required',
        'signer' => 'signer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_multiple_uploads' => 'setAllowMultipleUploads',
        'instructions' => 'setInstructions',
        'label' => 'setLabel',
        'required' => 'setRequired',
        'signer' => 'setSigner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_multiple_uploads' => 'getAllowMultipleUploads',
        'instructions' => 'getInstructions',
        'label' => 'getLabel',
        'required' => 'getRequired',
        'signer' => 'getSigner'
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
        $this->container['allow_multiple_uploads'] = isset($data['allow_multiple_uploads']) ? $data['allow_multiple_uploads'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['signer'] = isset($data['signer']) ? $data['signer'] : null;
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
     * Gets allow_multiple_uploads
     *
     * @return bool|null
     */
    public function getAllowMultipleUploads()
    {
        return $this->container['allow_multiple_uploads'];
    }

    /**
     * Sets allow_multiple_uploads
     *
     * @param bool|null $allow_multiple_uploads Specifies whether or not signers will be allowed to upload more than one file for the requested attachment.
     *
     * @return $this
     */
    public function setAllowMultipleUploads($allow_multiple_uploads)
    {
        $this->container['allow_multiple_uploads'] = $allow_multiple_uploads;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string|null $instructions Specifies the instructions that will be presented to the signer when they are prompted to upload the attachment during signing.
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

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
     * @param string|null $label Specifies a label for the signer attachment.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required Specifies whether or not signers will be required to upload a file for the requested attachment.
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return string|null
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param string|null $signer Specifies the 'Label' of the signer that will be prompted to upload the attachement.
     *
     * @return $this
     */
    public function setSigner($signer)
    {
        $this->container['signer'] = $signer;

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


