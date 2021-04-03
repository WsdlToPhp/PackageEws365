<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $WorkDay = null;
    /**
     * The TimeSlots
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfWorkTimeSlot|null
     */
    protected ?\ArrayType\EwsArrayOfWorkTimeSlot $TimeSlots = null;
    /**
     * Constructor method for WorkHoursType
     * @uses EwsWorkHoursType::setWorkDay()
     * @uses EwsWorkHoursType::setTimeSlots()
     * @param string $workDay
     * @param \ArrayType\EwsArrayOfWorkTimeSlot $timeSlots
     */
    public function __construct(?string $workDay = null, ?\ArrayType\EwsArrayOfWorkTimeSlot $timeSlots = null)
    {
        $this
            ->setWorkDay($workDay)
            ->setTimeSlots($timeSlots);
    }
    /**
     * Get WorkDay value
     * @return string|null
     */
    public function getWorkDay(): ?string
    {
        return $this->WorkDay;
    }
    /**
     * Set WorkDay value
     * @uses \EnumType\EwsSystemDayOfWeek::valueIsValid()
     * @uses \EnumType\EwsSystemDayOfWeek::getValidValues()
     * @throws InvalidArgumentException
     * @param string $workDay
     * @return \StructType\EwsWorkHoursType
     */
    public function setWorkDay(?string $workDay = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSystemDayOfWeek::valueIsValid($workDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSystemDayOfWeek', is_array($workDay) ? implode(', ', $workDay) : var_export($workDay, true), implode(', ', \EnumType\EwsSystemDayOfWeek::getValidValues())), __LINE__);
        }
        $this->WorkDay = $workDay;
        
        return $this;
    }
    /**
     * Get TimeSlots value
     * @return \ArrayType\EwsArrayOfWorkTimeSlot|null
     */
    public function getTimeSlots(): ?\ArrayType\EwsArrayOfWorkTimeSlot
    {
        return $this->TimeSlots;
    }
    /**
     * Set TimeSlots value
     * @param \ArrayType\EwsArrayOfWorkTimeSlot $timeSlots
     * @return \StructType\EwsWorkHoursType
     */
    public function setTimeSlots(?\ArrayType\EwsArrayOfWorkTimeSlot $timeSlots = null): self
    {
        $this->TimeSlots = $timeSlots;
        
        return $this;
    }
}
