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
     * @var dateTime
     */
    public $LastVisitedTime;
    /**
     * Constructor method for UnifiedGroupUnseenChangedChannelEventType
     * @uses EwsUnifiedGroupUnseenChangedChannelEventType::setUnseenCount()
     * @uses EwsUnifiedGroupUnseenChangedChannelEventType::setLastVisitedTime()
     * @param int $unseenCount
     * @param dateTime $lastVisitedTime
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
        $this->UnseenCount = $unseenCount;
        return $this;
    }
    /**
     * Get LastVisitedTime value
     * @return dateTime|null
     */
    public function getLastVisitedTime()
    {
        return $this->LastVisitedTime;
    }
    /**
     * Set LastVisitedTime value
     * @param dateTime $lastVisitedTime
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     */
    public function setLastVisitedTime($lastVisitedTime = null)
    {
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
