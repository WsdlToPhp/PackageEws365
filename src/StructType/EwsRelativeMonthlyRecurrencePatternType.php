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
     * @param string $daysOfWeek
     * @return \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType
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
     * @return \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType
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
