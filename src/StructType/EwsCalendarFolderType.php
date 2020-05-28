<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarFolderType extends EwsBaseFolderType
{
    /**
     * The SharingEffectiveRights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SharingEffectiveRights;
    /**
     * The PermissionSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCalendarPermissionSetType
     */
    public $PermissionSet;
    /**
     * Constructor method for CalendarFolderType
     * @uses EwsCalendarFolderType::setSharingEffectiveRights()
     * @uses EwsCalendarFolderType::setPermissionSet()
     * @param string $sharingEffectiveRights
     * @param \Ews\StructType\EwsCalendarPermissionSetType $permissionSet
     */
    public function __construct($sharingEffectiveRights = null, \Ews\StructType\EwsCalendarPermissionSetType $permissionSet = null)
    {
        $this
            ->setSharingEffectiveRights($sharingEffectiveRights)
            ->setPermissionSet($permissionSet);
    }
    /**
     * Get SharingEffectiveRights value
     * @return string|null
     */
    public function getSharingEffectiveRights()
    {
        return $this->SharingEffectiveRights;
    }
    /**
     * Set SharingEffectiveRights value
     * @uses \Ews\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsCalendarPermissionReadAccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sharingEffectiveRights
     * @return \Ews\StructType\EwsCalendarFolderType
     */
    public function setSharingEffectiveRights($sharingEffectiveRights = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid($sharingEffectiveRights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsCalendarPermissionReadAccessType', is_array($sharingEffectiveRights) ? implode(', ', $sharingEffectiveRights) : var_export($sharingEffectiveRights, true), implode(', ', \Ews\EnumType\EwsCalendarPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->SharingEffectiveRights = $sharingEffectiveRights;
        return $this;
    }
    /**
     * Get PermissionSet value
     * @return \Ews\StructType\EwsCalendarPermissionSetType|null
     */
    public function getPermissionSet()
    {
        return $this->PermissionSet;
    }
    /**
     * Set PermissionSet value
     * @param \Ews\StructType\EwsCalendarPermissionSetType $permissionSet
     * @return \Ews\StructType\EwsCalendarFolderType
     */
    public function setPermissionSet(\Ews\StructType\EwsCalendarPermissionSetType $permissionSet = null)
    {
        $this->PermissionSet = $permissionSet;
        return $this;
    }
}
