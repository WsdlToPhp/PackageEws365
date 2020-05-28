<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelativeMonthlyRecurrencePatternType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRelativeMonthlyRecurrencePatternType extends EwsIntervalRecurrencePatternBaseType
{
    /**
     * The DaysOfWeek
     * @var string
     */
    public $DaysOfWeek;
    /**
     * The DayOfWeekIndex
     * @var string
     */
    public $DayOfWeekIndex;
    /**
     * Constructor method for RelativeMonthlyRecurrencePatternType
     * @uses EwsRelativeMonthlyRecurrencePatternType::setDaysOfWeek()
     * @uses EwsRelativeMonthlyRecurrencePatternType::setDayOfWeekIndex()
     * @param string $daysOfWeek
     * @param string $dayOfWeekIndex
     */
    public function __construct($daysOfWeek = null, $dayOfWeekIndex = null)
    {
        $this
            ->setDaysOfWeek($daysOfWeek)
            ->setDayOfWeekIndex($dayOfWeekIndex);
    }
    /**
     * Get DaysOfWeek value
     * @return string|null
     */
    public function getDaysOfWeek()
    {
        return $this->DaysOfWeek;
    }
    /**
     * Set DaysOfWeek value
     * @uses \Ews\EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \Ews\EnumType\EwsDayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $daysOfWeek
     * @return \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType
     */
    public function setDaysOfWeek($daysOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($daysOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDayOfWeekType', is_array($daysOfWeek) ? implode(', ', $daysOfWeek) : var_export($daysOfWeek, true), implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DaysOfWeek = $daysOfWeek;
        return $this;
    }
    /**
     * Get DayOfWeekIndex value
     * @return string|null
     */
    public function getDayOfWeekIndex()
    {
        return $this->DayOfWeekIndex;
    }
    /**
     * Set DayOfWeekIndex value
     * @uses \Ews\EnumType\EwsDayOfWeekIndexType::valueIsValid()
     * @uses \Ews\EnumType\EwsDayOfWeekIndexType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayOfWeekIndex
     * @return \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType
     */
    public function setDayOfWeekIndex($dayOfWeekIndex = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDayOfWeekIndexType::valueIsValid($dayOfWeekIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDayOfWeekIndexType', is_array($dayOfWeekIndex) ? implode(', ', $dayOfWeekIndex) : var_export($dayOfWeekIndex, true), implode(', ', \Ews\EnumType\EwsDayOfWeekIndexType::getValidValues())), __LINE__);
        }
        $this->DayOfWeekIndex = $dayOfWeekIndex;
        return $this;
    }
}
