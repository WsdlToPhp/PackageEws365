<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarPermissionSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: The set of permissions on a folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarPermissionSetType extends AbstractStructBase
{
    /**
     * The CalendarPermissions
     * @var \Ews\ArrayType\EwsArrayOfCalendarPermissionsType
     */
    public $CalendarPermissions;
    /**
     * The UnknownEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
    /**
     * Constructor method for CalendarPermissionSetType
     * @uses EwsCalendarPermissionSetType::setCalendarPermissions()
     * @uses EwsCalendarPermissionSetType::setUnknownEntries()
     * @param \Ews\ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions
     * @param \Ews\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions = null, \Ews\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries = null)
    {
        $this
            ->setCalendarPermissions($calendarPermissions)
            ->setUnknownEntries($unknownEntries);
    }
    /**
     * Get CalendarPermissions value
     * @return \Ews\ArrayType\EwsArrayOfCalendarPermissionsType|null
     */
    public function getCalendarPermissions()
    {
        return $this->CalendarPermissions;
    }
    /**
     * Set CalendarPermissions value
     * @param \Ews\ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions
     * @return \Ews\StructType\EwsCalendarPermissionSetType
     */
    public function setCalendarPermissions(\Ews\ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions = null)
    {
        $this->CalendarPermissions = $calendarPermissions;
        return $this;
    }
    /**
     * Get UnknownEntries value
     * @return \Ews\ArrayType\EwsArrayOfUnknownEntriesType|null
     */
    public function getUnknownEntries()
    {
        return $this->UnknownEntries;
    }
    /**
     * Set UnknownEntries value
     * @param \Ews\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries
     * @return \Ews\StructType\EwsCalendarPermissionSetType
     */
    public function setUnknownEntries(\Ews\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries = null)
    {
        $this->UnknownEntries = $unknownEntries;
        return $this;
    }
}
