<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Constructor method for WorkTimeSlot
     * @uses EwsWorkTimeSlot::setStartTimeInMinutes()
     * @uses EwsWorkTimeSlot::setEndTimeInMinutes()
     * @param int $startTimeInMinutes
     * @param int $endTimeInMinutes
     */
    public function __construct($startTimeInMinutes = null, $endTimeInMinutes = null)
    {
        $this
            ->setStartTimeInMinutes($startTimeInMinutes)
            ->setEndTimeInMinutes($endTimeInMinutes);
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
     * @return \Ews\StructType\EwsWorkTimeSlot
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
     * @return \Ews\StructType\EwsWorkTimeSlot
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
