<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChannelSubscriptionBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsChannelSubscriptionBaseType extends AbstractStructBase
{
    /**
     * The SubscriptionId
     * Meta informations extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $SubscriptionId;
    /**
     * Constructor method for ChannelSubscriptionBaseType
     * @uses EwsChannelSubscriptionBaseType::setSubscriptionId()
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
     * @return \Ews\StructType\EwsChannelSubscriptionBaseType
     */
    public function setSubscriptionId($subscriptionId = null)
    {
        // validation for constraint: pattern
        if (!is_null($subscriptionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $subscriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($subscriptionId)), __LINE__);
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
     * @return \Ews\StructType\EwsChannelSubscriptionBaseType
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
