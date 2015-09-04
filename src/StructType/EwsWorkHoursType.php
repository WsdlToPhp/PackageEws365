<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkHoursType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsWorkHoursType extends AbstractStructBase
{
    /**
     * The WorkDay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WorkDay;
    /**
     * The TimeSlots
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfWorkTimeSlot
     */
    public $TimeSlots;
    /**
     * Constructor method for WorkHoursType
     * @uses EwsWorkHoursType::setWorkDay()
     * @uses EwsWorkHoursType::setTimeSlots()
     * @param string $workDay
     * @param \Ews\ArrayType\EwsArrayOfWorkTimeSlot $timeSlots
     */
    public function __construct($workDay = null, \Ews\ArrayType\EwsArrayOfWorkTimeSlot $timeSlots = null)
    {
        $this
            ->setWorkDay($workDay)
            ->setTimeSlots($timeSlots);
    }
    /**
     * Get WorkDay value
     * @return string|null
     */
    public function getWorkDay()
    {
        return $this->WorkDay;
    }
    /**
     * Set WorkDay value
     * @uses \Ews\EnumType\EwsSystemDayOfWeek::valueIsValid()
     * @uses \Ews\EnumType\EwsSystemDayOfWeek::getValidValues()
     * @param string $workDay
     * @return \Ews\StructType\EwsWorkHoursType
     */
    public function setWorkDay($workDay = null)
    {
        if (!\Ews\EnumType\EwsSystemDayOfWeek::valueIsValid($workDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $workDay, implode(', ', \Ews\EnumType\EwsSystemDayOfWeek::getValidValues())), __LINE__);
        }
        $this->WorkDay = $workDay;
        return $this;
    }
    /**
     * Get TimeSlots value
     * @return \Ews\ArrayType\EwsArrayOfWorkTimeSlot|null
     */
    public function getTimeSlots()
    {
        return $this->TimeSlots;
    }
    /**
     * Set TimeSlots value
     * @param \Ews\ArrayType\EwsArrayOfWorkTimeSlot $timeSlots
     * @return \Ews\StructType\EwsWorkHoursType
     */
    public function setTimeSlots(\Ews\ArrayType\EwsArrayOfWorkTimeSlot $timeSlots = null)
    {
        $this->TimeSlots = $timeSlots;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsWorkHoursType
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
