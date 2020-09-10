<?php
/**
 * FieldOptionV32
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
 * FieldOptionV32 Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldOptionV32 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fieldOptionV3_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'graphic_render_type' => 'int',
        'selected' => 'bool',
        'text' => 'string',
        'value' => 'string',
        'position' => '\Nmusco\AssureSign\v3\Model\Coordinate',
        'page_index' => 'int',
        'size' => '\Nmusco\AssureSign\v3\Model\FieldSize'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'graphic_render_type' => null,
        'selected' => null,
        'text' => null,
        'value' => null,
        'position' => null,
        'page_index' => 'int32',
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
        'graphic_render_type' => 'graphicRenderType',
        'selected' => 'selected',
        'text' => 'text',
        'value' => 'value',
        'position' => 'position',
        'page_index' => 'pageIndex',
        'size' => 'size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'graphic_render_type' => 'setGraphicRenderType',
        'selected' => 'setSelected',
        'text' => 'setText',
        'value' => 'setValue',
        'position' => 'setPosition',
        'page_index' => 'setPageIndex',
        'size' => 'setSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'graphic_render_type' => 'getGraphicRenderType',
        'selected' => 'getSelected',
        'text' => 'getText',
        'value' => 'getValue',
        'position' => 'getPosition',
        'page_index' => 'getPageIndex',
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
        $this->container['graphic_render_type'] = isset($data['graphic_render_type']) ? $data['graphic_render_type'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
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
     * Gets graphic_render_type
     *
     * @return int|null
     */
    public function getGraphicRenderType()
    {
        return $this->container['graphic_render_type'];
    }

    /**
     * Sets graphic_render_type
     *
     * @param int|null $graphic_render_type Specifies how the option will be rendered to the document if selected. Possible values include: Empty = 0, Check = 1, X = 2, No_Box_Empty = 3, No_Box_Check = 4, No_Box_X = 5, Text = 6
     *
     * @return $this
     */
    public function setGraphicRenderType($graphic_render_type)
    {
        $this->container['graphic_render_type'] = $graphic_render_type;

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
     * Gets page_index
     *
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index
     *
     * @param int|null $page_index Specifies the 0-based index of the containing page.
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;

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


