<?php
/**
 * TemplateParsedV34
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
 * TemplateParsedV34 Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TemplateParsedV34 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'templateParsedV3_4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => '\Nmusco\AssureSign\v3\Model\SubmissionV32',
        'placeholders' => '\Nmusco\AssureSign\v3\Model\Placeholder[]',
        'templates' => '\Nmusco\AssureSign\v3\Model\TemplatePlaceholderValuesV32[]',
        'description' => 'string',
        'isLocked' => 'bool',
        'isPartial' => 'bool',
        'canEdit' => 'bool',
        'accessibility' => 'string',
        'name' => 'string',
        'templateID' => 'string',
        'userAccountID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'content' => null,
        'placeholders' => null,
        'templates' => null,
        'description' => null,
        'isLocked' => null,
        'isPartial' => null,
        'canEdit' => null,
        'accessibility' => null,
        'name' => null,
        'templateID' => null,
        'userAccountID' => null
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
        'content' => 'content',
        'placeholders' => 'placeholders',
        'templates' => 'templates',
        'description' => 'description',
        'isLocked' => 'isLocked',
        'isPartial' => 'isPartial',
        'canEdit' => 'canEdit',
        'accessibility' => 'accessibility',
        'name' => 'name',
        'templateID' => 'templateID',
        'userAccountID' => 'userAccountID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'placeholders' => 'setPlaceholders',
        'templates' => 'setTemplates',
        'description' => 'setDescription',
        'isLocked' => 'setIsLocked',
        'isPartial' => 'setIsPartial',
        'canEdit' => 'setCanEdit',
        'accessibility' => 'setAccessibility',
        'name' => 'setName',
        'templateID' => 'setTemplateID',
        'userAccountID' => 'setUserAccountID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'placeholders' => 'getPlaceholders',
        'templates' => 'getTemplates',
        'description' => 'getDescription',
        'isLocked' => 'getIsLocked',
        'isPartial' => 'getIsPartial',
        'canEdit' => 'getCanEdit',
        'accessibility' => 'getAccessibility',
        'name' => 'getName',
        'templateID' => 'getTemplateID',
        'userAccountID' => 'getUserAccountID'
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

    const ACCESSIBILITY_USER = 'User';
    const ACCESSIBILITY_ACCOUNT = 'Account';
    const ACCESSIBILITY_ACCOUNT_AND_CHILDREN = 'AccountAndChildren';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessibilityAllowableValues()
    {
        return [
            self::ACCESSIBILITY_USER,
            self::ACCESSIBILITY_ACCOUNT,
            self::ACCESSIBILITY_ACCOUNT_AND_CHILDREN,
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['placeholders'] = isset($data['placeholders']) ? $data['placeholders'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isLocked'] = isset($data['isLocked']) ? $data['isLocked'] : null;
        $this->container['isPartial'] = isset($data['isPartial']) ? $data['isPartial'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['accessibility'] = isset($data['accessibility']) ? $data['accessibility'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['templateID'] = isset($data['templateID']) ? $data['templateID'] : null;
        $this->container['userAccountID'] = isset($data['userAccountID']) ? $data['userAccountID'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccessibilityAllowableValues();
        if (!is_null($this->container['accessibility']) && !in_array($this->container['accessibility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accessibility', must be one of '%s'",
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
     * Gets content
     *
     * @return \Nmusco\AssureSign\v3\Model\SubmissionV32|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Nmusco\AssureSign\v3\Model\SubmissionV32|null $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets placeholders
     *
     * @return \Nmusco\AssureSign\v3\Model\Placeholder[]|null
     */
    public function getPlaceholders()
    {
        return $this->container['placeholders'];
    }

    /**
     * Sets placeholders
     *
     * @param \Nmusco\AssureSign\v3\Model\Placeholder[]|null $placeholders Provides a list of the data elements used in the template that must be provided when referencing the template.
     *
     * @return $this
     */
    public function setPlaceholders($placeholders)
    {
        $this->container['placeholders'] = $placeholders;

        return $this;
    }

    /**
     * Gets templates
     *
     * @return \Nmusco\AssureSign\v3\Model\TemplatePlaceholderValuesV32[]|null
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \Nmusco\AssureSign\v3\Model\TemplatePlaceholderValuesV32[]|null $templates Provides a list of referenced templates and related placeholder values.
     *
     * @return $this
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Specifies the user provided description for the template.  This is typically used to provide additional detail about the intended use case.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets isLocked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['isLocked'];
    }

    /**
     * Sets isLocked
     *
     * @param bool|null $isLocked Specifies whether or not the template is locked to prevent editing.
     *
     * @return $this
     */
    public function setIsLocked($isLocked)
    {
        $this->container['isLocked'] = $isLocked;

        return $this;
    }

    /**
     * Gets isPartial
     *
     * @return bool|null
     */
    public function getIsPartial()
    {
        return $this->container['isPartial'];
    }

    /**
     * Sets isPartial
     *
     * @param bool|null $isPartial Specifies whether or not the template contains only a partial definition.  If true, additional data beyond placeholder values must be provided as part of the submission.  If false, the template can be submitted with only placeholder values provided.
     *
     * @return $this
     */
    public function setIsPartial($isPartial)
    {
        $this->container['isPartial'] = $isPartial;

        return $this;
    }

    /**
     * Gets canEdit
     *
     * @return bool|null
     */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
     * Sets canEdit
     *
     * @param bool|null $canEdit Deprecated.  With the introduction of entity permissions in version 6.32, this property is no longer used
     *
     * @return $this
     */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;

        return $this;
    }

    /**
     * Gets accessibility
     *
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->container['accessibility'];
    }

    /**
     * Sets accessibility
     *
     * @param string|null $accessibility Deprecated.  With the introduction of entity permissions in version 6.32, this property is no longer used
     *
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $allowedValues = $this->getAccessibilityAllowableValues();
        if (!is_null($accessibility) && !in_array($accessibility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accessibility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accessibility'] = $accessibility;

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
     * @param string|null $name Specifies the name of the template.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets templateID
     *
     * @return string|null
     */
    public function getTemplateID()
    {
        return $this->container['templateID'];
    }

    /**
     * Sets templateID
     *
     * @param string|null $templateID Specifies the unique identifier of the template.
     *
     * @return $this
     */
    public function setTemplateID($templateID)
    {
        $this->container['templateID'] = $templateID;

        return $this;
    }

    /**
     * Gets userAccountID
     *
     * @return string|null
     */
    public function getUserAccountID()
    {
        return $this->container['userAccountID'];
    }

    /**
     * Sets userAccountID
     *
     * @param string|null $userAccountID Specifies the unique identifier of the user to whom the template belongs.
     *
     * @return $this
     */
    public function setUserAccountID($userAccountID)
    {
        $this->container['userAccountID'] = $userAccountID;

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


