<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTimeSlot
     */
    protected \StructType\EwsTimeSlot $TimeSlot;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * Constructor method for MeetingParticipantAvailability
     * @uses EwsMeetingParticipantAvailability::setTimeSlot()
     * @uses EwsMeetingParticipantAvailability::setId()
     * @param \StructType\EwsTimeSlot $timeSlot
     * @param string $id
     */
    public function __construct(\StructType\EwsTimeSlot $timeSlot, ?string $id = null)
    {
        $this
            ->setTimeSlot($timeSlot)
            ->setId($id);
    }
    /**
     * Get TimeSlot value
     * @return \StructType\EwsTimeSlot
     */
    public function getTimeSlot(): \StructType\EwsTimeSlot
    {
        return $this->TimeSlot;
    }
    /**
     * Set TimeSlot value
     * @param \StructType\EwsTimeSlot $timeSlot
     * @return \StructType\EwsMeetingParticipantAvailability
     */
    public function setTimeSlot(\StructType\EwsTimeSlot $timeSlot): self
    {
        $this->TimeSlot = $timeSlot;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsMeetingParticipantAvailability
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
