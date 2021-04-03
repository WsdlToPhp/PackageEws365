<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $SharingEffectiveRights = null;
    /**
     * The PermissionSet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsCalendarPermissionSetType|null
     */
    protected ?\StructType\EwsCalendarPermissionSetType $PermissionSet = null;
    /**
     * Constructor method for CalendarFolderType
     * @uses EwsCalendarFolderType::setSharingEffectiveRights()
     * @uses EwsCalendarFolderType::setPermissionSet()
     * @param string $sharingEffectiveRights
     * @param \StructType\EwsCalendarPermissionSetType $permissionSet
     */
    public function __construct(?string $sharingEffectiveRights = null, ?\StructType\EwsCalendarPermissionSetType $permissionSet = null)
    {
        $this
            ->setSharingEffectiveRights($sharingEffectiveRights)
            ->setPermissionSet($permissionSet);
    }
    /**
     * Get SharingEffectiveRights value
     * @return string|null
     */
    public function getSharingEffectiveRights(): ?string
    {
        return $this->SharingEffectiveRights;
    }
    /**
     * Set SharingEffectiveRights value
     * @uses \EnumType\EwsCalendarPermissionReadAccessType::valueIsValid()
     * @uses \EnumType\EwsCalendarPermissionReadAccessType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sharingEffectiveRights
     * @return \StructType\EwsCalendarFolderType
     */
    public function setSharingEffectiveRights(?string $sharingEffectiveRights = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCalendarPermissionReadAccessType::valueIsValid($sharingEffectiveRights)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCalendarPermissionReadAccessType', is_array($sharingEffectiveRights) ? implode(', ', $sharingEffectiveRights) : var_export($sharingEffectiveRights, true), implode(', ', \EnumType\EwsCalendarPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->SharingEffectiveRights = $sharingEffectiveRights;
        
        return $this;
    }
    /**
     * Get PermissionSet value
     * @return \StructType\EwsCalendarPermissionSetType|null
     */
    public function getPermissionSet(): ?\StructType\EwsCalendarPermissionSetType
    {
        return $this->PermissionSet;
    }
    /**
     * Set PermissionSet value
     * @param \StructType\EwsCalendarPermissionSetType $permissionSet
     * @return \StructType\EwsCalendarFolderType
     */
    public function setPermissionSet(?\StructType\EwsCalendarPermissionSetType $permissionSet = null): self
    {
        $this->PermissionSet = $permissionSet;
        
        return $this;
    }
}
