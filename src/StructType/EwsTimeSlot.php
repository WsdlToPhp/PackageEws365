<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeSlot StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeSlot extends AbstractStructBase
{
    /**
     * The StartTime
     * @var string
     */
    public $StartTime;
    /**
     * The DurationInMinutes
     * @var float
     */
    public $DurationInMinutes;
    /**
     * Constructor method for TimeSlot
     * @uses EwsTimeSlot::setStartTime()
     * @uses EwsTimeSlot::setDurationInMinutes()
     * @param string $startTime
     * @param float $durationInMinutes
     */
    public function __construct($startTime = null, $durationInMinutes = null)
    {
        $this
            ->setStartTime($startTime)
            ->setDurationInMinutes($durationInMinutes);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Ews\StructType\EwsTimeSlot
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get DurationInMinutes value
     * @return float|null
     */
    public function getDurationInMinutes()
    {
        return $this->DurationInMinutes;
    }
    /**
     * Set DurationInMinutes value
     * @param float $durationInMinutes
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
