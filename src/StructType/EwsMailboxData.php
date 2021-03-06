<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsEmailAddress
     */
    public $Email;
    /**
     * The AttendeeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AttendeeType;
    /**
     * The ExcludeConflicts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeConflicts;
    /**
     * Constructor method for MailboxData
     * @uses EwsMailboxData::setEmail()
     * @uses EwsMailboxData::setAttendeeType()
     * @uses EwsMailboxData::setExcludeConflicts()
     * @param \Ews\StructType\EwsEmailAddress $email
     * @param string $attendeeType
     * @param bool $excludeConflicts
     */
    public function __construct(\Ews\StructType\EwsEmailAddress $email = null, $attendeeType = null, $excludeConflicts = null)
    {
        $this
            ->setEmail($email)
            ->setAttendeeType($attendeeType)
            ->setExcludeConflicts($excludeConflicts);
    }
    /**
     * Get Email value
     * @return \Ews\StructType\EwsEmailAddress
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Ews\StructType\EwsEmailAddress $email
     * @return \Ews\StructType\EwsMailboxData
     */
    public function setEmail(\Ews\StructType\EwsEmailAddress $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get AttendeeType value
     * @return string
     */
    public function getAttendeeType()
    {
        return $this->AttendeeType;
    }
    /**
     * Set AttendeeType value
     * @uses \Ews\EnumType\EwsMeetingAttendeeType::valueIsValid()
     * @uses \Ews\EnumType\EwsMeetingAttendeeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attendeeType
     * @return \Ews\StructType\EwsMailboxData
     */
    public function setAttendeeType($attendeeType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMeetingAttendeeType::valueIsValid($attendeeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMeetingAttendeeType', is_array($attendeeType) ? implode(', ', $attendeeType) : var_export($attendeeType, true), implode(', ', \Ews\EnumType\EwsMeetingAttendeeType::getValidValues())), __LINE__);
        }
        $this->AttendeeType = $attendeeType;
        return $this;
    }
    /**
     * Get ExcludeConflicts value
     * @return bool|null
     */
    public function getExcludeConflicts()
    {
        return $this->ExcludeConflicts;
    }
    /**
     * Set ExcludeConflicts value
     * @param bool $excludeConflicts
     * @return \Ews\StructType\EwsMailboxData
     */
    public function setExcludeConflicts($excludeConflicts = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeConflicts) && !is_bool($excludeConflicts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeConflicts, true), gettype($excludeConflicts)), __LINE__);
        }
        $this->ExcludeConflicts = $excludeConflicts;
        return $this;
    }
}
