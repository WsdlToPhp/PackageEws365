<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string[]
     */
    public $DaysOfWeek;
    /**
     * The FirstDayOfWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstDayOfWeek;
    /**
     * Constructor method for WeeklyRecurrencePatternType
     * @uses EwsWeeklyRecurrencePatternType::setDaysOfWeek()
     * @uses EwsWeeklyRecurrencePatternType::setFirstDayOfWeek()
     * @param string[] $daysOfWeek
     * @param string $firstDayOfWeek
     */
    public function __construct(array $daysOfWeek = array(), $firstDayOfWeek = null)
    {
        $this
            ->setDaysOfWeek($daysOfWeek)
            ->setFirstDayOfWeek($firstDayOfWeek);
    }
    /**
     * Get DaysOfWeek value
     * @return string[]|null
     */
    public function getDaysOfWeek()
    {
        return $this->DaysOfWeek;
    }
    /**
     * This method is responsible for validating the values passed to the setDaysOfWeek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDaysOfWeek method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDaysOfWeekForArrayConstraintsFromSetDaysOfWeek(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $weeklyRecurrencePatternTypeDaysOfWeekItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($weeklyRecurrencePatternTypeDaysOfWeekItem)) {
                $invalidValues[] = is_object($weeklyRecurrencePatternTypeDaysOfWeekItem) ? get_class($weeklyRecurrencePatternTypeDaysOfWeekItem) : sprintf('%s(%s)', gettype($weeklyRecurrencePatternTypeDaysOfWeekItem), var_export($weeklyRecurrencePatternTypeDaysOfWeekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDayOfWeekType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DaysOfWeek value
     * @uses \Ews\EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \Ews\EnumType\EwsDayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $daysOfWeek
     * @return \Ews\StructType\EwsWeeklyRecurrencePatternType
     */
    public function setDaysOfWeek(array $daysOfWeek = array())
    {
        // validation for constraint: list
        if ('' !== ($daysOfWeekArrayErrorMessage = self::validateDaysOfWeekForArrayConstraintsFromSetDaysOfWeek($daysOfWeek))) {
            throw new \InvalidArgumentException($daysOfWeekArrayErrorMessage, __LINE__);
        }
        $this->DaysOfWeek = is_array($daysOfWeek) ? implode(' ', $daysOfWeek) : null;
        return $this;
    }
    /**
     * Get FirstDayOfWeek value
     * @return string|null
     */
    public function getFirstDayOfWeek()
    {
        return $this->FirstDayOfWeek;
    }
    /**
     * Set FirstDayOfWeek value
     * @uses \Ews\EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \Ews\EnumType\EwsDayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $firstDayOfWeek
     * @return \Ews\StructType\EwsWeeklyRecurrencePatternType
     */
    public function setFirstDayOfWeek($firstDayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($firstDayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDayOfWeekType', is_array($firstDayOfWeek) ? implode(', ', $firstDayOfWeek) : var_export($firstDayOfWeek, true), implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->FirstDayOfWeek = $firstDayOfWeek;
        return $this;
    }
}
