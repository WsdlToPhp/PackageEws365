<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscribeResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSubscribeResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SubscriptionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var NonEmptyStringType
     */
    public $SubscriptionId;
    /**
     * The Watermark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var NonEmptyStringType
     */
    public $Watermark;
    /**
     * Constructor method for SubscribeResponseMessageType
     * @uses EwsSubscribeResponseMessageType::setSubscriptionId()
     * @uses EwsSubscribeResponseMessageType::setWatermark()
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
     * @return \Ews\StructType\EwsSubscribeResponseMessageType
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
     * @return \Ews\StructType\EwsSubscribeResponseMessageType
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
     * @return \Ews\StructType\EwsSubscribeResponseMessageType
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
