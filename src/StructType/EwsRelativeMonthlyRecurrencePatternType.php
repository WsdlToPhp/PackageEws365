<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $DaysOfWeek = null;
    /**
     * The DayOfWeekIndex
     * @var string|null
     */
    protected ?string $DayOfWeekIndex = null;
    /**
     * Constructor method for RelativeMonthlyRecurrencePatternType
     * @uses EwsRelativeMonthlyRecurrencePatternType::setDaysOfWeek()
     * @uses EwsRelativeMonthlyRecurrencePatternType::setDayOfWeekIndex()
     * @param string $daysOfWeek
     * @param string $dayOfWeekIndex
     */
    public function __construct(?string $daysOfWeek = null, ?string $dayOfWeekIndex = null)
    {
        $this
            ->setDaysOfWeek($daysOfWeek)
            ->setDayOfWeekIndex($dayOfWeekIndex);
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
     * @return \StructType\EwsRelativeMonthlyRecurrencePatternType
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
     * @return \StructType\EwsRelativeMonthlyRecurrencePatternType
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
}
