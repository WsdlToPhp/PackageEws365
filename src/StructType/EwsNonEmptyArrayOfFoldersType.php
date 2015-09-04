<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfFoldersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfFoldersType extends AbstractStructBase
{
    /**
     * The Folder
     * @var \Ews\StructType\EwsFolderType
     */
    public $Folder;
    /**
     * The CalendarFolder
     * @var \Ews\StructType\EwsCalendarFolderType
     */
    public $CalendarFolder;
    /**
     * The ContactsFolder
     * @var \Ews\StructType\EwsContactsFolderType
     */
    public $ContactsFolder;
    /**
     * The SearchFolder
     * @var \Ews\StructType\EwsSearchFolderType
     */
    public $SearchFolder;
    /**
     * The TasksFolder
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
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \Ews\StructType\EwsFolderType $folder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setFolder(\Ews\StructType\EwsFolderType $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Get CalendarFolder value
     * @return \Ews\StructType\EwsCalendarFolderType|null
     */
    public function getCalendarFolder()
    {
        return $this->CalendarFolder;
    }
    /**
     * Set CalendarFolder value
     * @param \Ews\StructType\EwsCalendarFolderType $calendarFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setCalendarFolder(\Ews\StructType\EwsCalendarFolderType $calendarFolder = null)
    {
        $this->CalendarFolder = $calendarFolder;
        return $this;
    }
    /**
     * Get ContactsFolder value
     * @return \Ews\StructType\EwsContactsFolderType|null
     */
    public function getContactsFolder()
    {
        return $this->ContactsFolder;
    }
    /**
     * Set ContactsFolder value
     * @param \Ews\StructType\EwsContactsFolderType $contactsFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setContactsFolder(\Ews\StructType\EwsContactsFolderType $contactsFolder = null)
    {
        $this->ContactsFolder = $contactsFolder;
        return $this;
    }
    /**
     * Get SearchFolder value
     * @return \Ews\StructType\EwsSearchFolderType|null
     */
    public function getSearchFolder()
    {
        return $this->SearchFolder;
    }
    /**
     * Set SearchFolder value
     * @param \Ews\StructType\EwsSearchFolderType $searchFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setSearchFolder(\Ews\StructType\EwsSearchFolderType $searchFolder = null)
    {
        $this->SearchFolder = $searchFolder;
        return $this;
    }
    /**
     * Get TasksFolder value
     * @return \Ews\StructType\EwsTasksFolderType|null
     */
    public function getTasksFolder()
    {
        return $this->TasksFolder;
    }
    /**
     * Set TasksFolder value
     * @param \Ews\StructType\EwsTasksFolderType $tasksFolder
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
     */
    public function setTasksFolder(\Ews\StructType\EwsTasksFolderType $tasksFolder = null)
    {
        $this->TasksFolder = $tasksFolder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfFoldersType
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
