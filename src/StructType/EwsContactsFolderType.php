<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactsFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactsFolderType extends EwsBaseFolderType
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
     * @var \StructType\EwsPermissionSetType|null
     */
    protected ?\StructType\EwsPermissionSetType $PermissionSet = null;
    /**
     * The SourceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SourceId = null;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * Constructor method for ContactsFolderType
     * @uses EwsContactsFolderType::setSharingEffectiveRights()
     * @uses EwsContactsFolderType::setPermissionSet()
     * @uses EwsContactsFolderType::setSourceId()
     * @uses EwsContactsFolderType::setAccountName()
     * @param string $sharingEffectiveRights
     * @param \StructType\EwsPermissionSetType $permissionSet
     * @param string $sourceId
     * @param string $accountName
     */
    public function __construct(?string $sharingEffectiveRights = null, ?\StructType\EwsPermissionSetType $permissionSet = null, ?string $sourceId = null, ?string $accountName = null)
    {
        $this
            ->setSharingEffectiveRights($sharingEffectiveRights)
            ->setPermissionSet($permissionSet)
            ->setSourceId($sourceId)
            ->setAccountName($accountName);
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
     * @uses \EnumType\EwsPermissionReadAccessType::valueIsValid()
     * @uses \EnumType\EwsPermissionReadAccessType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sharingEffectiveRights
     * @return \StructType\EwsContactsFolderType
     */
    public function setSharingEffectiveRights(?string $sharingEffectiveRights = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPermissionReadAccessType::valueIsValid($sharingEffectiveRights)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPermissionReadAccessType', is_array($sharingEffectiveRights) ? implode(', ', $sharingEffectiveRights) : var_export($sharingEffectiveRights, true), implode(', ', \EnumType\EwsPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->SharingEffectiveRights = $sharingEffectiveRights;
        
        return $this;
    }
    /**
     * Get PermissionSet value
     * @return \StructType\EwsPermissionSetType|null
     */
    public function getPermissionSet(): ?\StructType\EwsPermissionSetType
    {
        return $this->PermissionSet;
    }
    /**
     * Set PermissionSet value
     * @param \StructType\EwsPermissionSetType $permissionSet
     * @return \StructType\EwsContactsFolderType
     */
    public function setPermissionSet(?\StructType\EwsPermissionSetType $permissionSet = null): self
    {
        $this->PermissionSet = $permissionSet;
        
        return $this;
    }
    /**
     * Get SourceId value
     * @return string|null
     */
    public function getSourceId(): ?string
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param string $sourceId
     * @return \StructType\EwsContactsFolderType
     */
    public function setSourceId(?string $sourceId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceId, true), gettype($sourceId)), __LINE__);
        }
        $this->SourceId = $sourceId;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \StructType\EwsContactsFolderType
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        
        return $this;
    }
}
