<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscribeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSubscribeType extends EwsBaseRequestType
{
    /**
     * The PullSubscriptionRequest
     * @var \Ews\StructType\EwsPullSubscriptionRequestType
     */
    public $PullSubscriptionRequest;
    /**
     * The PushSubscriptionRequest
     * @var \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public $PushSubscriptionRequest;
    /**
     * The StreamingSubscriptionRequest
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
     * @param \Ews\StructType\EwsStreamingSubscriptionRequestType
     * $streamingSubscriptionRequest
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
        return $this->PullSubscriptionRequest;
    }
    /**
     * Set PullSubscriptionRequest value
     * @param \Ews\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest
     * @return \Ews\StructType\EwsSubscribeType
     */
    public function setPullSubscriptionRequest(\Ews\StructType\EwsPullSubscriptionRequestType $pullSubscriptionRequest = null)
    {
        $this->PullSubscriptionRequest = $pullSubscriptionRequest;
        return $this;
    }
    /**
     * Get PushSubscriptionRequest value
     * @return \Ews\StructType\EwsPushSubscriptionRequestType|null
     */
    public function getPushSubscriptionRequest()
    {
        return $this->PushSubscriptionRequest;
    }
    /**
     * Set PushSubscriptionRequest value
     * @param \Ews\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest
     * @return \Ews\StructType\EwsSubscribeType
     */
    public function setPushSubscriptionRequest(\Ews\StructType\EwsPushSubscriptionRequestType $pushSubscriptionRequest = null)
    {
        $this->PushSubscriptionRequest = $pushSubscriptionRequest;
        return $this;
    }
    /**
     * Get StreamingSubscriptionRequest value
     * @return \Ews\StructType\EwsStreamingSubscriptionRequestType|null
     */
    public function getStreamingSubscriptionRequest()
    {
        return $this->StreamingSubscriptionRequest;
    }
    /**
     * Set StreamingSubscriptionRequest value
     * @param \Ews\StructType\EwsStreamingSubscriptionRequestType
     * $streamingSubscriptionRequest
     * @return \Ews\StructType\EwsSubscribeType
     */
    public function setStreamingSubscriptionRequest(\Ews\StructType\EwsStreamingSubscriptionRequestType $streamingSubscriptionRequest = null)
    {
        $this->StreamingSubscriptionRequest = $streamingSubscriptionRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSubscribeType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
