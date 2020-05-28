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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
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
        // validation for constraint: float
        if (!is_null($durationInMinutes) && !(is_float($durationInMinutes) || is_numeric($durationInMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($durationInMinutes, true), gettype($durationInMinutes)), __LINE__);
        }
        $this->DurationInMinutes = $durationInMinutes;
        return $this;
    }
}
