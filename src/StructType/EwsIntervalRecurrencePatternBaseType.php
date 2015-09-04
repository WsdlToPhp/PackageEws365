<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IntervalRecurrencePatternBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
        $this->Interval = $interval;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsIntervalRecurrencePatternBaseType
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
