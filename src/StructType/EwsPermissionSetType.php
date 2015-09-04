<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermissionSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The set of permissions on a folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPermissionSetType extends AbstractStructBase
{
    /**
     * The Permissions
     * @var \Ews\ArrayType\EwsArrayOfPermissionsType
     */
    public $Permissions;
    /**
     * The UnknownEntries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
    /**
     * Constructor method for PermissionSetType
     * @uses EwsPermissionSetType::setPermissions()
     * @uses EwsPermissionSetType::setUnknownEntries()
     * @param \Ews\ArrayType\EwsArrayOfPermissionsType $permissions
     * @param \Ews\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfPermissionsType $permissions = null, \Ews\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries = null)
    {
        $this
            ->setPermissions($permissions)
            ->setUnknownEntries($unknownEntries);
    }
    /**
     * Get Permissions value
     * @return \Ews\ArrayType\EwsArrayOfPermissionsType|null
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }
    /**
     * Set Permissions value
     * @param \Ews\ArrayType\EwsArrayOfPermissionsType $permissions
     * @return \Ews\StructType\EwsPermissionSetType
     */
    public function setPermissions(\Ews\ArrayType\EwsArrayOfPermissionsType $permissions = null)
    {
        $this->Permissions = $permissions;
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
     * @return \Ews\StructType\EwsPermissionSetType
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
     * @return \Ews\StructType\EwsPermissionSetType
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
