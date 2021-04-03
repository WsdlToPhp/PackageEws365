<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $ProposedStart = null;
    /**
     * The ProposedEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProposedEnd = null;
    /**
     * Constructor method for MeetingRegistrationResponseObjectType
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedStart()
     * @uses EwsMeetingRegistrationResponseObjectType::setProposedEnd()
     * @param string $proposedStart
     * @param string $proposedEnd
     */
    public function __construct(?string $proposedStart = null, ?string $proposedEnd = null)
    {
        $this
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd);
    }
    /**
     * Get ProposedStart value
     * @return string|null
     */
    public function getProposedStart(): ?string
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param string $proposedStart
     * @return \StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedStart(?string $proposedStart = null): self
    {
        // validation for constraint: string
        if (!is_null($proposedStart) && !is_string($proposedStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedStart, true), gettype($proposedStart)), __LINE__);
        }
        $this->ProposedStart = $proposedStart;
        
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return string|null
     */
    public function getProposedEnd(): ?string
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param string $proposedEnd
     * @return \StructType\EwsMeetingRegistrationResponseObjectType
     */
    public function setProposedEnd(?string $proposedEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($proposedEnd) && !is_string($proposedEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedEnd, true), gettype($proposedEnd)), __LINE__);
        }
        $this->ProposedEnd = $proposedEnd;
        
        return $this;
    }
}
