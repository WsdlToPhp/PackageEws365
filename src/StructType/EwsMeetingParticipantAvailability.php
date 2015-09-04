<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingParticipantAvailability StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMeetingParticipantAvailability extends AbstractStructBase
{
    /**
     * The TimeSlot
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTimeSlot
     */
    public $TimeSlot;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * Constructor method for MeetingParticipantAvailability
     * @uses EwsMeetingParticipantAvailability::setTimeSlot()
     * @uses EwsMeetingParticipantAvailability::setId()
     * @param \Ews\StructType\EwsTimeSlot $timeSlot
     * @param string $id
     */
    public function __construct(\Ews\StructType\EwsTimeSlot $timeSlot = null, $id = null)
    {
        $this
            ->setTimeSlot($timeSlot)
            ->setId($id);
    }
    /**
     * Get TimeSlot value
     * @return \Ews\StructType\EwsTimeSlot
     */
    public function getTimeSlot()
    {
        return $this->TimeSlot;
    }
    /**
     * Set TimeSlot value
     * @param \Ews\StructType\EwsTimeSlot $timeSlot
     * @return \Ews\StructType\EwsMeetingParticipantAvailability
     */
    public function setTimeSlot(\Ews\StructType\EwsTimeSlot $timeSlot = null)
    {
        $this->TimeSlot = $timeSlot;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsMeetingParticipantAvailability
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingParticipantAvailability
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
