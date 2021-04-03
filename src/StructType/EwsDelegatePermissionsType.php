<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelegatePermissionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDelegatePermissionsType extends AbstractStructBase
{
    /**
     * The CalendarFolderPermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalendarFolderPermissionLevel = null;
    /**
     * The TasksFolderPermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TasksFolderPermissionLevel = null;
    /**
     * The InboxFolderPermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InboxFolderPermissionLevel = null;
    /**
     * The ContactsFolderPermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactsFolderPermissionLevel = null;
    /**
     * The NotesFolderPermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NotesFolderPermissionLevel = null;
    /**
     * The JournalFolderPermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JournalFolderPermissionLevel = null;
    /**
     * Constructor method for DelegatePermissionsType
     * @uses EwsDelegatePermissionsType::setCalendarFolderPermissionLevel()
     * @uses EwsDelegatePermissionsType::setTasksFolderPermissionLevel()
     * @uses EwsDelegatePermissionsType::setInboxFolderPermissionLevel()
     * @uses EwsDelegatePermissionsType::setContactsFolderPermissionLevel()
     * @uses EwsDelegatePermissionsType::setNotesFolderPermissionLevel()
     * @uses EwsDelegatePermissionsType::setJournalFolderPermissionLevel()
     * @param string $calendarFolderPermissionLevel
     * @param string $tasksFolderPermissionLevel
     * @param string $inboxFolderPermissionLevel
     * @param string $contactsFolderPermissionLevel
     * @param string $notesFolderPermissionLevel
     * @param string $journalFolderPermissionLevel
     */
    public function __construct(?string $calendarFolderPermissionLevel = null, ?string $tasksFolderPermissionLevel = null, ?string $inboxFolderPermissionLevel = null, ?string $contactsFolderPermissionLevel = null, ?string $notesFolderPermissionLevel = null, ?string $journalFolderPermissionLevel = null)
    {
        $this
            ->setCalendarFolderPermissionLevel($calendarFolderPermissionLevel)
            ->setTasksFolderPermissionLevel($tasksFolderPermissionLevel)
            ->setInboxFolderPermissionLevel($inboxFolderPermissionLevel)
            ->setContactsFolderPermissionLevel($contactsFolderPermissionLevel)
            ->setNotesFolderPermissionLevel($notesFolderPermissionLevel)
            ->setJournalFolderPermissionLevel($journalFolderPermissionLevel);
    }
    /**
     * Get CalendarFolderPermissionLevel value
     * @return string|null
     */
    public function getCalendarFolderPermissionLevel(): ?string
    {
        return $this->CalendarFolderPermissionLevel;
    }
    /**
     * Set CalendarFolderPermissionLevel value
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $calendarFolderPermissionLevel
     * @return \StructType\EwsDelegatePermissionsType
     */
    public function setCalendarFolderPermissionLevel(?string $calendarFolderPermissionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($calendarFolderPermissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDelegateFolderPermissionLevelType', is_array($calendarFolderPermissionLevel) ? implode(', ', $calendarFolderPermissionLevel) : var_export($calendarFolderPermissionLevel, true), implode(', ', \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->CalendarFolderPermissionLevel = $calendarFolderPermissionLevel;
        
        return $this;
    }
    /**
     * Get TasksFolderPermissionLevel value
     * @return string|null
     */
    public function getTasksFolderPermissionLevel(): ?string
    {
        return $this->TasksFolderPermissionLevel;
    }
    /**
     * Set TasksFolderPermissionLevel value
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tasksFolderPermissionLevel
     * @return \StructType\EwsDelegatePermissionsType
     */
    public function setTasksFolderPermissionLevel(?string $tasksFolderPermissionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($tasksFolderPermissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDelegateFolderPermissionLevelType', is_array($tasksFolderPermissionLevel) ? implode(', ', $tasksFolderPermissionLevel) : var_export($tasksFolderPermissionLevel, true), implode(', ', \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->TasksFolderPermissionLevel = $tasksFolderPermissionLevel;
        
        return $this;
    }
    /**
     * Get InboxFolderPermissionLevel value
     * @return string|null
     */
    public function getInboxFolderPermissionLevel(): ?string
    {
        return $this->InboxFolderPermissionLevel;
    }
    /**
     * Set InboxFolderPermissionLevel value
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $inboxFolderPermissionLevel
     * @return \StructType\EwsDelegatePermissionsType
     */
    public function setInboxFolderPermissionLevel(?string $inboxFolderPermissionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($inboxFolderPermissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDelegateFolderPermissionLevelType', is_array($inboxFolderPermissionLevel) ? implode(', ', $inboxFolderPermissionLevel) : var_export($inboxFolderPermissionLevel, true), implode(', ', \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->InboxFolderPermissionLevel = $inboxFolderPermissionLevel;
        
        return $this;
    }
    /**
     * Get ContactsFolderPermissionLevel value
     * @return string|null
     */
    public function getContactsFolderPermissionLevel(): ?string
    {
        return $this->ContactsFolderPermissionLevel;
    }
    /**
     * Set ContactsFolderPermissionLevel value
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $contactsFolderPermissionLevel
     * @return \StructType\EwsDelegatePermissionsType
     */
    public function setContactsFolderPermissionLevel(?string $contactsFolderPermissionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($contactsFolderPermissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDelegateFolderPermissionLevelType', is_array($contactsFolderPermissionLevel) ? implode(', ', $contactsFolderPermissionLevel) : var_export($contactsFolderPermissionLevel, true), implode(', ', \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->ContactsFolderPermissionLevel = $contactsFolderPermissionLevel;
        
        return $this;
    }
    /**
     * Get NotesFolderPermissionLevel value
     * @return string|null
     */
    public function getNotesFolderPermissionLevel(): ?string
    {
        return $this->NotesFolderPermissionLevel;
    }
    /**
     * Set NotesFolderPermissionLevel value
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $notesFolderPermissionLevel
     * @return \StructType\EwsDelegatePermissionsType
     */
    public function setNotesFolderPermissionLevel(?string $notesFolderPermissionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($notesFolderPermissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDelegateFolderPermissionLevelType', is_array($notesFolderPermissionLevel) ? implode(', ', $notesFolderPermissionLevel) : var_export($notesFolderPermissionLevel, true), implode(', ', \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->NotesFolderPermissionLevel = $notesFolderPermissionLevel;
        
        return $this;
    }
    /**
     * Get JournalFolderPermissionLevel value
     * @return string|null
     */
    public function getJournalFolderPermissionLevel(): ?string
    {
        return $this->JournalFolderPermissionLevel;
    }
    /**
     * Set JournalFolderPermissionLevel value
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $journalFolderPermissionLevel
     * @return \StructType\EwsDelegatePermissionsType
     */
    public function setJournalFolderPermissionLevel(?string $journalFolderPermissionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($journalFolderPermissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDelegateFolderPermissionLevelType', is_array($journalFolderPermissionLevel) ? implode(', ', $journalFolderPermissionLevel) : var_export($journalFolderPermissionLevel, true), implode(', ', \EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->JournalFolderPermissionLevel = $journalFolderPermissionLevel;
        
        return $this;
    }
}
