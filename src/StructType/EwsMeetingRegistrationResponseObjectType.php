<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRegistrationResponseObjectType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingRegistrationResponseObjectType extends EwsWellKnownResponseObjectType
{
    /**
     * The ProposedStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProposedStart;
    /**
     * The ProposedEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProposedEnd;
    /**
     * Constructor method for MeetingRegistrationResponseObjectType
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedStart()
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedEnd()
     * @param string $proposedStart
     * @param string $proposedEnd
     */
    public function __construct($proposedStart = null, $proposedEnd = null)
    {
        $this
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd);
    }
    /**
     * Get ProposedStart value
     * @return string|null
     */
    public function getProposedStart()
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param string $proposedStart
     * @return \Ews\StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedStart($proposedStart = null)
    {
        // validation for constraint: string
        if (!is_null($proposedStart) && !is_string($proposedStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedStart, true), gettype($proposedStart)), __LINE__);
        }
        $this->ProposedStart = $proposedStart;
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return string|null
     */
    public function getProposedEnd()
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param string $proposedEnd
     * @return \Ews\StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedEnd($proposedEnd = null)
    {
        // validation for constraint: string
        if (!is_null($proposedEnd) && !is_string($proposedEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedEnd, true), gettype($proposedEnd)), __LINE__);
        }
        $this->ProposedEnd = $proposedEnd;
        return $this;
    }
}
