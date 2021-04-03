<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WeeklyRecurrencePatternType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWeeklyRecurrencePatternType extends EwsIntervalRecurrencePatternBaseType
{
    /**
     * The DaysOfWeek
     * @var string
     */
    protected ?string $DaysOfWeek = null;
    /**
     * The FirstDayOfWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstDayOfWeek = null;
    /**
     * Constructor method for WeeklyRecurrencePatternType
     * @uses EwsWeeklyRecurrencePatternType::setDaysOfWeek()
     * @uses EwsWeeklyRecurrencePatternType::setFirstDayOfWeek()
     * @param array|string $daysOfWeek
     * @param string $firstDayOfWeek
     */
    public function __construct($daysOfWeek = [], ?string $firstDayOfWeek = null)
    {
        $this
            ->setDaysOfWeek($daysOfWeek)
            ->setFirstDayOfWeek($firstDayOfWeek);
    }
    /**
     * Get DaysOfWeek value
     * @return string
     */
    public function getDaysOfWeek(): ?string
    {
        return $this->DaysOfWeek;
    }
    /**
     * This method is responsible for validating the values passed to the setDaysOfWeek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDaysOfWeek method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDaysOfWeekForArrayConstraintsFromSetDaysOfWeek(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $weeklyRecurrencePatternTypeDaysOfWeekItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsDayOfWeekType::valueIsValid($weeklyRecurrencePatternTypeDaysOfWeekItem)) {
                $invalidValues[] = is_object($weeklyRecurrencePatternTypeDaysOfWeekItem) ? get_class($weeklyRecurrencePatternTypeDaysOfWeekItem) : sprintf('%s(%s)', gettype($weeklyRecurrencePatternTypeDaysOfWeekItem), var_export($weeklyRecurrencePatternTypeDaysOfWeekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDayOfWeekType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsDayOfWeekType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DaysOfWeek value
     * @uses \EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \EnumType\EwsDayOfWeekType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $daysOfWeek
     * @return \StructType\EwsWeeklyRecurrencePatternType
     */
    public function setDaysOfWeek($daysOfWeek = []): self
    {
        // validation for constraint: list
        if ('' !== ($daysOfWeekArrayErrorMessage = self::validateDaysOfWeekForArrayConstraintsFromSetDaysOfWeek(is_string($daysOfWeek) ? explode(' ', $daysOfWeek) : $daysOfWeek))) {
            throw new InvalidArgumentException($daysOfWeekArrayErrorMessage, __LINE__);
        }
        $this->DaysOfWeek = is_array($daysOfWeek) ? implode(' ', $daysOfWeek) : $daysOfWeek;
        
        return $this;
    }
    /**
     * Get FirstDayOfWeek value
     * @return string|null
     */
    public function getFirstDayOfWeek(): ?string
    {
        return $this->FirstDayOfWeek;
    }
    /**
     * Set FirstDayOfWeek value
     * @uses \EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \EnumType\EwsDayOfWeekType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $firstDayOfWeek
     * @return \StructType\EwsWeeklyRecurrencePatternType
     */
    public function setFirstDayOfWeek(?string $firstDayOfWeek = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDayOfWeekType::valueIsValid($firstDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDayOfWeekType', is_array($firstDayOfWeek) ? implode(', ', $firstDayOfWeek) : var_export($firstDayOfWeek, true), implode(', ', \EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->FirstDayOfWeek = $firstDayOfWeek;
        
        return $this;
    }
}
