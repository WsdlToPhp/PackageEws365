<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfPermissionsType|null
     */
    protected ?\ArrayType\EwsArrayOfPermissionsType $Permissions = null;
    /**
     * The UnknownEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnknownEntriesType|null
     */
    protected ?\ArrayType\EwsArrayOfUnknownEntriesType $UnknownEntries = null;
    /**
     * Constructor method for PermissionSetType
     * @uses EwsPermissionSetType::setPermissions()
     * @uses EwsPermissionSetType::setUnknownEntries()
     * @param \ArrayType\EwsArrayOfPermissionsType $permissions
     * @param \ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries
     */
    public function __construct(?\ArrayType\EwsArrayOfPermissionsType $permissions = null, ?\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries = null)
    {
        $this
            ->setPermissions($permissions)
            ->setUnknownEntries($unknownEntries);
    }
    /**
     * Get Permissions value
     * @return \ArrayType\EwsArrayOfPermissionsType|null
     */
    public function getPermissions(): ?\ArrayType\EwsArrayOfPermissionsType
    {
        return $this->Permissions;
    }
    /**
     * Set Permissions value
     * @param \ArrayType\EwsArrayOfPermissionsType $permissions
     * @return \StructType\EwsPermissionSetType
     */
    public function setPermissions(?\ArrayType\EwsArrayOfPermissionsType $permissions = null): self
    {
        $this->Permissions = $permissions;
        
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
     * @return \StructType\EwsPermissionSetType
     */
    public function setUnknownEntries(?\ArrayType\EwsArrayOfUnknownEntriesType $unknownEntries = null): self
    {
        $this->UnknownEntries = $unknownEntries;
        
        return $this;
    }
}
