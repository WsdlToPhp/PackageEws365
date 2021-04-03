<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The ReminderOffset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ReminderOffset = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The IsOrganizerReminder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOrganizerReminder = null;
    /**
     * The OccurrenceChange
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OccurrenceChange = null;
    /**
     * The SendOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SendOption = null;
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
     * @param bool $isOrganizerReminder
     * @param string $occurrenceChange
     * @param string $sendOption
     */
    public function __construct(?string $id = null, ?int $reminderOffset = null, ?string $message = null, ?bool $isOrganizerReminder = null, ?string $occurrenceChange = null, ?string $sendOption = null)
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
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsInboxReminderType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($id) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get ReminderOffset value
     * @return int|null
     */
    public function getReminderOffset(): ?int
    {
        return $this->ReminderOffset;
    }
    /**
     * Set ReminderOffset value
     * @param int $reminderOffset
     * @return \StructType\EwsInboxReminderType
     */
    public function setReminderOffset(?int $reminderOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($reminderOffset) && !(is_int($reminderOffset) || ctype_digit($reminderOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reminderOffset, true), gettype($reminderOffset)), __LINE__);
        }
        $this->ReminderOffset = $reminderOffset;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\EwsInboxReminderType
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get IsOrganizerReminder value
     * @return bool|null
     */
    public function getIsOrganizerReminder(): ?bool
    {
        return $this->IsOrganizerReminder;
    }
    /**
     * Set IsOrganizerReminder value
     * @param bool $isOrganizerReminder
     * @return \StructType\EwsInboxReminderType
     */
    public function setIsOrganizerReminder(?bool $isOrganizerReminder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrganizerReminder) && !is_bool($isOrganizerReminder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrganizerReminder, true), gettype($isOrganizerReminder)), __LINE__);
        }
        $this->IsOrganizerReminder = $isOrganizerReminder;
        
        return $this;
    }
    /**
     * Get OccurrenceChange value
     * @return string|null
     */
    public function getOccurrenceChange(): ?string
    {
        return $this->OccurrenceChange;
    }
    /**
     * Set OccurrenceChange value
     * @uses \EnumType\EwsEmailReminderChangeType::valueIsValid()
     * @uses \EnumType\EwsEmailReminderChangeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $occurrenceChange
     * @return \StructType\EwsInboxReminderType
     */
    public function setOccurrenceChange(?string $occurrenceChange = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsEmailReminderChangeType::valueIsValid($occurrenceChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsEmailReminderChangeType', is_array($occurrenceChange) ? implode(', ', $occurrenceChange) : var_export($occurrenceChange, true), implode(', ', \EnumType\EwsEmailReminderChangeType::getValidValues())), __LINE__);
        }
        $this->OccurrenceChange = $occurrenceChange;
        
        return $this;
    }
    /**
     * Get SendOption value
     * @return string|null
     */
    public function getSendOption(): ?string
    {
        return $this->SendOption;
    }
    /**
     * Set SendOption value
     * @uses \EnumType\EwsEmailReminderSendOption::valueIsValid()
     * @uses \EnumType\EwsEmailReminderSendOption::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sendOption
     * @return \StructType\EwsInboxReminderType
     */
    public function setSendOption(?string $sendOption = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsEmailReminderSendOption::valueIsValid($sendOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsEmailReminderSendOption', is_array($sendOption) ? implode(', ', $sendOption) : var_export($sendOption, true), implode(', ', \EnumType\EwsEmailReminderSendOption::getValidValues())), __LINE__);
        }
        $this->SendOption = $sendOption;
        
        return $this;
    }
}
