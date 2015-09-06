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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SharingEffectiveRights;
    /**
     * The PermissionSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The set of permissions on a folder
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
     * @param string $sharingEffectiveRights
     * @return \Ews\StructType\EwsCalendarFolderType
     */
    public function setSharingEffectiveRights($sharingEffectiveRights = null)
    {
        if (!\Ews\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid($sharingEffectiveRights)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sharingEffectiveRights, implode(', ', \Ews\EnumType\EwsCalendarPermissionReadAccessType::getValidValues())), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCalendarFolderType
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
