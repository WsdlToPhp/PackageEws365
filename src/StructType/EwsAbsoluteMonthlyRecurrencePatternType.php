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
        // validation for constraint: int
        if (!is_null($dayOfMonth) && !(is_int($dayOfMonth) || ctype_digit($dayOfMonth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayOfMonth, true), gettype($dayOfMonth)), __LINE__);
        }
        $this->DayOfMonth = $dayOfMonth;
        return $this;
    }
}
