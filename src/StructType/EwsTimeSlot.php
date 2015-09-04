<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeSlot StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsTimeSlot extends AbstractStructBase
{
    /**
     * The StartTime
     * @var dateTime
     */
    public $StartTime;
    /**
     * The DurationInMinutes
     * @var double
     */
    public $DurationInMinutes;
    /**
     * Constructor method for TimeSlot
     * @uses EwsTimeSlot::setStartTime()
     * @uses EwsTimeSlot::setDurationInMinutes()
     * @param dateTime $startTime
     * @param double $durationInMinutes
     */
    public function __construct($startTime = null, $durationInMinutes = null)
    {
        $this
            ->setStartTime($startTime)
            ->setDurationInMinutes($durationInMinutes);
    }
    /**
     * Get StartTime value
     * @return dateTime|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param dateTime $startTime
     * @return \Ews\StructType\EwsTimeSlot
     */
    public function setStartTime($startTime = null)
    {
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get DurationInMinutes value
     * @return double|null
     */
    public function getDurationInMinutes()
    {
        return $this->DurationInMinutes;
    }
    /**
     * Set DurationInMinutes value
     * @param double $durationInMinutes
     * @return \Ews\StructType\EwsTimeSlot
     */
    public function setDurationInMinutes($durationInMinutes = null)
    {
        $this->DurationInMinutes = $durationInMinutes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTimeSlot
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
