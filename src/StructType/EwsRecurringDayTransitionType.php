<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringDayTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * @param string $dayOfWeek
     * @return \Ews\StructType\EwsRecurringDayTransitionType
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeek, implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
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
        $this->Occurrence = $occurrence;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecurringDayTransitionType
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
