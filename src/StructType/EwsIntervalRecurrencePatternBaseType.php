<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IntervalRecurrencePatternBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsIntervalRecurrencePatternBaseType extends EwsRecurrencePatternBaseType
{
    /**
     * The Interval
     * @var int
     */
    public $Interval;
    /**
     * Constructor method for IntervalRecurrencePatternBaseType
     * @uses EwsIntervalRecurrencePatternBaseType::setInterval()
     * @param int $interval
     */
    public function __construct($interval = null)
    {
        $this
            ->setInterval($interval);
    }
    /**
     * Get Interval value
     * @return int|null
     */
    public function getInterval()
    {
        return $this->Interval;
    }
    /**
     * Set Interval value
     * @param int $interval
     * @return \Ews\StructType\EwsIntervalRecurrencePatternBaseType
     */
    public function setInterval($interval = null)
    {
        // validation for constraint: int
        if (!is_null($interval) && !(is_int($interval) || ctype_digit($interval))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($interval, true), gettype($interval)), __LINE__);
        }
        $this->Interval = $interval;
        return $this;
    }
}
