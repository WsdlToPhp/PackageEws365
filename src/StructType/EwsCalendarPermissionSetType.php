<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarPermissionSetType StructType
 * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCalendarPermissionSetType
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
