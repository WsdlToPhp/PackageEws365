<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupUnseenChangedChannelEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupUnseenChangedChannelEventType extends EwsSubscriptionLevelChannelEventType
{
    /**
     * The UnseenCount
     * @var int
     */
    public $UnseenCount;
    /**
     * The LastVisitedTime
     * @var string
     */
    public $LastVisitedTime;
    /**
     * Constructor method for UnifiedGroupUnseenChangedChannelEventType
     * @uses EwsUnifiedGroupUnseenChangedChannelEventType::setUnseenCount()
     * @uses EwsUnifiedGroupUnseenChangedChannelEventType::setLastVisitedTime()
     * @param int $unseenCount
     * @param string $lastVisitedTime
     */
    public function __construct($unseenCount = null, $lastVisitedTime = null)
    {
        $this
            ->setUnseenCount($unseenCount)
            ->setLastVisitedTime($lastVisitedTime);
    }
    /**
     * Get UnseenCount value
     * @return int|null
     */
    public function getUnseenCount()
    {
        return $this->UnseenCount;
    }
    /**
     * Set UnseenCount value
     * @param int $unseenCount
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     */
    public function setUnseenCount($unseenCount = null)
    {
        // validation for constraint: int
        if (!is_null($unseenCount) && !is_numeric($unseenCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unseenCount)), __LINE__);
        }
        $this->UnseenCount = $unseenCount;
        return $this;
    }
    /**
     * Get LastVisitedTime value
     * @return string|null
     */
    public function getLastVisitedTime()
    {
        return $this->LastVisitedTime;
    }
    /**
     * Set LastVisitedTime value
     * @param string $lastVisitedTime
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     */
    public function setLastVisitedTime($lastVisitedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTime) && !is_string($lastVisitedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastVisitedTime)), __LINE__);
        }
        $this->LastVisitedTime = $lastVisitedTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
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
