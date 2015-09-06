<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbsoluteMonthlyRecurrencePatternType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbsoluteMonthlyRecurrencePatternType extends EwsIntervalRecurrencePatternBaseType
{
    /**
     * The DayOfMonth
     * @var int
     */
    public $DayOfMonth;
    /**
     * Constructor method for AbsoluteMonthlyRecurrencePatternType
     * @uses EwsAbsoluteMonthlyRecurrencePatternType::setDayOfMonth()
     * @param int $dayOfMonth
     */
    public function __construct($dayOfMonth = null)
    {
        $this
            ->setDayOfMonth($dayOfMonth);
    }
    /**
     * Get DayOfMonth value
     * @return int|null
     */
    public function getDayOfMonth()
    {
        return $this->DayOfMonth;
    }
    /**
     * Set DayOfMonth value
     * @param int $dayOfMonth
     * @return \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType
     */
    public function setDayOfMonth($dayOfMonth = null)
    {
        $this->DayOfMonth = $dayOfMonth;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType
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
