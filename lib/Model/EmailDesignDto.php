<?php
/**
 * EmailDesignDto
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
 * EmailDesignDto Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailDesignDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'emailDesignDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body' => 'string',
        'dateCreated' => '\DateTime',
        'dateModified' => '\DateTime',
        'defaultRecipients' => 'string',
        'defaultTiming' => 'string',
        'emailDesignSetId' => 'string',
        'id' => 'string',
        'isSystem' => 'bool',
        'isUsedByDefault' => 'bool',
        'name' => 'string',
        'subject' => 'string',
        'systemId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'body' => null,
        'dateCreated' => 'date-time',
        'dateModified' => 'date-time',
        'defaultRecipients' => null,
        'defaultTiming' => null,
        'emailDesignSetId' => 'uuid',
        'id' => 'uuid',
        'isSystem' => null,
        'isUsedByDefault' => null,
        'name' => null,
        'subject' => null,
        'systemId' => null
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
        'dateCreated' => 'dateCreated',
        'dateModified' => 'dateModified',
        'defaultRecipients' => 'defaultRecipients',
        'defaultTiming' => 'defaultTiming',
        'emailDesignSetId' => 'emailDesignSetId',
        'id' => 'id',
        'isSystem' => 'isSystem',
        'isUsedByDefault' => 'isUsedByDefault',
        'name' => 'name',
        'subject' => 'subject',
        'systemId' => 'systemId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'dateCreated' => 'setDateCreated',
        'dateModified' => 'setDateModified',
        'defaultRecipients' => 'setDefaultRecipients',
        'defaultTiming' => 'setDefaultTiming',
        'emailDesignSetId' => 'setEmailDesignSetId',
        'id' => 'setId',
        'isSystem' => 'setIsSystem',
        'isUsedByDefault' => 'setIsUsedByDefault',
        'name' => 'setName',
        'subject' => 'setSubject',
        'systemId' => 'setSystemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'dateCreated' => 'getDateCreated',
        'dateModified' => 'getDateModified',
        'defaultRecipients' => 'getDefaultRecipients',
        'defaultTiming' => 'getDefaultTiming',
        'emailDesignSetId' => 'getEmailDesignSetId',
        'id' => 'getId',
        'isSystem' => 'getIsSystem',
        'isUsedByDefault' => 'getIsUsedByDefault',
        'name' => 'getName',
        'subject' => 'getSubject',
        'systemId' => 'getSystemId'
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

    const DEFAULT_RECIPIENTS_NONE = 'None';
    const DEFAULT_RECIPIENTS_ORIGINATOR = 'Originator';
    const DEFAULT_RECIPIENTS_SIGNERS_SIGNING_STEP = 'Signers_SigningStep';
    const DEFAULT_RECIPIENTS_SIGNERS_ALL = 'Signers_All';
    const DEFAULT_TIMING_ON_DOCUMENT_STEP_START = 'OnDocumentStepStart';
    const DEFAULT_TIMING_ON_DOCUMENT_STEP_COMPLETE = 'OnDocumentStepComplete';
    const DEFAULT_TIMING_ON_DOCUMENT_START = 'OnDocumentStart';
    const DEFAULT_TIMING_ON_DOCUMENT_COMPLETE = 'OnDocumentComplete';
    const DEFAULT_TIMING_ON_DOCUMENT_PRE_EXPIRE = 'OnDocumentPreExpire';
    const DEFAULT_TIMING_ON_DOCUMENT_EXPIRE = 'OnDocumentExpire';
    const DEFAULT_TIMING_ON_DOCUMENT_LANDING_VISIT = 'OnDocumentLandingVisit';
    const DEFAULT_TIMING_ON_DOCUMENT_CANCEL = 'OnDocumentCancel';
    const DEFAULT_TIMING_ON_DOCUMENT_DECLINE = 'OnDocumentDecline';
    const DEFAULT_TIMING_ON_ENVELOPE_CLOSURE = 'OnEnvelopeClosure';
    const DEFAULT_TIMING_ON_ENVELOPE_PRE_EXPIRE = 'OnEnvelopePreExpire';
    const DEFAULT_TIMING_ON_ENVELOPE_EXPIRE = 'OnEnvelopeExpire';
    const DEFAULT_TIMING_ON_ENVELOPE_COMPLETE = 'OnEnvelopeComplete';
    const DEFAULT_TIMING_ON_ENVELOPE_CANCEL = 'OnEnvelopeCancel';
    const DEFAULT_TIMING_ON_ENVELOPE_DECLINE = 'OnEnvelopeDecline';
    const DEFAULT_TIMING_ON_DOCUMENT_SIGNER_FEEDBACK = 'OnDocumentSignerFeedback';
    const DEFAULT_TIMING_ON_ENVELOPE_SIGNER_FEEDBACK = 'OnEnvelopeSignerFeedback';
    const DEFAULT_TIMING_ON_DOCUMENT_SIGNER_AUTH_FAILURE = 'OnDocumentSignerAuthFailure';
    const DEFAULT_TIMING_ON_ENVELOPE_SIGNER_AUTH_FAILURE = 'OnEnvelopeSignerAuthFailure';
    const DEFAULT_TIMING_ON_DOCUMENT_SIGNER_KBA_START = 'OnDocumentSignerKbaStart';
    const DEFAULT_TIMING_ON_ENVELOPE_SIGNER_KBA_START = 'OnEnvelopeSignerKbaStart';
    const DEFAULT_TIMING_ON_DOCUMENT_SIGNER_KBA_COMPLETE = 'OnDocumentSignerKbaComplete';
    const DEFAULT_TIMING_ON_ENVELOPE_SIGNER_KBA_COMPLETE = 'OnEnvelopeSignerKbaComplete';
    const DEFAULT_TIMING_ON_ENVELOPE_STEP_START = 'OnEnvelopeStepStart';
    const DEFAULT_TIMING_ON_ENVELOPE_STEP_COMPLETE = 'OnEnvelopeStepComplete';
    const DEFAULT_TIMING_ON_PAYMENT_APPROVED = 'OnPaymentApproved';
    const DEFAULT_TIMING_ON_PAYMENT_DECLINED = 'OnPaymentDeclined';
    const DEFAULT_TIMING_ON_PAYMENT_REFUNDED = 'OnPaymentRefunded';
    const DEFAULT_TIMING_ON_ENVELOPE_LANDING_VISIT = 'OnEnvelopeLandingVisit';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultRecipientsAllowableValues()
    {
        return [
            self::DEFAULT_RECIPIENTS_NONE,
            self::DEFAULT_RECIPIENTS_ORIGINATOR,
            self::DEFAULT_RECIPIENTS_SIGNERS_SIGNING_STEP,
            self::DEFAULT_RECIPIENTS_SIGNERS_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultTimingAllowableValues()
    {
        return [
            self::DEFAULT_TIMING_ON_DOCUMENT_STEP_START,
            self::DEFAULT_TIMING_ON_DOCUMENT_STEP_COMPLETE,
            self::DEFAULT_TIMING_ON_DOCUMENT_START,
            self::DEFAULT_TIMING_ON_DOCUMENT_COMPLETE,
            self::DEFAULT_TIMING_ON_DOCUMENT_PRE_EXPIRE,
            self::DEFAULT_TIMING_ON_DOCUMENT_EXPIRE,
            self::DEFAULT_TIMING_ON_DOCUMENT_LANDING_VISIT,
            self::DEFAULT_TIMING_ON_DOCUMENT_CANCEL,
            self::DEFAULT_TIMING_ON_DOCUMENT_DECLINE,
            self::DEFAULT_TIMING_ON_ENVELOPE_CLOSURE,
            self::DEFAULT_TIMING_ON_ENVELOPE_PRE_EXPIRE,
            self::DEFAULT_TIMING_ON_ENVELOPE_EXPIRE,
            self::DEFAULT_TIMING_ON_ENVELOPE_COMPLETE,
            self::DEFAULT_TIMING_ON_ENVELOPE_CANCEL,
            self::DEFAULT_TIMING_ON_ENVELOPE_DECLINE,
            self::DEFAULT_TIMING_ON_DOCUMENT_SIGNER_FEEDBACK,
            self::DEFAULT_TIMING_ON_ENVELOPE_SIGNER_FEEDBACK,
            self::DEFAULT_TIMING_ON_DOCUMENT_SIGNER_AUTH_FAILURE,
            self::DEFAULT_TIMING_ON_ENVELOPE_SIGNER_AUTH_FAILURE,
            self::DEFAULT_TIMING_ON_DOCUMENT_SIGNER_KBA_START,
            self::DEFAULT_TIMING_ON_ENVELOPE_SIGNER_KBA_START,
            self::DEFAULT_TIMING_ON_DOCUMENT_SIGNER_KBA_COMPLETE,
            self::DEFAULT_TIMING_ON_ENVELOPE_SIGNER_KBA_COMPLETE,
            self::DEFAULT_TIMING_ON_ENVELOPE_STEP_START,
            self::DEFAULT_TIMING_ON_ENVELOPE_STEP_COMPLETE,
            self::DEFAULT_TIMING_ON_PAYMENT_APPROVED,
            self::DEFAULT_TIMING_ON_PAYMENT_DECLINED,
            self::DEFAULT_TIMING_ON_PAYMENT_REFUNDED,
            self::DEFAULT_TIMING_ON_ENVELOPE_LANDING_VISIT,
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
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['defaultRecipients'] = isset($data['defaultRecipients']) ? $data['defaultRecipients'] : null;
        $this->container['defaultTiming'] = isset($data['defaultTiming']) ? $data['defaultTiming'] : null;
        $this->container['emailDesignSetId'] = isset($data['emailDesignSetId']) ? $data['emailDesignSetId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isSystem'] = isset($data['isSystem']) ? $data['isSystem'] : null;
        $this->container['isUsedByDefault'] = isset($data['isUsedByDefault']) ? $data['isUsedByDefault'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['systemId'] = isset($data['systemId']) ? $data['systemId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDefaultRecipientsAllowableValues();
        if (!is_null($this->container['defaultRecipients']) && !in_array($this->container['defaultRecipients'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'defaultRecipients', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDefaultTimingAllowableValues();
        if (!is_null($this->container['defaultTiming']) && !in_array($this->container['defaultTiming'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'defaultTiming', must be one of '%s'",
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
     * @param string|null $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime|null $dateCreated dateCreated
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateModified
     *
     * @return \DateTime|null
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     *
     * @param \DateTime|null $dateModified dateModified
     *
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets defaultRecipients
     *
     * @return string|null
     */
    public function getDefaultRecipients()
    {
        return $this->container['defaultRecipients'];
    }

    /**
     * Sets defaultRecipients
     *
     * @param string|null $defaultRecipients defaultRecipients
     *
     * @return $this
     */
    public function setDefaultRecipients($defaultRecipients)
    {
        $allowedValues = $this->getDefaultRecipientsAllowableValues();
        if (!is_null($defaultRecipients) && !in_array($defaultRecipients, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'defaultRecipients', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['defaultRecipients'] = $defaultRecipients;

        return $this;
    }

    /**
     * Gets defaultTiming
     *
     * @return string|null
     */
    public function getDefaultTiming()
    {
        return $this->container['defaultTiming'];
    }

    /**
     * Sets defaultTiming
     *
     * @param string|null $defaultTiming defaultTiming
     *
     * @return $this
     */
    public function setDefaultTiming($defaultTiming)
    {
        $allowedValues = $this->getDefaultTimingAllowableValues();
        if (!is_null($defaultTiming) && !in_array($defaultTiming, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'defaultTiming', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['defaultTiming'] = $defaultTiming;

        return $this;
    }

    /**
     * Gets emailDesignSetId
     *
     * @return string|null
     */
    public function getEmailDesignSetId()
    {
        return $this->container['emailDesignSetId'];
    }

    /**
     * Sets emailDesignSetId
     *
     * @param string|null $emailDesignSetId emailDesignSetId
     *
     * @return $this
     */
    public function setEmailDesignSetId($emailDesignSetId)
    {
        $this->container['emailDesignSetId'] = $emailDesignSetId;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isSystem
     *
     * @return bool|null
     */
    public function getIsSystem()
    {
        return $this->container['isSystem'];
    }

    /**
     * Sets isSystem
     *
     * @param bool|null $isSystem isSystem
     *
     * @return $this
     */
    public function setIsSystem($isSystem)
    {
        $this->container['isSystem'] = $isSystem;

        return $this;
    }

    /**
     * Gets isUsedByDefault
     *
     * @return bool|null
     */
    public function getIsUsedByDefault()
    {
        return $this->container['isUsedByDefault'];
    }

    /**
     * Sets isUsedByDefault
     *
     * @param bool|null $isUsedByDefault isUsedByDefault
     *
     * @return $this
     */
    public function setIsUsedByDefault($isUsedByDefault)
    {
        $this->container['isUsedByDefault'] = $isUsedByDefault;

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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets systemId
     *
     * @return string|null
     */
    public function getSystemId()
    {
        return $this->container['systemId'];
    }

    /**
     * Sets systemId
     *
     * @param string|null $systemId systemId
     *
     * @return $this
     */
    public function setSystemId($systemId)
    {
        $this->container['systemId'] = $systemId;

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


