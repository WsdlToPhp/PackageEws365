<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbsoluteYearlyRecurrencePatternType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbsoluteYearlyRecurrencePatternType extends EwsRecurrencePatternBaseType
{
    /**
     * The DayOfMonth
     * @var int|null
     */
    protected ?int $DayOfMonth = null;
    /**
     * The Month
     * @var string|null
     */
    protected ?string $Month = null;
    /**
     * Constructor method for AbsoluteYearlyRecurrencePatternType
     * @uses EwsAbsoluteYearlyRecurrencePatternType::setDayOfMonth()
     * @uses EwsAbsoluteYearlyRecurrencePatternType::setMonth()
     * @param int $dayOfMonth
     * @param string $month
     */
    public function __construct(?int $dayOfMonth = null, ?string $month = null)
    {
        $this
            ->setDayOfMonth($dayOfMonth)
            ->setMonth($month);
    }
    /**
     * Get DayOfMonth value
     * @return int|null
     */
    public function getDayOfMonth(): ?int
    {
        return $this->DayOfMonth;
    }
    /**
     * Set DayOfMonth value
     * @param int $dayOfMonth
     * @return \StructType\EwsAbsoluteYearlyRecurrencePatternType
     */
    public function setDayOfMonth(?int $dayOfMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($dayOfMonth) && !(is_int($dayOfMonth) || ctype_digit($dayOfMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayOfMonth, true), gettype($dayOfMonth)), __LINE__);
        }
        $this->DayOfMonth = $dayOfMonth;
        
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
     * @return \StructType\EwsAbsoluteYearlyRecurrencePatternType
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
