<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringDayTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurringDayTransitionType extends EwsRecurringTimeTransitionType
{
    /**
     * The DayOfWeek
     * @var string
     */
    public $DayOfWeek;
    /**
     * The Occurrence
     * @var int
     */
    public $Occurrence;
    /**
     * Constructor method for RecurringDayTransitionType
     * @uses EwsRecurringDayTransitionType::setDayOfWeek()
     * @uses EwsRecurringDayTransitionType::setOccurrence()
     * @param string $dayOfWeek
     * @param int $occurrence
     */
    public function __construct($dayOfWeek = null, $occurrence = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setOccurrence($occurrence);
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \Ews\EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \Ews\EnumType\EwsDayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayOfWeek
     * @return \Ews\StructType\EwsRecurringDayTransitionType
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDayOfWeekType', is_array($dayOfWeek) ? implode(', ', $dayOfWeek) : var_export($dayOfWeek, true), implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Occurrence value
     * @return int|null
     */
    public function getOccurrence()
    {
        return $this->Occurrence;
    }
    /**
     * Set Occurrence value
     * @param int $occurrence
     * @return \Ews\StructType\EwsRecurringDayTransitionType
     */
    public function setOccurrence($occurrence = null)
    {
        // validation for constraint: int
        if (!is_null($occurrence) && !(is_int($occurrence) || ctype_digit($occurrence))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($occurrence, true), gettype($occurrence)), __LINE__);
        }
        $this->Occurrence = $occurrence;
        return $this;
    }
}
