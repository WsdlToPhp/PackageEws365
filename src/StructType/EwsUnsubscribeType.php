<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnsubscribeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnsubscribeType extends EwsBaseRequestType
{
    /**
     * The SubscriptionId
     * @var NonEmptyStringType
     */
    public $SubscriptionId;
    /**
     * Constructor method for UnsubscribeType
     * @uses EwsUnsubscribeType::setSubscriptionId()
     * @param NonEmptyStringType $subscriptionId
     */
    public function __construct(NonEmptyStringType $subscriptionId = null)
    {
        $this
            ->setSubscriptionId($subscriptionId);
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
     * @return \Ews\StructType\EwsUnsubscribeType
     */
    public function setSubscriptionId(NonEmptyStringType $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnsubscribeType
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
