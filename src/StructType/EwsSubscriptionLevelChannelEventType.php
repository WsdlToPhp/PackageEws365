<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionLevelChannelEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsSubscriptionLevelChannelEventType extends EwsChannelEventType
{
    /**
     * The SubscriptionId
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $SubscriptionId;
    /**
     * The SequenceNumber
     * @var int
     */
    public $SequenceNumber;
    /**
     * The ActionDelay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ActionDelay;
    /**
     * Constructor method for SubscriptionLevelChannelEventType
     * @uses EwsSubscriptionLevelChannelEventType::setSubscriptionId()
     * @uses EwsSubscriptionLevelChannelEventType::setSequenceNumber()
     * @uses EwsSubscriptionLevelChannelEventType::setActionDelay()
     * @param string $subscriptionId
     * @param int $sequenceNumber
     * @param int $actionDelay
     */
    public function __construct($subscriptionId = null, $sequenceNumber = null, $actionDelay = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setSequenceNumber($sequenceNumber)
            ->setActionDelay($actionDelay);
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
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
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
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get ActionDelay value
     * @return int|null
     */
    public function getActionDelay()
    {
        return $this->ActionDelay;
    }
    /**
     * Set ActionDelay value
     * @param int $actionDelay
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
     */
    public function setActionDelay($actionDelay = null)
    {
        // validation for constraint: int
        if (!is_null($actionDelay) && !is_numeric($actionDelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($actionDelay)), __LINE__);
        }
        $this->ActionDelay = $actionDelay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
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
