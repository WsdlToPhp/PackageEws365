<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkHoursType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWorkHoursType extends AbstractStructBase
{
    /**
     * The WorkDay
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WorkDay;
    /**
     * The TimeSlots
     * Meta information extracted from the WSDL
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
     * @throws \InvalidArgumentException
     * @param string $workDay
     * @return \Ews\StructType\EwsWorkHoursType
     */
    public function setWorkDay($workDay = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSystemDayOfWeek::valueIsValid($workDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSystemDayOfWeek', is_array($workDay) ? implode(', ', $workDay) : var_export($workDay, true), implode(', ', \Ews\EnumType\EwsSystemDayOfWeek::getValidValues())), __LINE__);
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
}
