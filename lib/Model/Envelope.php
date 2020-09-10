<?php
/**
 * Envelope
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
 * Envelope Class Doc Comment
 *
 * @category Class
 * @package  Nmusco\AssureSign\v3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Envelope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'envelope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'culture_type' => 'string',
        'decline_behavior_type' => 'string',
        'download_password' => 'string',
        'expiration_date' => 'string',
        'name' => 'string',
        'order_id' => 'string',
        'signing_device_enabled' => 'bool',
        'view_behavior_type' => 'string',
        'workflow_type' => 'string',
        'allow_in_person_signing' => 'bool',
        'redirect_url' => 'string',
        'terms_and_conditions' => '\Nmusco\AssureSign\v3\Model\PreparedEnvelopeParsedContentEnvelopeTermsAndConditions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'culture_type' => null,
        'decline_behavior_type' => null,
        'download_password' => null,
        'expiration_date' => null,
        'name' => null,
        'order_id' => null,
        'signing_device_enabled' => null,
        'view_behavior_type' => null,
        'workflow_type' => null,
        'allow_in_person_signing' => null,
        'redirect_url' => null,
        'terms_and_conditions' => null
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
        'culture_type' => 'cultureType',
        'decline_behavior_type' => 'declineBehaviorType',
        'download_password' => 'downloadPassword',
        'expiration_date' => 'expirationDate',
        'name' => 'name',
        'order_id' => 'orderID',
        'signing_device_enabled' => 'signingDeviceEnabled',
        'view_behavior_type' => 'viewBehaviorType',
        'workflow_type' => 'workflowType',
        'allow_in_person_signing' => 'allowInPersonSigning',
        'redirect_url' => 'redirectUrl',
        'terms_and_conditions' => 'termsAndConditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'culture_type' => 'setCultureType',
        'decline_behavior_type' => 'setDeclineBehaviorType',
        'download_password' => 'setDownloadPassword',
        'expiration_date' => 'setExpirationDate',
        'name' => 'setName',
        'order_id' => 'setOrderId',
        'signing_device_enabled' => 'setSigningDeviceEnabled',
        'view_behavior_type' => 'setViewBehaviorType',
        'workflow_type' => 'setWorkflowType',
        'allow_in_person_signing' => 'setAllowInPersonSigning',
        'redirect_url' => 'setRedirectUrl',
        'terms_and_conditions' => 'setTermsAndConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'culture_type' => 'getCultureType',
        'decline_behavior_type' => 'getDeclineBehaviorType',
        'download_password' => 'getDownloadPassword',
        'expiration_date' => 'getExpirationDate',
        'name' => 'getName',
        'order_id' => 'getOrderId',
        'signing_device_enabled' => 'getSigningDeviceEnabled',
        'view_behavior_type' => 'getViewBehaviorType',
        'workflow_type' => 'getWorkflowType',
        'allow_in_person_signing' => 'getAllowInPersonSigning',
        'redirect_url' => 'getRedirectUrl',
        'terms_and_conditions' => 'getTermsAndConditions'
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

    const DECLINE_BEHAVIOR_TYPE_ALL = 'Decline_All';
    const DECLINE_BEHAVIOR_TYPE_SINGLE = 'Decline_Single';
    const VIEW_BEHAVIOR_TYPE_SIGNER_ONLY = 'View_Signer_Only';
    const VIEW_BEHAVIOR_TYPE_ALL = 'View_All';
    const WORKFLOW_TYPE_SEQUENTIAL = 'Sequential';
    const WORKFLOW_TYPE_PARALLEL = 'Parallel';
    const WORKFLOW_TYPE_CUSTOM = 'Custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeclineBehaviorTypeAllowableValues()
    {
        return [
            self::DECLINE_BEHAVIOR_TYPE_ALL,
            self::DECLINE_BEHAVIOR_TYPE_SINGLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViewBehaviorTypeAllowableValues()
    {
        return [
            self::VIEW_BEHAVIOR_TYPE_SIGNER_ONLY,
            self::VIEW_BEHAVIOR_TYPE_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkflowTypeAllowableValues()
    {
        return [
            self::WORKFLOW_TYPE_SEQUENTIAL,
            self::WORKFLOW_TYPE_PARALLEL,
            self::WORKFLOW_TYPE_CUSTOM,
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
        $this->container['culture_type'] = isset($data['culture_type']) ? $data['culture_type'] : null;
        $this->container['decline_behavior_type'] = isset($data['decline_behavior_type']) ? $data['decline_behavior_type'] : null;
        $this->container['download_password'] = isset($data['download_password']) ? $data['download_password'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['signing_device_enabled'] = isset($data['signing_device_enabled']) ? $data['signing_device_enabled'] : null;
        $this->container['view_behavior_type'] = isset($data['view_behavior_type']) ? $data['view_behavior_type'] : null;
        $this->container['workflow_type'] = isset($data['workflow_type']) ? $data['workflow_type'] : null;
        $this->container['allow_in_person_signing'] = isset($data['allow_in_person_signing']) ? $data['allow_in_person_signing'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['terms_and_conditions'] = isset($data['terms_and_conditions']) ? $data['terms_and_conditions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeclineBehaviorTypeAllowableValues();
        if (!is_null($this->container['decline_behavior_type']) && !in_array($this->container['decline_behavior_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'decline_behavior_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getViewBehaviorTypeAllowableValues();
        if (!is_null($this->container['view_behavior_type']) && !in_array($this->container['view_behavior_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'view_behavior_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWorkflowTypeAllowableValues();
        if (!is_null($this->container['workflow_type']) && !in_array($this->container['workflow_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'workflow_type', must be one of '%s'",
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
     * @param string|null $culture_type Specifies the target culture for the signing session. Possible values include 'en-US' (English - US), 'es-US' (Spanish - US), and 'fr-CA' (French - Canada). Note that specifying a culture here will control the language displayed to signers and the language of default email and SMS notifications. It will not, however, provide automatic translation of the contents of the documents within the envelope or for any adhoc notifications provided in the submission.
     *
     * @return $this
     */
    public function setCultureType($culture_type)
    {
        $this->container['culture_type'] = $culture_type;

        return $this;
    }

    /**
     * Gets decline_behavior_type
     *
     * @return string|null
     */
    public function getDeclineBehaviorType()
    {
        return $this->container['decline_behavior_type'];
    }

    /**
     * Sets decline_behavior_type
     *
     * @param string|null $decline_behavior_type Specifies whether signers will be given the option to decline signing for individual documents within the envelope or just to decline the envelope as a whole.
     *
     * @return $this
     */
    public function setDeclineBehaviorType($decline_behavior_type)
    {
        $allowedValues = $this->getDeclineBehaviorTypeAllowableValues();
        if (!is_null($decline_behavior_type) && !in_array($decline_behavior_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'decline_behavior_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['decline_behavior_type'] = $decline_behavior_type;

        return $this;
    }

    /**
     * Gets download_password
     *
     * @return string|null
     */
    public function getDownloadPassword()
    {
        return $this->container['download_password'];
    }

    /**
     * Sets download_password
     *
     * @param string|null $download_password Specifies a password that users or notification recipients will be prompted to enter in order to access downloads for the envelope.
     *
     * @return $this
     */
    public function setDownloadPassword($download_password)
    {
        $this->container['download_password'] = $download_password;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date Optionally specifies the date when the envelope will expire if not completed. If an expiration date is not provided, the expiration date will be automatically set based on the expiration policy configured for the account.
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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
     * @param string|null $name Specifies the name of the envelope.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Optionally specifies an order ID or order number to help identify the document.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * @param bool|null $signing_device_enabled Specifies whether or not support for external signing devices should be enabled for the envelope.
     *
     * @return $this
     */
    public function setSigningDeviceEnabled($signing_device_enabled)
    {
        $this->container['signing_device_enabled'] = $signing_device_enabled;

        return $this;
    }

    /**
     * Gets view_behavior_type
     *
     * @return string|null
     */
    public function getViewBehaviorType()
    {
        return $this->container['view_behavior_type'];
    }

    /**
     * Sets view_behavior_type
     *
     * @param string|null $view_behavior_type Specifies whether signers will be able to see all documents within the envelope or just documents for which they are a signing party.
     *
     * @return $this
     */
    public function setViewBehaviorType($view_behavior_type)
    {
        $allowedValues = $this->getViewBehaviorTypeAllowableValues();
        if (!is_null($view_behavior_type) && !in_array($view_behavior_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'view_behavior_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['view_behavior_type'] = $view_behavior_type;

        return $this;
    }

    /**
     * Gets workflow_type
     *
     * @return string|null
     */
    public function getWorkflowType()
    {
        return $this->container['workflow_type'];
    }

    /**
     * Sets workflow_type
     *
     * @param string|null $workflow_type Specifies whether the workflow for the envelope will make signing available to all signers at the same time or if signing will be made available to signers one at a time.
     *
     * @return $this
     */
    public function setWorkflowType($workflow_type)
    {
        $allowedValues = $this->getWorkflowTypeAllowableValues();
        if (!is_null($workflow_type) && !in_array($workflow_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'workflow_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['workflow_type'] = $workflow_type;

        return $this;
    }

    /**
     * Gets allow_in_person_signing
     *
     * @return bool|null
     */
    public function getAllowInPersonSigning()
    {
        return $this->container['allow_in_person_signing'];
    }

    /**
     * Sets allow_in_person_signing
     *
     * @param bool|null $allow_in_person_signing Specifies whether or not in person signing should be enabled for the envelope.
     *
     * @return $this
     */
    public function setAllowInPersonSigning($allow_in_person_signing)
    {
        $this->container['allow_in_person_signing'] = $allow_in_person_signing;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url Optionally specifies a fully qualified domain name that signers will be redirected to after signing when they have no other documents in the envelope they can currently sign. If a URL is specified here, it will supersede any other redirect URLs specified elsewhere in the application (such as a default account redirect URL)
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets terms_and_conditions
     *
     * @return \Nmusco\AssureSign\v3\Model\PreparedEnvelopeParsedContentEnvelopeTermsAndConditions|null
     */
    public function getTermsAndConditions()
    {
        return $this->container['terms_and_conditions'];
    }

    /**
     * Sets terms_and_conditions
     *
     * @param \Nmusco\AssureSign\v3\Model\PreparedEnvelopeParsedContentEnvelopeTermsAndConditions|null $terms_and_conditions terms_and_conditions
     *
     * @return $this
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        $this->container['terms_and_conditions'] = $terms_and_conditions;

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


