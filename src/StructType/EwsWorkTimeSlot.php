<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkTimeSlot StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWorkTimeSlot extends AbstractStructBase
{
    /**
     * The StartTimeInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $StartTimeInMinutes;
    /**
     * The EndTimeInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $EndTimeInMinutes;
    /**
     * Constructor method for WorkTimeSlot
     * @uses EwsWorkTimeSlot::setStartTimeInMinutes()
     * @uses EwsWorkTimeSlot::setEndTimeInMinutes()
     * @param int $startTimeInMinutes
     * @param int $endTimeInMinutes
     */
    public function __construct(int $startTimeInMinutes, int $endTimeInMinutes)
    {
        $this
            ->setStartTimeInMinutes($startTimeInMinutes)
            ->setEndTimeInMinutes($endTimeInMinutes);
    }
    /**
     * Get StartTimeInMinutes value
     * @return int
     */
    public function getStartTimeInMinutes(): int
    {
        return $this->StartTimeInMinutes;
    }
    /**
     * Set StartTimeInMinutes value
     * @param int $startTimeInMinutes
     * @return \StructType\EwsWorkTimeSlot
     */
    public function setStartTimeInMinutes(int $startTimeInMinutes): self
    {
        // validation for constraint: int
        if (!is_null($startTimeInMinutes) && !(is_int($startTimeInMinutes) || ctype_digit($startTimeInMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startTimeInMinutes, true), gettype($startTimeInMinutes)), __LINE__);
        }
        $this->StartTimeInMinutes = $startTimeInMinutes;
        
        return $this;
    }
    /**
     * Get EndTimeInMinutes value
     * @return int
     */
    public function getEndTimeInMinutes(): int
    {
        return $this->EndTimeInMinutes;
    }
    /**
     * Set EndTimeInMinutes value
     * @param int $endTimeInMinutes
     * @return \StructType\EwsWorkTimeSlot
     */
    public function setEndTimeInMinutes(int $endTimeInMinutes): self
    {
        // validation for constraint: int
        if (!is_null($endTimeInMinutes) && !(is_int($endTimeInMinutes) || ctype_digit($endTimeInMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endTimeInMinutes, true), gettype($endTimeInMinutes)), __LINE__);
        }
        $this->EndTimeInMinutes = $endTimeInMinutes;
        
        return $this;
    }
}
