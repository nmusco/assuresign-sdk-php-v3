<?php
/**
 * PreparedEnvelopeParsedContentSmsNotifications
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
 * PreparedEnvelopeParsedContentSmsNotifications Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PreparedEnvelopeParsedContentSmsNotifications implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'preparedEnvelopeParsed_content_smsNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body' => 'string',
        'name' => 'string',
        'recipients' => 'string[]',
        'stage' => 'string',
        'step' => 'int',
        'pre_expiration_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'body' => null,
        'name' => null,
        'recipients' => null,
        'stage' => null,
        'step' => null,
        'pre_expiration_days' => null
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
        'body' => 'body',
        'name' => 'name',
        'recipients' => 'recipients',
        'stage' => 'stage',
        'step' => 'step',
        'pre_expiration_days' => 'preExpirationDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'name' => 'setName',
        'recipients' => 'setRecipients',
        'stage' => 'setStage',
        'step' => 'setStep',
        'pre_expiration_days' => 'setPreExpirationDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'name' => 'getName',
        'recipients' => 'getRecipients',
        'stage' => 'getStage',
        'step' => 'getStep',
        'pre_expiration_days' => 'getPreExpirationDays'
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

    const STAGE_ENVELOPE_START = 'Envelope_Start';
    const STAGE_ENVELOPE_PRE_EXPIRE = 'Envelope_PreExpire';
    const STAGE_ENVELOPE_EXPIRE = 'Envelope_Expire';
    const STAGE_ENVELOPE_COMPLETE = 'Envelope_Complete';
    const STAGE_ENVELOPE_CANCEL = 'Envelope_Cancel';
    const STAGE_ENVELOPE_DECLINE = 'Envelope_Decline';
    const STAGE_SIGNER_FEEDBACK = 'Signer_Feedback';
    const STAGE_SIGNER_AUTH_FAILURE = 'Signer_Auth_Failure';
    const STAGE_SIGNER_KBA_START = 'Signer_Kba_Start';
    const STAGE_SIGNER_KBA_COMPLETE = 'Signer_Kba_Complete';
    const STAGE_STEP_START = 'Step_Start';
    const STAGE_STEP_COMPLETE = 'Step_Complete';
    const STAGE_ON_PAYMENT_APPROVED = 'On_Payment_Approved';
    const STAGE_ON_PAYMENT_DECLINED = 'On_Payment_Declined';
    const STAGE_ON_PAYMENT_REFUNDED = 'On_Payment_Refunded';
    const STAGE_ON_ENVELOPE_LANDING_VISIT = 'On_Envelope_Landing_Visit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStageAllowableValues()
    {
        return [
            self::STAGE_ENVELOPE_START,
            self::STAGE_ENVELOPE_PRE_EXPIRE,
            self::STAGE_ENVELOPE_EXPIRE,
            self::STAGE_ENVELOPE_COMPLETE,
            self::STAGE_ENVELOPE_CANCEL,
            self::STAGE_ENVELOPE_DECLINE,
            self::STAGE_SIGNER_FEEDBACK,
            self::STAGE_SIGNER_AUTH_FAILURE,
            self::STAGE_SIGNER_KBA_START,
            self::STAGE_SIGNER_KBA_COMPLETE,
            self::STAGE_STEP_START,
            self::STAGE_STEP_COMPLETE,
            self::STAGE_ON_PAYMENT_APPROVED,
            self::STAGE_ON_PAYMENT_DECLINED,
            self::STAGE_ON_PAYMENT_REFUNDED,
            self::STAGE_ON_ENVELOPE_LANDING_VISIT,
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['pre_expiration_days'] = isset($data['pre_expiration_days']) ? $data['pre_expiration_days'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStageAllowableValues();
        if (!is_null($this->container['stage']) && !in_array($this->container['stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stage', must be one of '%s'",
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
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body Specifies the body of the SMS notification. Note: content may include merge fields.
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

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
     * @param string|null $name Specifies the name of the SMS notification.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return string[]|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param string[]|null $recipients Provides a list of intended recipients for the email notification. Specify a signer or recipient label to send specific recipients. Specify 'Originator' to send to the envelope originator. Specify 'All_Signers' to send to all signers on this envelope. Specify 'All_Signers_In_Step' to send to all signers that part of the current signing step.
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return string|null
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param string|null $stage Specifies the stage in the envelope signing process during which the email notification will be sent.
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $allowedValues = $this->getStageAllowableValues();
        if (!is_null($stage) && !in_array($stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets step
     *
     * @return int|null
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     *
     * @param int|null $step Specifies the 0-based index of the signing step with which the email notification is associated for email notifications with a 'Stage' of 'StepStart' or 'StepComplete'.
     *
     * @return $this
     */
    public function setStep($step)
    {
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets pre_expiration_days
     *
     * @return int|null
     */
    public function getPreExpirationDays()
    {
        return $this->container['pre_expiration_days'];
    }

    /**
     * Sets pre_expiration_days
     *
     * @param int|null $pre_expiration_days Specifies the amount of days to send a pre-expiration notification. (only applicable to Pre-Expire)
     *
     * @return $this
     */
    public function setPreExpirationDays($pre_expiration_days)
    {
        $this->container['pre_expiration_days'] = $pre_expiration_days;

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


