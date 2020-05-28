<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkingPeriod StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWorkingPeriod extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $DayOfWeek;
    /**
     * The StartTimeInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $StartTimeInMinutes;
    /**
     * The EndTimeInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EndTimeInMinutes;
    /**
     * Constructor method for WorkingPeriod
     * @uses EwsWorkingPeriod::setDayOfWeek()
     * @uses EwsWorkingPeriod::setStartTimeInMinutes()
     * @uses EwsWorkingPeriod::setEndTimeInMinutes()
     * @param string[] $dayOfWeek
     * @param int $startTimeInMinutes
     * @param int $endTimeInMinutes
     */
    public function __construct(array $dayOfWeek = array(), $startTimeInMinutes = null, $endTimeInMinutes = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setStartTimeInMinutes($startTimeInMinutes)
            ->setEndTimeInMinutes($endTimeInMinutes);
    }
    /**
     * Get DayOfWeek value
     * @return string[]
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * This method is responsible for validating the values passed to the setDayOfWeek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDayOfWeek method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDayOfWeekForArrayConstraintsFromSetDayOfWeek(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workingPeriodDayOfWeekItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($workingPeriodDayOfWeekItem)) {
                $invalidValues[] = is_object($workingPeriodDayOfWeekItem) ? get_class($workingPeriodDayOfWeekItem) : sprintf('%s(%s)', gettype($workingPeriodDayOfWeekItem), var_export($workingPeriodDayOfWeekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDayOfWeekType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DayOfWeek value
     * @uses \Ews\EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \Ews\EnumType\EwsDayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $dayOfWeek
     * @return \Ews\StructType\EwsWorkingPeriod
     */
    public function setDayOfWeek(array $dayOfWeek = array())
    {
        // validation for constraint: list
        if ('' !== ($dayOfWeekArrayErrorMessage = self::validateDayOfWeekForArrayConstraintsFromSetDayOfWeek($dayOfWeek))) {
            throw new \InvalidArgumentException($dayOfWeekArrayErrorMessage, __LINE__);
        }
        $this->DayOfWeek = is_array($dayOfWeek) ? implode(' ', $dayOfWeek) : null;
        return $this;
    }
    /**
     * Get StartTimeInMinutes value
     * @return int
     */
    public function getStartTimeInMinutes()
    {
        return $this->StartTimeInMinutes;
    }
    /**
     * Set StartTimeInMinutes value
     * @param int $startTimeInMinutes
     * @return \Ews\StructType\EwsWorkingPeriod
     */
    public function setStartTimeInMinutes($startTimeInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($startTimeInMinutes) && !(is_int($startTimeInMinutes) || ctype_digit($startTimeInMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startTimeInMinutes, true), gettype($startTimeInMinutes)), __LINE__);
        }
        $this->StartTimeInMinutes = $startTimeInMinutes;
        return $this;
    }
    /**
     * Get EndTimeInMinutes value
     * @return int
     */
    public function getEndTimeInMinutes()
    {
        return $this->EndTimeInMinutes;
    }
    /**
     * Set EndTimeInMinutes value
     * @param int $endTimeInMinutes
     * @return \Ews\StructType\EwsWorkingPeriod
     */
    public function setEndTimeInMinutes($endTimeInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($endTimeInMinutes) && !(is_int($endTimeInMinutes) || ctype_digit($endTimeInMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endTimeInMinutes, true), gettype($endTimeInMinutes)), __LINE__);
        }
        $this->EndTimeInMinutes = $endTimeInMinutes;
        return $this;
    }
}
