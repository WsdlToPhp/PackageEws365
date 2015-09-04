<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetEventsType extends EwsBaseRequestType
{
    /**
     * The SubscriptionId
     * @var NonEmptyStringType
     */
    public $SubscriptionId;
    /**
     * The Watermark
     * @var NonEmptyStringType
     */
    public $Watermark;
    /**
     * Constructor method for GetEventsType
     * @uses EwsGetEventsType::setSubscriptionId()
     * @uses EwsGetEventsType::setWatermark()
     * @param NonEmptyStringType $subscriptionId
     * @param NonEmptyStringType $watermark
     */
    public function __construct(NonEmptyStringType $subscriptionId = null, NonEmptyStringType $watermark = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setWatermark($watermark);
    }
    /**
     * Get SubscriptionId value
     * @return NonEmptyStringType|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param NonEmptyStringType $subscriptionId
     * @return \Ews\StructType\EwsGetEventsType
     */
    public function setSubscriptionId(NonEmptyStringType $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Get Watermark value
     * @return NonEmptyStringType|null
     */
    public function getWatermark()
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param NonEmptyStringType $watermark
     * @return \Ews\StructType\EwsGetEventsType
     */
    public function setWatermark(NonEmptyStringType $watermark = null)
    {
        $this->Watermark = $watermark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetEventsType
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
