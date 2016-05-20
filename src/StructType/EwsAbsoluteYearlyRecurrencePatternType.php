<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int
     */
    public $DayOfMonth;
    /**
     * The Month
     * @var string
     */
    public $Month;
    /**
     * Constructor method for AbsoluteYearlyRecurrencePatternType
     * @uses EwsAbsoluteYearlyRecurrencePatternType::setDayOfMonth()
     * @uses EwsAbsoluteYearlyRecurrencePatternType::setMonth()
     * @param int $dayOfMonth
     * @param string $month
     */
    public function __construct($dayOfMonth = null, $month = null)
    {
        $this
            ->setDayOfMonth($dayOfMonth)
            ->setMonth($month);
    }
    /**
     * Get DayOfMonth value
     * @return int|null
     */
    public function getDayOfMonth()
    {
        return $this->DayOfMonth;
    }
    /**
     * Set DayOfMonth value
     * @param int $dayOfMonth
     * @return \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType
     */
    public function setDayOfMonth($dayOfMonth = null)
    {
        // validation for constraint: int
        if (!is_null($dayOfMonth) && !is_numeric($dayOfMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dayOfMonth)), __LINE__);
        }
        $this->DayOfMonth = $dayOfMonth;
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
     * @throws \InvalidArgumentException
     * @param string $month
     * @return \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType
     */
    public function setMonth($month = null)
    {
        // validation for constraint: enumeration
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
     * @return \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType
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
