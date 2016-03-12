<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CalendarFolderPermissionLevel;
    /**
     * The TasksFolderPermissionLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TasksFolderPermissionLevel;
    /**
     * The InboxFolderPermissionLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InboxFolderPermissionLevel;
    /**
     * The ContactsFolderPermissionLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContactsFolderPermissionLevel;
    /**
     * The NotesFolderPermissionLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NotesFolderPermissionLevel;
    /**
     * The JournalFolderPermissionLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $JournalFolderPermissionLevel;
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
    public function __construct($calendarFolderPermissionLevel = null, $tasksFolderPermissionLevel = null, $inboxFolderPermissionLevel = null, $contactsFolderPermissionLevel = null, $notesFolderPermissionLevel = null, $journalFolderPermissionLevel = null)
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
    public function getCalendarFolderPermissionLevel()
    {
        return $this->CalendarFolderPermissionLevel;
    }
    /**
     * Set CalendarFolderPermissionLevel value
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calendarFolderPermissionLevel
     * @return \Ews\StructType\EwsDelegatePermissionsType
     */
    public function setCalendarFolderPermissionLevel($calendarFolderPermissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($calendarFolderPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calendarFolderPermissionLevel, implode(', ', \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->CalendarFolderPermissionLevel = $calendarFolderPermissionLevel;
        return $this;
    }
    /**
     * Get TasksFolderPermissionLevel value
     * @return string|null
     */
    public function getTasksFolderPermissionLevel()
    {
        return $this->TasksFolderPermissionLevel;
    }
    /**
     * Set TasksFolderPermissionLevel value
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tasksFolderPermissionLevel
     * @return \Ews\StructType\EwsDelegatePermissionsType
     */
    public function setTasksFolderPermissionLevel($tasksFolderPermissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($tasksFolderPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tasksFolderPermissionLevel, implode(', ', \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->TasksFolderPermissionLevel = $tasksFolderPermissionLevel;
        return $this;
    }
    /**
     * Get InboxFolderPermissionLevel value
     * @return string|null
     */
    public function getInboxFolderPermissionLevel()
    {
        return $this->InboxFolderPermissionLevel;
    }
    /**
     * Set InboxFolderPermissionLevel value
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inboxFolderPermissionLevel
     * @return \Ews\StructType\EwsDelegatePermissionsType
     */
    public function setInboxFolderPermissionLevel($inboxFolderPermissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($inboxFolderPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inboxFolderPermissionLevel, implode(', ', \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->InboxFolderPermissionLevel = $inboxFolderPermissionLevel;
        return $this;
    }
    /**
     * Get ContactsFolderPermissionLevel value
     * @return string|null
     */
    public function getContactsFolderPermissionLevel()
    {
        return $this->ContactsFolderPermissionLevel;
    }
    /**
     * Set ContactsFolderPermissionLevel value
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $contactsFolderPermissionLevel
     * @return \Ews\StructType\EwsDelegatePermissionsType
     */
    public function setContactsFolderPermissionLevel($contactsFolderPermissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($contactsFolderPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $contactsFolderPermissionLevel, implode(', ', \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->ContactsFolderPermissionLevel = $contactsFolderPermissionLevel;
        return $this;
    }
    /**
     * Get NotesFolderPermissionLevel value
     * @return string|null
     */
    public function getNotesFolderPermissionLevel()
    {
        return $this->NotesFolderPermissionLevel;
    }
    /**
     * Set NotesFolderPermissionLevel value
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notesFolderPermissionLevel
     * @return \Ews\StructType\EwsDelegatePermissionsType
     */
    public function setNotesFolderPermissionLevel($notesFolderPermissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($notesFolderPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notesFolderPermissionLevel, implode(', ', \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->NotesFolderPermissionLevel = $notesFolderPermissionLevel;
        return $this;
    }
    /**
     * Get JournalFolderPermissionLevel value
     * @return string|null
     */
    public function getJournalFolderPermissionLevel()
    {
        return $this->JournalFolderPermissionLevel;
    }
    /**
     * Set JournalFolderPermissionLevel value
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $journalFolderPermissionLevel
     * @return \Ews\StructType\EwsDelegatePermissionsType
     */
    public function setJournalFolderPermissionLevel($journalFolderPermissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDelegateFolderPermissionLevelType::valueIsValid($journalFolderPermissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $journalFolderPermissionLevel, implode(', ', \Ews\EnumType\EwsDelegateFolderPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->JournalFolderPermissionLevel = $journalFolderPermissionLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDelegatePermissionsType
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
