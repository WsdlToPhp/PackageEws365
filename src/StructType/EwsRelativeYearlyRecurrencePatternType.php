<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $DaysOfWeek = null;
    /**
     * The DayOfWeekIndex
     * @var string|null
     */
    protected ?string $DayOfWeekIndex = null;
    /**
     * The Month
     * @var string|null
     */
    protected ?string $Month = null;
    /**
     * Constructor method for RelativeYearlyRecurrencePatternType
     * @uses EwsRelativeYearlyRecurrencePatternType::setDaysOfWeek()
     * @uses EwsRelativeYearlyRecurrencePatternType::setDayOfWeekIndex()
     * @uses EwsRelativeYearlyRecurrencePatternType::setMonth()
     * @param string $daysOfWeek
     * @param string $dayOfWeekIndex
     * @param string $month
     */
    public function __construct(?string $daysOfWeek = null, ?string $dayOfWeekIndex = null, ?string $month = null)
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
    public function getDaysOfWeek(): ?string
    {
        return $this->DaysOfWeek;
    }
    /**
     * Set DaysOfWeek value
     * @uses \EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \EnumType\EwsDayOfWeekType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $daysOfWeek
     * @return \StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public function setDaysOfWeek(?string $daysOfWeek = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDayOfWeekType::valueIsValid($daysOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDayOfWeekType', is_array($daysOfWeek) ? implode(', ', $daysOfWeek) : var_export($daysOfWeek, true), implode(', ', \EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DaysOfWeek = $daysOfWeek;
        
        return $this;
    }
    /**
     * Get DayOfWeekIndex value
     * @return string|null
     */
    public function getDayOfWeekIndex(): ?string
    {
        return $this->DayOfWeekIndex;
    }
    /**
     * Set DayOfWeekIndex value
     * @uses \EnumType\EwsDayOfWeekIndexType::valueIsValid()
     * @uses \EnumType\EwsDayOfWeekIndexType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayOfWeekIndex
     * @return \StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public function setDayOfWeekIndex(?string $dayOfWeekIndex = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDayOfWeekIndexType::valueIsValid($dayOfWeekIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDayOfWeekIndexType', is_array($dayOfWeekIndex) ? implode(', ', $dayOfWeekIndex) : var_export($dayOfWeekIndex, true), implode(', ', \EnumType\EwsDayOfWeekIndexType::getValidValues())), __LINE__);
        }
        $this->DayOfWeekIndex = $dayOfWeekIndex;
        
        return $this;
    }
    /**
     * Get Month value
     * @return string|null
     */
    public function getMonth(): ?string
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @uses \EnumType\EwsMonthNamesType::valueIsValid()
     * @uses \EnumType\EwsMonthNamesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $month
     * @return \StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public function setMonth(?string $month = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMonthNamesType::valueIsValid($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMonthNamesType', is_array($month) ? implode(', ', $month) : var_export($month, true), implode(', ', \EnumType\EwsMonthNamesType::getValidValues())), __LINE__);
        }
        $this->Month = $month;
        
        return $this;
    }
}
