<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelativeYearlyRecurrencePatternType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * @param string $daysOfWeek
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public function setDaysOfWeek($daysOfWeek = null)
    {
        if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($daysOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $daysOfWeek, implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
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
     * @param string $dayOfWeekIndex
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public function setDayOfWeekIndex($dayOfWeekIndex = null)
    {
        if (!\Ews\EnumType\EwsDayOfWeekIndexType::valueIsValid($dayOfWeekIndex)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeekIndex, implode(', ', \Ews\EnumType\EwsDayOfWeekIndexType::getValidValues())), __LINE__);
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
     * @param string $month
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public function setMonth($month = null)
    {
        if (!\Ews\EnumType\EwsMonthNamesType::valueIsValid($month)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $month, implode(', ', \Ews\EnumType\EwsMonthNamesType::getValidValues())), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
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
