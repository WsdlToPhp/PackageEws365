<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfCalendarPermissionsType|null
     */
    protected ?\ArrayType\EwsArrayOfCalendarPermissionsType $CalendarPermissions = null;
    /**
     * The UnknownEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnknownEntriesType|null
     */
    protected ?\ArrayType\EwsArrayOfUnknownEntriesType $UnknownEntries = null;
    /**
     * Constructor method for CalendarPermissionSetType
     * @uses EwsCalendarPermissionSetType::setCalendarPermissions()
     * @uses EwsCalendarPermissionSetType::setUnknownEntries()
     * @param \ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions
     * @param \ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries
     */
    public function __construct(?\ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions = null, ?\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries = null)
    {
        $this
            ->setCalendarPermissions($calendarPermissions)
            ->setUnknownEntries($unknownEntries);
    }
    /**
     * Get CalendarPermissions value
     * @return \ArrayType\EwsArrayOfCalendarPermissionsType|null
     */
    public function getCalendarPermissions(): ?\ArrayType\EwsArrayOfCalendarPermissionsType
    {
        return $this->CalendarPermissions;
    }
    /**
     * Set CalendarPermissions value
     * @param \ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions
     * @return \StructType\EwsCalendarPermissionSetType
     */
    public function setCalendarPermissions(?\ArrayType\EwsArrayOfCalendarPermissionsType $calendarPermissions = null): self
    {
        $this->CalendarPermissions = $calendarPermissions;
        
        return $this;
    }
    /**
     * Get UnknownEntries value
     * @return \ArrayType\EwsArrayOfUnknownEntriesType|null
     */
    public function getUnknownEntries(): ?\ArrayType\EwsArrayOfUnknownEntriesType
    {
        return $this->UnknownEntries;
    }
    /**
     * Set UnknownEntries value
     * @param \ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries
     * @return \StructType\EwsCalendarPermissionSetType
     */
    public function setUnknownEntries(?\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries = null): self
    {
        $this->UnknownEntries = $unknownEntries;
        
        return $this;
    }
}
