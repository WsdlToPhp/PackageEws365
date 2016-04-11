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
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $SubscriptionId;
    /**
     * Constructor method for UnsubscribeType
     * @uses EwsUnsubscribeType::setSubscriptionId()
     * @param string $subscriptionId
     */
    public function __construct($subscriptionId = null)
    {
        $this
            ->setSubscriptionId($subscriptionId);
    }
    /**
     * Get SubscriptionId value
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param string $subscriptionId
     * @return \Ews\StructType\EwsUnsubscribeType
     */
    public function setSubscriptionId($subscriptionId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($subscriptionId) && strlen($subscriptionId) < 1) || (is_array($subscriptionId) && count($subscriptionId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subscriptionId)), __LINE__);
        }
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
