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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsEmailAddress
     */
    public $Email;
    /**
     * The AttendeeType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AttendeeType;
    /**
     * The ExcludeConflicts
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attendeeType, implode(', ', \Ews\EnumType\EwsMeetingAttendeeType::getValidValues())), __LINE__);
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
        $this->ExcludeConflicts = $excludeConflicts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxData
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
