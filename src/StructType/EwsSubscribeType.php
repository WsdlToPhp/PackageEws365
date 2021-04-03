<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsPullSubscriptionRequestType|null
     */
    protected ?\StructType\EwsPullSubscriptionRequestType $PullSubscriptionRequest = null;
    /**
     * The PushSubscriptionRequest
     * Meta information extracted from the WSDL
     * - choice: PullSubscriptionRequest | PushSubscriptionRequest | StreamingSubscriptionRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPushSubscriptionRequestType|null
     */
    protected ?\StructType\EwsPushSubscriptionRequestType $PushSubscriptionRequest = null;
    /**
     * The StreamingSubscriptionRequest
     * Meta information extracted from the WSDL
     * - choice: PullSubscriptionRequest | PushSubscriptionRequest | StreamingSubscriptionRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsStreamingSubscriptionRequestType|null
     */
    protected ?\StructType\EwsStreamingSubscriptionRequestType $StreamingSubscriptionRequest = null;
    /**
     * Constructor method for SubscribeType
     * @uses EwsSubscribeType::setPullSubscriptionRequest()
     * @uses EwsSubscribeType::setPushSubscriptionRequest()
     * @uses EwsSubscribeType::setStreamingSubscriptionRequest()
     * @param \StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest
     * @param \StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest
     * @param \StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest
     */
    public function __construct(?\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest = null, ?\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest = null, ?\StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest = null)
    {
        $this
            ->setPullSubscriptionRequest($pullSubscriptionRequest)
            ->setPushSubscriptionRequest($pushSubscriptionRequest)
            ->setStreamingSubscriptionRequest($streamingSubscriptionRequest);
    }
    /**
     * Get PullSubscriptionRequest value
     * @return \StructType\EwsPullSubscriptionRequestType|null
     */
    public function getPullSubscriptionRequest(): ?\StructType\EwsPullSubscriptionRequestType
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
    public function validatePullSubscriptionRequestForChoiceConstraintsFromSetPullSubscriptionRequest($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PullSubscriptionRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: PullSubscriptionRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PullSubscriptionRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest
     * @return \StructType\EwsSubscribeType
     */
    public function setPullSubscriptionRequest(?\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest = null): self
    {
        // validation for constraint: choice(PullSubscriptionRequest, PushSubscriptionRequest, StreamingSubscriptionRequest)
        if ('' !== ($pullSubscriptionRequestChoiceErrorMessage = self::validatePullSubscriptionRequestForChoiceConstraintsFromSetPullSubscriptionRequest($pullSubscriptionRequest))) {
            throw new InvalidArgumentException($pullSubscriptionRequestChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsPushSubscriptionRequestType|null
     */
    public function getPushSubscriptionRequest(): ?\StructType\EwsPushSubscriptionRequestType
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
    public function validatePushSubscriptionRequestForChoiceConstraintsFromSetPushSubscriptionRequest($value): string
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
                    throw new InvalidArgumentException(sprintf('The property PushSubscriptionRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: PushSubscriptionRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PushSubscriptionRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest
     * @return \StructType\EwsSubscribeType
     */
    public function setPushSubscriptionRequest(?\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest = null): self
    {
        // validation for constraint: choice(PullSubscriptionRequest, PushSubscriptionRequest, StreamingSubscriptionRequest)
        if ('' !== ($pushSubscriptionRequestChoiceErrorMessage = self::validatePushSubscriptionRequestForChoiceConstraintsFromSetPushSubscriptionRequest($pushSubscriptionRequest))) {
            throw new InvalidArgumentException($pushSubscriptionRequestChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsStreamingSubscriptionRequestType|null
     */
    public function getStreamingSubscriptionRequest(): ?\StructType\EwsStreamingSubscriptionRequestType
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
    public function validateStreamingSubscriptionRequestForChoiceConstraintsFromSetStreamingSubscriptionRequest($value): string
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
                    throw new InvalidArgumentException(sprintf('The property StreamingSubscriptionRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: StreamingSubscriptionRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set StreamingSubscriptionRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest
     * @return \StructType\EwsSubscribeType
     */
    public function setStreamingSubscriptionRequest(?\StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest = null): self
    {
        // validation for constraint: choice(PullSubscriptionRequest, PushSubscriptionRequest, StreamingSubscriptionRequest)
        if ('' !== ($streamingSubscriptionRequestChoiceErrorMessage = self::validateStreamingSubscriptionRequestForChoiceConstraintsFromSetStreamingSubscriptionRequest($streamingSubscriptionRequest))) {
            throw new InvalidArgumentException($streamingSubscriptionRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($streamingSubscriptionRequest) || (is_array($streamingSubscriptionRequest) && empty($streamingSubscriptionRequest))) {
            unset($this->StreamingSubscriptionRequest);
        } else {
            $this->StreamingSubscriptionRequest = $streamingSubscriptionRequest;
        }
        
        return $this;
    }
}
