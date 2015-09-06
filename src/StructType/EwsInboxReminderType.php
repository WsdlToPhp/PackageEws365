<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InboxReminderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInboxReminderType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $Id;
    /**
     * The ReminderOffset
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ReminderOffset;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The IsOrganizerReminder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsOrganizerReminder;
    /**
     * The OccurrenceChange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OccurrenceChange;
    /**
     * The SendOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SendOption;
    /**
     * Constructor method for InboxReminderType
     * @uses EwsInboxReminderType::setId()
     * @uses EwsInboxReminderType::setReminderOffset()
     * @uses EwsInboxReminderType::setMessage()
     * @uses EwsInboxReminderType::setIsOrganizerReminder()
     * @uses EwsInboxReminderType::setOccurrenceChange()
     * @uses EwsInboxReminderType::setSendOption()
     * @param string $id
     * @param int $reminderOffset
     * @param string $message
     * @param boolean $isOrganizerReminder
     * @param string $occurrenceChange
     * @param string $sendOption
     */
    public function __construct($id = null, $reminderOffset = null, $message = null, $isOrganizerReminder = null, $occurrenceChange = null, $sendOption = null)
    {
        $this
            ->setId($id)
            ->setReminderOffset($reminderOffset)
            ->setMessage($message)
            ->setIsOrganizerReminder($isOrganizerReminder)
            ->setOccurrenceChange($occurrenceChange)
            ->setSendOption($sendOption);
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
     * @return \Ews\StructType\EwsInboxReminderType
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ReminderOffset value
     * @return int|null
     */
    public function getReminderOffset()
    {
        return $this->ReminderOffset;
    }
    /**
     * Set ReminderOffset value
     * @param int $reminderOffset
     * @return \Ews\StructType\EwsInboxReminderType
     */
    public function setReminderOffset($reminderOffset = null)
    {
        $this->ReminderOffset = $reminderOffset;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Ews\StructType\EwsInboxReminderType
     */
    public function setMessage($message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get IsOrganizerReminder value
     * @return boolean|null
     */
    public function getIsOrganizerReminder()
    {
        return $this->IsOrganizerReminder;
    }
    /**
     * Set IsOrganizerReminder value
     * @param boolean $isOrganizerReminder
     * @return \Ews\StructType\EwsInboxReminderType
     */
    public function setIsOrganizerReminder($isOrganizerReminder = null)
    {
        $this->IsOrganizerReminder = $isOrganizerReminder;
        return $this;
    }
    /**
     * Get OccurrenceChange value
     * @return string|null
     */
    public function getOccurrenceChange()
    {
        return $this->OccurrenceChange;
    }
    /**
     * Set OccurrenceChange value
     * @uses \Ews\EnumType\EwsEmailReminderChangeType::valueIsValid()
     * @uses \Ews\EnumType\EwsEmailReminderChangeType::getValidValues()
     * @param string $occurrenceChange
     * @return \Ews\StructType\EwsInboxReminderType
     */
    public function setOccurrenceChange($occurrenceChange = null)
    {
        if (!\Ews\EnumType\EwsEmailReminderChangeType::valueIsValid($occurrenceChange)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $occurrenceChange, implode(', ', \Ews\EnumType\EwsEmailReminderChangeType::getValidValues())), __LINE__);
        }
        $this->OccurrenceChange = $occurrenceChange;
        return $this;
    }
    /**
     * Get SendOption value
     * @return string|null
     */
    public function getSendOption()
    {
        return $this->SendOption;
    }
    /**
     * Set SendOption value
     * @uses \Ews\EnumType\EwsEmailReminderSendOption::valueIsValid()
     * @uses \Ews\EnumType\EwsEmailReminderSendOption::getValidValues()
     * @param string $sendOption
     * @return \Ews\StructType\EwsInboxReminderType
     */
    public function setSendOption($sendOption = null)
    {
        if (!\Ews\EnumType\EwsEmailReminderSendOption::valueIsValid($sendOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sendOption, implode(', ', \Ews\EnumType\EwsEmailReminderSendOption::getValidValues())), __LINE__);
        }
        $this->SendOption = $sendOption;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInboxReminderType
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
