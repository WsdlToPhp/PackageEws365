<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttendeeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttendeeType extends AbstractStructBase
{
    /**
     * The Mailbox
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * The ResponseType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResponseType = null;
    /**
     * The LastResponseTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastResponseTime = null;
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
     * Constructor method for AttendeeType
     * @uses EwsAttendeeType::setMailbox()
     * @uses EwsAttendeeType::setResponseType()
     * @uses EwsAttendeeType::setLastResponseTime()
     * @uses EwsAttendeeType::setProposedStart()
     * @uses EwsAttendeeType::setProposedEnd()
     * @param \StructType\EwsEmailAddressType $mailbox
     * @param string $responseType
     * @param string $lastResponseTime
     * @param string $proposedStart
     * @param string $proposedEnd
     */
    public function __construct(?\StructType\EwsEmailAddressType $mailbox = null, ?string $responseType = null, ?string $lastResponseTime = null, ?string $proposedStart = null, ?string $proposedEnd = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setResponseType($responseType)
            ->setLastResponseTime($lastResponseTime)
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getMailbox(): ?\StructType\EwsEmailAddressType
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \StructType\EwsEmailAddressType $mailbox
     * @return \StructType\EwsAttendeeType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get ResponseType value
     * @return string|null
     */
    public function getResponseType(): ?string
    {
        return $this->ResponseType;
    }
    /**
     * Set ResponseType value
     * @uses \EnumType\EwsResponseTypeType::valueIsValid()
     * @uses \EnumType\EwsResponseTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $responseType
     * @return \StructType\EwsAttendeeType
     */
    public function setResponseType(?string $responseType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsResponseTypeType::valueIsValid($responseType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsResponseTypeType', is_array($responseType) ? implode(', ', $responseType) : var_export($responseType, true), implode(', ', \EnumType\EwsResponseTypeType::getValidValues())), __LINE__);
        }
        $this->ResponseType = $responseType;
        
        return $this;
    }
    /**
     * Get LastResponseTime value
     * @return string|null
     */
    public function getLastResponseTime(): ?string
    {
        return $this->LastResponseTime;
    }
    /**
     * Set LastResponseTime value
     * @param string $lastResponseTime
     * @return \StructType\EwsAttendeeType
     */
    public function setLastResponseTime(?string $lastResponseTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastResponseTime) && !is_string($lastResponseTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastResponseTime, true), gettype($lastResponseTime)), __LINE__);
        }
        $this->LastResponseTime = $lastResponseTime;
        
        return $this;
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
     * @return \StructType\EwsAttendeeType
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
     * @return \StructType\EwsAttendeeType
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
