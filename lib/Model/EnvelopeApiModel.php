<?php
/**
 * EnvelopeApiModel
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
 * EnvelopeApiModel Class Doc Comment
 *
 * @category Class
 * @package  AssureSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeApiModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'envelopeApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
'account_name' => 'string',
'cancelled_date' => '\DateTime',
'completion_date' => '\DateTime',
'decline_behavior' => 'string',
'declined_date' => '\DateTime',
'expired_date' => '\DateTime',
'staled_date' => '\DateTime',
'stale_date' => '\DateTime',
'has_password' => 'bool',
'envelope_id' => 'string',
'name' => 'string',
'redirect_url' => 'string',
'signer_auth_failure_date' => '\DateTime',
'user_account_id' => 'string',
'view_behavior' => 'string',
'closed_date' => '\DateTime',
'envelope_status_type' => 'string',
'is_finalized' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'uuid',
'account_name' => null,
'cancelled_date' => 'date-time',
'completion_date' => 'date-time',
'decline_behavior' => null,
'declined_date' => 'date-time',
'expired_date' => 'date-time',
'staled_date' => 'date-time',
'stale_date' => 'date-time',
'has_password' => null,
'envelope_id' => 'uuid',
'name' => null,
'redirect_url' => null,
'signer_auth_failure_date' => 'date-time',
'user_account_id' => 'uuid',
'view_behavior' => null,
'closed_date' => 'date-time',
'envelope_status_type' => null,
'is_finalized' => null    ];

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
        'account_id' => 'accountID',
'account_name' => 'accountName',
'cancelled_date' => 'cancelledDate',
'completion_date' => 'completionDate',
'decline_behavior' => 'declineBehavior',
'declined_date' => 'declinedDate',
'expired_date' => 'expiredDate',
'staled_date' => 'staledDate',
'stale_date' => 'staleDate',
'has_password' => 'hasPassword',
'envelope_id' => 'envelopeID',
'name' => 'name',
'redirect_url' => 'redirectUrl',
'signer_auth_failure_date' => 'signerAuthFailureDate',
'user_account_id' => 'userAccountID',
'view_behavior' => 'viewBehavior',
'closed_date' => 'closedDate',
'envelope_status_type' => 'envelopeStatusType',
'is_finalized' => 'isFinalized'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
'account_name' => 'setAccountName',
'cancelled_date' => 'setCancelledDate',
'completion_date' => 'setCompletionDate',
'decline_behavior' => 'setDeclineBehavior',
'declined_date' => 'setDeclinedDate',
'expired_date' => 'setExpiredDate',
'staled_date' => 'setStaledDate',
'stale_date' => 'setStaleDate',
'has_password' => 'setHasPassword',
'envelope_id' => 'setEnvelopeId',
'name' => 'setName',
'redirect_url' => 'setRedirectUrl',
'signer_auth_failure_date' => 'setSignerAuthFailureDate',
'user_account_id' => 'setUserAccountId',
'view_behavior' => 'setViewBehavior',
'closed_date' => 'setClosedDate',
'envelope_status_type' => 'setEnvelopeStatusType',
'is_finalized' => 'setIsFinalized'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
'account_name' => 'getAccountName',
'cancelled_date' => 'getCancelledDate',
'completion_date' => 'getCompletionDate',
'decline_behavior' => 'getDeclineBehavior',
'declined_date' => 'getDeclinedDate',
'expired_date' => 'getExpiredDate',
'staled_date' => 'getStaledDate',
'stale_date' => 'getStaleDate',
'has_password' => 'getHasPassword',
'envelope_id' => 'getEnvelopeId',
'name' => 'getName',
'redirect_url' => 'getRedirectUrl',
'signer_auth_failure_date' => 'getSignerAuthFailureDate',
'user_account_id' => 'getUserAccountId',
'view_behavior' => 'getViewBehavior',
'closed_date' => 'getClosedDate',
'envelope_status_type' => 'getEnvelopeStatusType',
'is_finalized' => 'getIsFinalized'    ];

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

    const DECLINE_BEHAVIOR_DECLINE_ALL = 'DeclineAll';
const DECLINE_BEHAVIOR_DECLINE_SINGLE = 'DeclineSingle';
const VIEW_BEHAVIOR_VIEW_SIGNATORY_ONLY = 'ViewSignatoryOnly';
const VIEW_BEHAVIOR_VIEW_ALL = 'ViewAll';
const ENVELOPE_STATUS_TYPE_CREATED = 'CREATED';
const ENVELOPE_STATUS_TYPE_IN_PROGRESS = 'IN_PROGRESS';
const ENVELOPE_STATUS_TYPE_COMPLETED = 'COMPLETED';
const ENVELOPE_STATUS_TYPE_EXPIRED = 'EXPIRED';
const ENVELOPE_STATUS_TYPE_DECLINED = 'DECLINED';
const ENVELOPE_STATUS_TYPE_CANCELLED = 'CANCELLED';
const ENVELOPE_STATUS_TYPE_STALED = 'STALED';
const ENVELOPE_STATUS_TYPE_SIGNER_AUTHENTICATION_FAILED = 'SIGNER_AUTHENTICATION_FAILED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeclineBehaviorAllowableValues()
    {
        return [
            self::DECLINE_BEHAVIOR_DECLINE_ALL,
self::DECLINE_BEHAVIOR_DECLINE_SINGLE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViewBehaviorAllowableValues()
    {
        return [
            self::VIEW_BEHAVIOR_VIEW_SIGNATORY_ONLY,
self::VIEW_BEHAVIOR_VIEW_ALL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvelopeStatusTypeAllowableValues()
    {
        return [
            self::ENVELOPE_STATUS_TYPE_CREATED,
self::ENVELOPE_STATUS_TYPE_IN_PROGRESS,
self::ENVELOPE_STATUS_TYPE_COMPLETED,
self::ENVELOPE_STATUS_TYPE_EXPIRED,
self::ENVELOPE_STATUS_TYPE_DECLINED,
self::ENVELOPE_STATUS_TYPE_CANCELLED,
self::ENVELOPE_STATUS_TYPE_STALED,
self::ENVELOPE_STATUS_TYPE_SIGNER_AUTHENTICATION_FAILED,        ];
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['cancelled_date'] = isset($data['cancelled_date']) ? $data['cancelled_date'] : null;
        $this->container['completion_date'] = isset($data['completion_date']) ? $data['completion_date'] : null;
        $this->container['decline_behavior'] = isset($data['decline_behavior']) ? $data['decline_behavior'] : null;
        $this->container['declined_date'] = isset($data['declined_date']) ? $data['declined_date'] : null;
        $this->container['expired_date'] = isset($data['expired_date']) ? $data['expired_date'] : null;
        $this->container['staled_date'] = isset($data['staled_date']) ? $data['staled_date'] : null;
        $this->container['stale_date'] = isset($data['stale_date']) ? $data['stale_date'] : null;
        $this->container['has_password'] = isset($data['has_password']) ? $data['has_password'] : null;
        $this->container['envelope_id'] = isset($data['envelope_id']) ? $data['envelope_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['signer_auth_failure_date'] = isset($data['signer_auth_failure_date']) ? $data['signer_auth_failure_date'] : null;
        $this->container['user_account_id'] = isset($data['user_account_id']) ? $data['user_account_id'] : null;
        $this->container['view_behavior'] = isset($data['view_behavior']) ? $data['view_behavior'] : null;
        $this->container['closed_date'] = isset($data['closed_date']) ? $data['closed_date'] : null;
        $this->container['envelope_status_type'] = isset($data['envelope_status_type']) ? $data['envelope_status_type'] : null;
        $this->container['is_finalized'] = isset($data['is_finalized']) ? $data['is_finalized'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeclineBehaviorAllowableValues();
        if (!is_null($this->container['decline_behavior']) && !in_array($this->container['decline_behavior'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'decline_behavior', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViewBehaviorAllowableValues();
        if (!is_null($this->container['view_behavior']) && !in_array($this->container['view_behavior'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'view_behavior', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEnvelopeStatusTypeAllowableValues();
        if (!is_null($this->container['envelope_status_type']) && !in_array($this->container['envelope_status_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'envelope_status_type', must be one of '%s'",
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
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
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name account_name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets cancelled_date
     *
     * @return \DateTime
     */
    public function getCancelledDate()
    {
        return $this->container['cancelled_date'];
    }

    /**
     * Sets cancelled_date
     *
     * @param \DateTime $cancelled_date cancelled_date
     *
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->container['cancelled_date'] = $cancelled_date;

        return $this;
    }

    /**
     * Gets completion_date
     *
     * @return \DateTime
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     *
     * @param \DateTime $completion_date completion_date
     *
     * @return $this
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets decline_behavior
     *
     * @return string
     */
    public function getDeclineBehavior()
    {
        return $this->container['decline_behavior'];
    }

    /**
     * Sets decline_behavior
     *
     * @param string $decline_behavior decline_behavior
     *
     * @return $this
     */
    public function setDeclineBehavior($decline_behavior)
    {
        $allowedValues = $this->getDeclineBehaviorAllowableValues();
        if (!is_null($decline_behavior) && !in_array($decline_behavior, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'decline_behavior', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['decline_behavior'] = $decline_behavior;

        return $this;
    }

    /**
     * Gets declined_date
     *
     * @return \DateTime
     */
    public function getDeclinedDate()
    {
        return $this->container['declined_date'];
    }

    /**
     * Sets declined_date
     *
     * @param \DateTime $declined_date declined_date
     *
     * @return $this
     */
    public function setDeclinedDate($declined_date)
    {
        $this->container['declined_date'] = $declined_date;

        return $this;
    }

    /**
     * Gets expired_date
     *
     * @return \DateTime
     */
    public function getExpiredDate()
    {
        return $this->container['expired_date'];
    }

    /**
     * Sets expired_date
     *
     * @param \DateTime $expired_date expired_date
     *
     * @return $this
     */
    public function setExpiredDate($expired_date)
    {
        $this->container['expired_date'] = $expired_date;

        return $this;
    }

    /**
     * Gets staled_date
     *
     * @return \DateTime
     */
    public function getStaledDate()
    {
        return $this->container['staled_date'];
    }

    /**
     * Sets staled_date
     *
     * @param \DateTime $staled_date staled_date
     *
     * @return $this
     */
    public function setStaledDate($staled_date)
    {
        $this->container['staled_date'] = $staled_date;

        return $this;
    }

    /**
     * Gets stale_date
     *
     * @return \DateTime
     */
    public function getStaleDate()
    {
        return $this->container['stale_date'];
    }

    /**
     * Sets stale_date
     *
     * @param \DateTime $stale_date stale_date
     *
     * @return $this
     */
    public function setStaleDate($stale_date)
    {
        $this->container['stale_date'] = $stale_date;

        return $this;
    }

    /**
     * Gets has_password
     *
     * @return bool
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     *
     * @param bool $has_password has_password
     *
     * @return $this
     */
    public function setHasPassword($has_password)
    {
        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets envelope_id
     *
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->container['envelope_id'];
    }

    /**
     * Sets envelope_id
     *
     * @param string $envelope_id envelope_id
     *
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        $this->container['envelope_id'] = $envelope_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url redirect_url
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets signer_auth_failure_date
     *
     * @return \DateTime
     */
    public function getSignerAuthFailureDate()
    {
        return $this->container['signer_auth_failure_date'];
    }

    /**
     * Sets signer_auth_failure_date
     *
     * @param \DateTime $signer_auth_failure_date signer_auth_failure_date
     *
     * @return $this
     */
    public function setSignerAuthFailureDate($signer_auth_failure_date)
    {
        $this->container['signer_auth_failure_date'] = $signer_auth_failure_date;

        return $this;
    }

    /**
     * Gets user_account_id
     *
     * @return string
     */
    public function getUserAccountId()
    {
        return $this->container['user_account_id'];
    }

    /**
     * Sets user_account_id
     *
     * @param string $user_account_id user_account_id
     *
     * @return $this
     */
    public function setUserAccountId($user_account_id)
    {
        $this->container['user_account_id'] = $user_account_id;

        return $this;
    }

    /**
     * Gets view_behavior
     *
     * @return string
     */
    public function getViewBehavior()
    {
        return $this->container['view_behavior'];
    }

    /**
     * Sets view_behavior
     *
     * @param string $view_behavior view_behavior
     *
     * @return $this
     */
    public function setViewBehavior($view_behavior)
    {
        $allowedValues = $this->getViewBehaviorAllowableValues();
        if (!is_null($view_behavior) && !in_array($view_behavior, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'view_behavior', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['view_behavior'] = $view_behavior;

        return $this;
    }

    /**
     * Gets closed_date
     *
     * @return \DateTime
     */
    public function getClosedDate()
    {
        return $this->container['closed_date'];
    }

    /**
     * Sets closed_date
     *
     * @param \DateTime $closed_date closed_date
     *
     * @return $this
     */
    public function setClosedDate($closed_date)
    {
        $this->container['closed_date'] = $closed_date;

        return $this;
    }

    /**
     * Gets envelope_status_type
     *
     * @return string
     */
    public function getEnvelopeStatusType()
    {
        return $this->container['envelope_status_type'];
    }

    /**
     * Sets envelope_status_type
     *
     * @param string $envelope_status_type envelope_status_type
     *
     * @return $this
     */
    public function setEnvelopeStatusType($envelope_status_type)
    {
        $allowedValues = $this->getEnvelopeStatusTypeAllowableValues();
        if (!is_null($envelope_status_type) && !in_array($envelope_status_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'envelope_status_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['envelope_status_type'] = $envelope_status_type;

        return $this;
    }

    /**
     * Gets is_finalized
     *
     * @return bool
     */
    public function getIsFinalized()
    {
        return $this->container['is_finalized'];
    }

    /**
     * Sets is_finalized
     *
     * @param bool $is_finalized Once this Envelope has been completed, cancelled, failed auth, declined, or expired
     *
     * @return $this
     */
    public function setIsFinalized($is_finalized)
    {
        $this->container['is_finalized'] = $is_finalized;

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
