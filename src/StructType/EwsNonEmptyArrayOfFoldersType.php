<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfFoldersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfFoldersType extends AbstractStructBase
{
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - choice: Folder | CalendarFolder | ContactsFolder | SearchFolder | TasksFolder
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderType
     */
    public $Folder;
    /**
     * The CalendarFolder
     * Meta information extracted from the WSDL
     * - choice: Folder | CalendarFolder | ContactsFolder | SearchFolder | TasksFolder
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsCalendarFolderType
     */
    public $CalendarFolder;
    /**
     * The ContactsFolder
     * Meta information extracted from the WSDL
     * - choice: Folder | CalendarFolder | ContactsFolder | SearchFolder | TasksFolder
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsContactsFolderType
     */
    public $ContactsFolder;
    /**
     * The SearchFolder
     * Meta information extracted from the WSDL
     * - choice: Folder | CalendarFolder | ContactsFolder | SearchFolder | TasksFolder
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSearchFolderType
     */
    public $SearchFolder;
    /**
     * The TasksFolder
     * Meta information extracted from the WSDL
     * - choice: Folder | CalendarFolder | ContactsFolder | SearchFolder | TasksFolder
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsTasksFolderType
     */
    public $TasksFolder;
    /**
     * Constructor method for NonEmptyArrayOfFoldersType
     * @uses EwsNonEmptyArrayOfFoldersType::setFolder()
     * @uses EwsNonEmptyArrayOfFoldersType::setCalendarFolder()
     * @uses EwsNonEmptyArrayOfFoldersType::setContactsFolder()
     * @uses EwsNonEmptyArrayOfFoldersType::setSearchFolder()
     * @uses EwsNonEmptyArrayOfFoldersType::setTasksFolder()
     * @param \Ews\StructType\EwsFolderType $folder
     * @param \Ews\StructType\EwsCalendarFolderType $calendarFolder
     * @param \Ews\StructType\EwsContactsFolderType $contactsFolder
     * @param \Ews\StructType\EwsSearchFolderType $searchFolder
     * @param \Ews\StructType\EwsTasksFolderType $tasksFolder
     */
    public function __construct(\Ews\StructType\EwsFolderType $folder = null, \Ews\StructType\EwsCalendarFolderType $calendarFolder = null, \Ews\StructType\EwsContactsFolderType $contactsFolder = null, \Ews\StructType\EwsSearchFolderType $searchFolder = null, \Ews\StructType\EwsTasksFolderType $tasksFolder = null)
    {
        $this
            ->setFolder($folder)
            ->setCalendarFolder($calendarFolder)
            ->setContactsFolder($contactsFolder)
            ->setSearchFolder($searchFolder)
            ->setTasksFolder($tasksFolder);
    }
    /**
     * Get Folder value
     * @return \Ews\StructType\EwsFolderType|null
     */
    public function getFolder()
    {
        return isset($this->Folder) ? $this->Folder : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolder method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFolderForChoiceConstraintsFromSetFolder($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CalendarFolder',
            'ContactsFolder',
            'SearchFolder',
            'TasksFolder',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Folder can\'t be set as the property %s is already set. Only one property must be set among these properties: Folder, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Folder value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderType $folder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setFolder(\Ews\StructType\EwsFolderType $folder = null)
    {
        // validation for constraint: choice(Folder, CalendarFolder, ContactsFolder, SearchFolder, TasksFolder)
        if ('' !== ($folderChoiceErrorMessage = self::validateFolderForChoiceConstraintsFromSetFolder($folder))) {
            throw new \InvalidArgumentException($folderChoiceErrorMessage, __LINE__);
        }
        if (is_null($folder) || (is_array($folder) && empty($folder))) {
            unset($this->Folder);
        } else {
            $this->Folder = $folder;
        }
        return $this;
    }
    /**
     * Get CalendarFolder value
     * @return \Ews\StructType\EwsCalendarFolderType|null
     */
    public function getCalendarFolder()
    {
        return isset($this->CalendarFolder) ? $this->CalendarFolder : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCalendarFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalendarFolder method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCalendarFolderForChoiceConstraintsFromSetCalendarFolder($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Folder',
            'ContactsFolder',
            'SearchFolder',
            'TasksFolder',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CalendarFolder can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarFolder, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CalendarFolder value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarFolderType $calendarFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setCalendarFolder(\Ews\StructType\EwsCalendarFolderType $calendarFolder = null)
    {
        // validation for constraint: choice(Folder, CalendarFolder, ContactsFolder, SearchFolder, TasksFolder)
        if ('' !== ($calendarFolderChoiceErrorMessage = self::validateCalendarFolderForChoiceConstraintsFromSetCalendarFolder($calendarFolder))) {
            throw new \InvalidArgumentException($calendarFolderChoiceErrorMessage, __LINE__);
        }
        if (is_null($calendarFolder) || (is_array($calendarFolder) && empty($calendarFolder))) {
            unset($this->CalendarFolder);
        } else {
            $this->CalendarFolder = $calendarFolder;
        }
        return $this;
    }
    /**
     * Get ContactsFolder value
     * @return \Ews\StructType\EwsContactsFolderType|null
     */
    public function getContactsFolder()
    {
        return isset($this->ContactsFolder) ? $this->ContactsFolder : null;
    }
    /**
     * This method is responsible for validating the value passed to the setContactsFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContactsFolder method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateContactsFolderForChoiceConstraintsFromSetContactsFolder($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Folder',
            'CalendarFolder',
            'SearchFolder',
            'TasksFolder',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ContactsFolder can\'t be set as the property %s is already set. Only one property must be set among these properties: ContactsFolder, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ContactsFolder value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactsFolderType $contactsFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setContactsFolder(\Ews\StructType\EwsContactsFolderType $contactsFolder = null)
    {
        // validation for constraint: choice(Folder, CalendarFolder, ContactsFolder, SearchFolder, TasksFolder)
        if ('' !== ($contactsFolderChoiceErrorMessage = self::validateContactsFolderForChoiceConstraintsFromSetContactsFolder($contactsFolder))) {
            throw new \InvalidArgumentException($contactsFolderChoiceErrorMessage, __LINE__);
        }
        if (is_null($contactsFolder) || (is_array($contactsFolder) && empty($contactsFolder))) {
            unset($this->ContactsFolder);
        } else {
            $this->ContactsFolder = $contactsFolder;
        }
        return $this;
    }
    /**
     * Get SearchFolder value
     * @return \Ews\StructType\EwsSearchFolderType|null
     */
    public function getSearchFolder()
    {
        return isset($this->SearchFolder) ? $this->SearchFolder : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSearchFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchFolder method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSearchFolderForChoiceConstraintsFromSetSearchFolder($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Folder',
            'CalendarFolder',
            'ContactsFolder',
            'TasksFolder',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SearchFolder can\'t be set as the property %s is already set. Only one property must be set among these properties: SearchFolder, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SearchFolder value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchFolderType $searchFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setSearchFolder(\Ews\StructType\EwsSearchFolderType $searchFolder = null)
    {
        // validation for constraint: choice(Folder, CalendarFolder, ContactsFolder, SearchFolder, TasksFolder)
        if ('' !== ($searchFolderChoiceErrorMessage = self::validateSearchFolderForChoiceConstraintsFromSetSearchFolder($searchFolder))) {
            throw new \InvalidArgumentException($searchFolderChoiceErrorMessage, __LINE__);
        }
        if (is_null($searchFolder) || (is_array($searchFolder) && empty($searchFolder))) {
            unset($this->SearchFolder);
        } else {
            $this->SearchFolder = $searchFolder;
        }
        return $this;
    }
    /**
     * Get TasksFolder value
     * @return \Ews\StructType\EwsTasksFolderType|null
     */
    public function getTasksFolder()
    {
        return isset($this->TasksFolder) ? $this->TasksFolder : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTasksFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTasksFolder method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTasksFolderForChoiceConstraintsFromSetTasksFolder($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Folder',
            'CalendarFolder',
            'ContactsFolder',
            'SearchFolder',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property TasksFolder can\'t be set as the property %s is already set. Only one property must be set among these properties: TasksFolder, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set TasksFolder value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTasksFolderType $tasksFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setTasksFolder(\Ews\StructType\EwsTasksFolderType $tasksFolder = null)
    {
        // validation for constraint: choice(Folder, CalendarFolder, ContactsFolder, SearchFolder, TasksFolder)
        if ('' !== ($tasksFolderChoiceErrorMessage = self::validateTasksFolderForChoiceConstraintsFromSetTasksFolder($tasksFolder))) {
            throw new \InvalidArgumentException($tasksFolderChoiceErrorMessage, __LINE__);
        }
        if (is_null($tasksFolder) || (is_array($tasksFolder) && empty($tasksFolder))) {
            unset($this->TasksFolder);
        } else {
            $this->TasksFolder = $tasksFolder;
        }
        return $this;
    }
}
