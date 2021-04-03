<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxData StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxData extends AbstractStructBase
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsEmailAddress
     */
    protected \StructType\EwsEmailAddress $Email;
    /**
     * The AttendeeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $AttendeeType;
    /**
     * The ExcludeConflicts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExcludeConflicts = null;
    /**
     * Constructor method for MailboxData
     * @uses EwsMailboxData::setEmail()
     * @uses EwsMailboxData::setAttendeeType()
     * @uses EwsMailboxData::setExcludeConflicts()
     * @param \StructType\EwsEmailAddress $email
     * @param string $attendeeType
     * @param bool $excludeConflicts
     */
    public function __construct(\StructType\EwsEmailAddress $email, string $attendeeType, ?bool $excludeConflicts = null)
    {
        $this
            ->setEmail($email)
            ->setAttendeeType($attendeeType)
            ->setExcludeConflicts($excludeConflicts);
    }
    /**
     * Get Email value
     * @return \StructType\EwsEmailAddress
     */
    public function getEmail(): \StructType\EwsEmailAddress
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \StructType\EwsEmailAddress $email
     * @return \StructType\EwsMailboxData
     */
    public function setEmail(\StructType\EwsEmailAddress $email): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get AttendeeType value
     * @return string
     */
    public function getAttendeeType(): string
    {
        return $this->AttendeeType;
    }
    /**
     * Set AttendeeType value
     * @uses \EnumType\EwsMeetingAttendeeType::valueIsValid()
     * @uses \EnumType\EwsMeetingAttendeeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $attendeeType
     * @return \StructType\EwsMailboxData
     */
    public function setAttendeeType(string $attendeeType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMeetingAttendeeType::valueIsValid($attendeeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMeetingAttendeeType', is_array($attendeeType) ? implode(', ', $attendeeType) : var_export($attendeeType, true), implode(', ', \EnumType\EwsMeetingAttendeeType::getValidValues())), __LINE__);
        }
        $this->AttendeeType = $attendeeType;
        
        return $this;
    }
    /**
     * Get ExcludeConflicts value
     * @return bool|null
     */
    public function getExcludeConflicts(): ?bool
    {
        return $this->ExcludeConflicts;
    }
    /**
     * Set ExcludeConflicts value
     * @param bool $excludeConflicts
     * @return \StructType\EwsMailboxData
     */
    public function setExcludeConflicts(?bool $excludeConflicts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($excludeConflicts) && !is_bool($excludeConflicts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeConflicts, true), gettype($excludeConflicts)), __LINE__);
        }
        $this->ExcludeConflicts = $excludeConflicts;
        
        return $this;
    }
}
