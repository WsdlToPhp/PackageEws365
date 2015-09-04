<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkTimeSlot StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsWorkTimeSlot extends AbstractStructBase
{
    /**
     * The StartTimeInMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $StartTimeInMinutes;
    /**
     * The EndTimeInMinutes
     * Meta informations extracted from the WSDL
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
        $this->EndTimeInMinutes = $endTimeInMinutes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsWorkTimeSlot
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
