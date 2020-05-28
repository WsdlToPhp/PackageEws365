<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscribeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSubscribeType extends EwsBaseRequestType
{
    /**
     * The PullSubscriptionRequest
     * Meta information extracted from the WSDL
     * - choice: PullSubscriptionRequest | PushSubscriptionRequest | StreamingSubscriptionRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;
    /**
     * The PushSubscriptionRequest
     * Meta information extracted from the WSDL
     * - choice: PullSubscriptionRequest | PushSubscriptionRequest | StreamingSubscriptionRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
    /**
     * The StreamingSubscriptionRequest
     * Meta information extracted from the WSDL
     * - choice: PullSubscriptionRequest | PushSubscriptionRequest | StreamingSubscriptionRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsStreamingSubscriptionRequestType
     */
    public $StreamingSubscriptionRequest;
    /**
     * Constructor method for SubscribeType
     * @uses EwsSubscribeType::setPullSubscriptionRequest()
     * @uses EwsSubscribeType::setPushSubscriptionRequest()
     * @uses EwsSubscribeType::setStreamingSubscriptionRequest()
     * @param \Ews\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest
     * @param \Ews\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest
     * @param \Ews\StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest
     */
    public function __construct(\Ews\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest = null, \Ews\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest = null, \Ews\StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest = null)
    {
        $this
            ->setPullSubscriptionRequest($pullSubscriptionRequest)
            ->setPushSubscriptionRequest($pushSubscriptionRequest)
            ->setStreamingSubscriptionRequest($streamingSubscriptionRequest);
    }
    /**
     * Get PullSubscriptionRequest value
     * @return \Ews\StructType\EwsPullSubscriptionRequestType|null
     */
    public function getPullSubscriptionRequest()
    {
        return isset($this->PullSubscriptionRequest) ? $this->PullSubscriptionRequest : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPullSubscriptionRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPullSubscriptionRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePullSubscriptionRequestForChoiceConstraintsFromSetPullSubscriptionRequest($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PushSubscriptionRequest',
            'StreamingSubscriptionRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PullSubscriptionRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: PullSubscriptionRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PullSubscriptionRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest
     * @return \Ews\StructType\EwsSubscribeType
     */
    public function setPullSubscriptionRequest(\Ews\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest = null)
    {
        // validation for constraint: choice(PullSubscriptionRequest, PushSubscriptionRequest, StreamingSubscriptionRequest)
        if ('' !== ($pullSubscriptionRequestChoiceErrorMessage = self::validatePullSubscriptionRequestForChoiceConstraintsFromSetPullSubscriptionRequest($pullSubscriptionRequest))) {
            throw new \InvalidArgumentException($pullSubscriptionRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($pullSubscriptionRequest) || (is_array($pullSubscriptionRequest) && empty($pullSubscriptionRequest))) {
            unset($this->PullSubscriptionRequest);
        } else {
            $this->PullSubscriptionRequest = $pullSubscriptionRequest;
        }
        return $this;
    }
    /**
     * Get PushSubscriptionRequest value
     * @return \Ews\StructType\EwsPushSubscriptionRequestType|null
     */
    public function getPushSubscriptionRequest()
    {
        return isset($this->PushSubscriptionRequest) ? $this->PushSubscriptionRequest : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPushSubscriptionRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPushSubscriptionRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePushSubscriptionRequestForChoiceConstraintsFromSetPushSubscriptionRequest($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PullSubscriptionRequest',
            'StreamingSubscriptionRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PushSubscriptionRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: PushSubscriptionRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PushSubscriptionRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest
     * @return \Ews\StructType\EwsSubscribeType
     */
    public function setPushSubscriptionRequest(\Ews\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest = null)
    {
        // validation for constraint: choice(PullSubscriptionRequest, PushSubscriptionRequest, StreamingSubscriptionRequest)
        if ('' !== ($pushSubscriptionRequestChoiceErrorMessage = self::validatePushSubscriptionRequestForChoiceConstraintsFromSetPushSubscriptionRequest($pushSubscriptionRequest))) {
            throw new \InvalidArgumentException($pushSubscriptionRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($pushSubscriptionRequest) || (is_array($pushSubscriptionRequest) && empty($pushSubscriptionRequest))) {
            unset($this->PushSubscriptionRequest);
        } else {
            $this->PushSubscriptionRequest = $pushSubscriptionRequest;
        }
        return $this;
    }
    /**
     * Get StreamingSubscriptionRequest value
     * @return \Ews\StructType\EwsStreamingSubscriptionRequestType|null
     */
    public function getStreamingSubscriptionRequest()
    {
        return isset($this->StreamingSubscriptionRequest) ? $this->StreamingSubscriptionRequest : null;
    }
    /**
     * This method is responsible for validating the value passed to the setStreamingSubscriptionRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStreamingSubscriptionRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateStreamingSubscriptionRequestForChoiceConstraintsFromSetStreamingSubscriptionRequest($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'PullSubscriptionRequest',
            'PushSubscriptionRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property StreamingSubscriptionRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: StreamingSubscriptionRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set StreamingSubscriptionRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest
     * @return \Ews\StructType\EwsSubscribeType
     */
    public function setStreamingSubscriptionRequest(\Ews\StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest = null)
    {
        // validation for constraint: choice(PullSubscriptionRequest, PushSubscriptionRequest, StreamingSubscriptionRequest)
        if ('' !== ($streamingSubscriptionRequestChoiceErrorMessage = self::validateStreamingSubscriptionRequestForChoiceConstraintsFromSetStreamingSubscriptionRequest($streamingSubscriptionRequest))) {
            throw new \InvalidArgumentException($streamingSubscriptionRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($streamingSubscriptionRequest) || (is_array($streamingSubscriptionRequest) && empty($streamingSubscriptionRequest))) {
            unset($this->StreamingSubscriptionRequest);
        } else {
            $this->StreamingSubscriptionRequest = $streamingSubscriptionRequest;
        }
        return $this;
    }
}
