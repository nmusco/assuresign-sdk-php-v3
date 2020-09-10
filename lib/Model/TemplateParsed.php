<?php
/**
 * TemplateParsed
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
 * TemplateParsed Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TemplateParsed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'templateParsed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => '\Nmusco\AssureSign\v3\Model\Submission',
        'placeholders' => '\Nmusco\AssureSign\v3\Model\Placeholder[]',
        'templates' => '\Nmusco\AssureSign\v3\Model\TemplatePlaceholderValues[]',
        'description' => 'string',
        'is_locked' => 'bool',
        'is_partial' => 'bool',
        'is_archived' => 'bool',
        'name' => 'string',
        'template_id' => 'string',
        'user_account_id' => 'string',
        'owner' => '\Nmusco\AssureSign\v3\Model\TemplateOwner',
        'account_id' => 'string',
        'account_name' => 'string',
        'tag' => 'string',
        'original_id' => 'string'
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
        'is_locked' => null,
        'is_partial' => null,
        'is_archived' => null,
        'name' => null,
        'template_id' => null,
        'user_account_id' => null,
        'owner' => null,
        'account_id' => null,
        'account_name' => null,
        'tag' => null,
        'original_id' => null
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
        'is_locked' => 'isLocked',
        'is_partial' => 'isPartial',
        'is_archived' => 'isArchived',
        'name' => 'name',
        'template_id' => 'templateID',
        'user_account_id' => 'userAccountID',
        'owner' => 'owner',
        'account_id' => 'accountID',
        'account_name' => 'accountName',
        'tag' => 'tag',
        'original_id' => 'originalID'
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
        'is_locked' => 'setIsLocked',
        'is_partial' => 'setIsPartial',
        'is_archived' => 'setIsArchived',
        'name' => 'setName',
        'template_id' => 'setTemplateId',
        'user_account_id' => 'setUserAccountId',
        'owner' => 'setOwner',
        'account_id' => 'setAccountId',
        'account_name' => 'setAccountName',
        'tag' => 'setTag',
        'original_id' => 'setOriginalId'
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
        'is_locked' => 'getIsLocked',
        'is_partial' => 'getIsPartial',
        'is_archived' => 'getIsArchived',
        'name' => 'getName',
        'template_id' => 'getTemplateId',
        'user_account_id' => 'getUserAccountId',
        'owner' => 'getOwner',
        'account_id' => 'getAccountId',
        'account_name' => 'getAccountName',
        'tag' => 'getTag',
        'original_id' => 'getOriginalId'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['placeholders'] = isset($data['placeholders']) ? $data['placeholders'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['is_partial'] = isset($data['is_partial']) ? $data['is_partial'] : null;
        $this->container['is_archived'] = isset($data['is_archived']) ? $data['is_archived'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['user_account_id'] = isset($data['user_account_id']) ? $data['user_account_id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['original_id'] = isset($data['original_id']) ? $data['original_id'] : null;
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
     * Gets content
     *
     * @return \Nmusco\AssureSign\v3\Model\Submission|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Nmusco\AssureSign\v3\Model\Submission|null $content content
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
     * @return \Nmusco\AssureSign\v3\Model\TemplatePlaceholderValues[]|null
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \Nmusco\AssureSign\v3\Model\TemplatePlaceholderValues[]|null $templates Provides a list of referenced templates and related placeholder values.
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
     * @param string|null $description Specifies the user provided description for the template. This is typically used to provide additional detail about the intended use case.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool|null $is_locked Specifies whether or not the template is locked to prevent editing.
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets is_partial
     *
     * @return bool|null
     */
    public function getIsPartial()
    {
        return $this->container['is_partial'];
    }

    /**
     * Sets is_partial
     *
     * @param bool|null $is_partial Specifies whether or not the template contains only a partial definition. If true, additional data beyond placeholder values must be provided as part of the submission. If false, the template can be submitted with only placeholder values provided.
     *
     * @return $this
     */
    public function setIsPartial($is_partial)
    {
        $this->container['is_partial'] = $is_partial;

        return $this;
    }

    /**
     * Gets is_archived
     *
     * @return bool|null
     */
    public function getIsArchived()
    {
        return $this->container['is_archived'];
    }

    /**
     * Sets is_archived
     *
     * @param bool|null $is_archived Specifies whether or not the template is archived
     *
     * @return $this
     */
    public function setIsArchived($is_archived)
    {
        $this->container['is_archived'] = $is_archived;

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
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id Specifies the unique identifier of the template.
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets user_account_id
     *
     * @return string|null
     */
    public function getUserAccountId()
    {
        return $this->container['user_account_id'];
    }

    /**
     * Sets user_account_id
     *
     * @param string|null $user_account_id Specifies the unique identifier of the user to whom the template belongs.
     *
     * @return $this
     */
    public function setUserAccountId($user_account_id)
    {
        $this->container['user_account_id'] = $user_account_id;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Nmusco\AssureSign\v3\Model\TemplateOwner|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Nmusco\AssureSign\v3\Model\TemplateOwner|null $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id Specifies the unique identifier of the account to which the template belongs.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name Specifies the name of the account to which the template belongs.
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag A generic holder of any information you would like to provide
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets original_id
     *
     * @return string|null
     */
    public function getOriginalId()
    {
        return $this->container['original_id'];
    }

    /**
     * Sets original_id
     *
     * @param string|null $original_id Original ID of Imported Template
     *
     * @return $this
     */
    public function setOriginalId($original_id)
    {
        $this->container['original_id'] = $original_id;

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


