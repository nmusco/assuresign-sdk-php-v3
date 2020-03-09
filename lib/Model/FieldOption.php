<?php
/**
 * FieldOption
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
 * FieldOption Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fieldOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'graphicRenderType' => 'string',
        'selected' => 'bool',
        'text' => 'string',
        'value' => 'string',
        'pageIndex' => 'int',
        'position' => '\Nmusco\AssureSign\v3\Model\Coordinate',
        'size' => '\Nmusco\AssureSign\v3\Model\FieldSize'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'graphicRenderType' => null,
        'selected' => null,
        'text' => null,
        'value' => null,
        'pageIndex' => 'int32',
        'position' => null,
        'size' => null
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
        'graphicRenderType' => 'graphicRenderType',
        'selected' => 'selected',
        'text' => 'text',
        'value' => 'value',
        'pageIndex' => 'pageIndex',
        'position' => 'position',
        'size' => 'size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'graphicRenderType' => 'setGraphicRenderType',
        'selected' => 'setSelected',
        'text' => 'setText',
        'value' => 'setValue',
        'pageIndex' => 'setPageIndex',
        'position' => 'setPosition',
        'size' => 'setSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'graphicRenderType' => 'getGraphicRenderType',
        'selected' => 'getSelected',
        'text' => 'getText',
        'value' => 'getValue',
        'pageIndex' => 'getPageIndex',
        'position' => 'getPosition',
        'size' => 'getSize'
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

    const GRAPHIC_RENDER_TYPE__EMPTY = 'Empty';
    const GRAPHIC_RENDER_TYPE_CHECK = 'Check';
    const GRAPHIC_RENDER_TYPE_X = 'X';
    const GRAPHIC_RENDER_TYPE_NO_BOX_EMPTY = 'No_Box_Empty';
    const GRAPHIC_RENDER_TYPE_NO_BOX_CHECK = 'No_Box_Check';
    const GRAPHIC_RENDER_TYPE_NO_BOX_X = 'No_Box_X';
    const GRAPHIC_RENDER_TYPE_TEXT = 'Text';
    const GRAPHIC_RENDER_TYPE_NONE = 'None';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGraphicRenderTypeAllowableValues()
    {
        return [
            self::GRAPHIC_RENDER_TYPE__EMPTY,
            self::GRAPHIC_RENDER_TYPE_CHECK,
            self::GRAPHIC_RENDER_TYPE_X,
            self::GRAPHIC_RENDER_TYPE_NO_BOX_EMPTY,
            self::GRAPHIC_RENDER_TYPE_NO_BOX_CHECK,
            self::GRAPHIC_RENDER_TYPE_NO_BOX_X,
            self::GRAPHIC_RENDER_TYPE_TEXT,
            self::GRAPHIC_RENDER_TYPE_NONE,
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
        $this->container['graphicRenderType'] = isset($data['graphicRenderType']) ? $data['graphicRenderType'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGraphicRenderTypeAllowableValues();
        if (!is_null($this->container['graphicRenderType']) && !in_array($this->container['graphicRenderType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'graphicRenderType', must be one of '%s'",
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
     * Gets graphicRenderType
     *
     * @return string|null
     */
    public function getGraphicRenderType()
    {
        return $this->container['graphicRenderType'];
    }

    /**
     * Sets graphicRenderType
     *
     * @param string|null $graphicRenderType Specifies how the option will be rendered to the document if selected.  Possible values include: Empty = 0, Check = 1, X = 2, No_Box_Empty = 3, No_Box_Check = 4, No_Box_X = 5, Text = 6
     *
     * @return $this
     */
    public function setGraphicRenderType($graphicRenderType)
    {
        $allowedValues = $this->getGraphicRenderTypeAllowableValues();
        if (!is_null($graphicRenderType) && !in_array($graphicRenderType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'graphicRenderType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['graphicRenderType'] = $graphicRenderType;

        return $this;
    }

    /**
     * Gets selected
     *
     * @return bool|null
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * Sets selected
     *
     * @param bool|null $selected Specifies whether or not the option will be selected by default.
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Specifies the text for the option that will be presented to the signer.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Specifies the value of the option (may be different than the displayed text).
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets pageIndex
     *
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
     * Sets pageIndex
     *
     * @param int|null $pageIndex Specifies the 0-based index of the containing page.
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Nmusco\AssureSign\v3\Model\Coordinate|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Nmusco\AssureSign\v3\Model\Coordinate|null $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \Nmusco\AssureSign\v3\Model\FieldSize|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \Nmusco\AssureSign\v3\Model\FieldSize|null $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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

