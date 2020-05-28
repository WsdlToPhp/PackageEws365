<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelativeYearlyRecurrencePatternType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRelativeYearlyRecurrencePatternType extends EwsRecurrencePatternBaseType
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
     * The Month
     * @var string
     */
    public $Month;
    /**
     * Constructor method for RelativeYearlyRecurrencePatternType
     * @uses EwsRelativeYearlyRecurrencePatternType::setDaysOfWeek()
     * @uses EwsRelativeYearlyRecurrencePatternType::setDayOfWeekIndex()
     * @uses EwsRelativeYearlyRecurrencePatternType::setMonth()
     * @param string $daysOfWeek
     * @param string $dayOfWeekIndex
     * @param string $month
     */
    public function __construct($daysOfWeek = null, $dayOfWeekIndex = null, $month = null)
    {
        $this
            ->setDaysOfWeek($daysOfWeek)
            ->setDayOfWeekIndex($dayOfWeekIndex)
            ->setMonth($month);
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
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
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
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
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
    /**
     * Get Month value
     * @return string|null
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @uses \Ews\EnumType\EwsMonthNamesType::valueIsValid()
     * @uses \Ews\EnumType\EwsMonthNamesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $month
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public function setMonth($month = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMonthNamesType::valueIsValid($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMonthNamesType', is_array($month) ? implode(', ', $month) : var_export($month, true), implode(', ', \Ews\EnumType\EwsMonthNamesType::getValidValues())), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
}
