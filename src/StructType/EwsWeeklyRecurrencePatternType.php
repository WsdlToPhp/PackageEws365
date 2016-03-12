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
     * @var DayOfWeekType[]
     */
    public $DaysOfWeek;
    /**
     * The FirstDayOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstDayOfWeek;
    /**
     * Constructor method for WeeklyRecurrencePatternType
     * @uses EwsWeeklyRecurrencePatternType::setDaysOfWeek()
     * @uses EwsWeeklyRecurrencePatternType::setFirstDayOfWeek()
     * @param DayOfWeekType[] $daysOfWeek
     * @param string $firstDayOfWeek
     */
    public function __construct($daysOfWeek = null, $firstDayOfWeek = null)
    {
        $this
            ->setDaysOfWeek($daysOfWeek)
            ->setFirstDayOfWeek($firstDayOfWeek);
    }
    /**
     * Get DaysOfWeek value
     * @return DayOfWeekType[]|null
     */
    public function getDaysOfWeek()
    {
        return $this->DaysOfWeek;
    }
    /**
     * Set DaysOfWeek value
     * @param DayOfWeekType[] $daysOfWeek
     * @return \Ews\StructType\EwsWeeklyRecurrencePatternType
     */
    public function setDaysOfWeek($daysOfWeek = null)
    {
        $this->DaysOfWeek = $daysOfWeek;
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $firstDayOfWeek, implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->FirstDayOfWeek = $firstDayOfWeek;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsWeeklyRecurrencePatternType
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
