<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermissionSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: The set of permissions on a folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
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
     * Meta information extracted from the WSDL
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
}
