<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingParticipantAvailability StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingParticipantAvailability extends AbstractStructBase
{
    /**
     * The TimeSlot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsTimeSlot
     */
    public $TimeSlot;
    /**
     * The Id
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
}
