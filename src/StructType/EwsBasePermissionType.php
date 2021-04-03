<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePermissionType StructType
 * Meta information extracted from the WSDL
 * - documentation: A permission on a folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBasePermissionType extends AbstractStructBase
{
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUserIdType
     */
    protected \StructType\EwsUserIdType $UserId;
    /**
     * The CanCreateItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CanCreateItems = null;
    /**
     * The CanCreateSubFolders
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CanCreateSubFolders = null;
    /**
     * The IsFolderOwner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFolderOwner = null;
    /**
     * The IsFolderVisible
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFolderVisible = null;
    /**
     * The IsFolderContact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFolderContact = null;
    /**
     * The EditItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EditItems = null;
    /**
     * The DeleteItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeleteItems = null;
    /**
     * Constructor method for BasePermissionType
     * @uses EwsBasePermissionType::setUserId()
     * @uses EwsBasePermissionType::setCanCreateItems()
     * @uses EwsBasePermissionType::setCanCreateSubFolders()
     * @uses EwsBasePermissionType::setIsFolderOwner()
     * @uses EwsBasePermissionType::setIsFolderVisible()
     * @uses EwsBasePermissionType::setIsFolderContact()
     * @uses EwsBasePermissionType::setEditItems()
     * @uses EwsBasePermissionType::setDeleteItems()
     * @param \StructType\EwsUserIdType $userId
     * @param bool $canCreateItems
     * @param bool $canCreateSubFolders
     * @param bool $isFolderOwner
     * @param bool $isFolderVisible
     * @param bool $isFolderContact
     * @param string $editItems
     * @param string $deleteItems
     */
    public function __construct(\StructType\EwsUserIdType $userId, ?bool $canCreateItems = null, ?bool $canCreateSubFolders = null, ?bool $isFolderOwner = null, ?bool $isFolderVisible = null, ?bool $isFolderContact = null, ?string $editItems = null, ?string $deleteItems = null)
    {
        $this
            ->setUserId($userId)
            ->setCanCreateItems($canCreateItems)
            ->setCanCreateSubFolders($canCreateSubFolders)
            ->setIsFolderOwner($isFolderOwner)
            ->setIsFolderVisible($isFolderVisible)
            ->setIsFolderContact($isFolderContact)
            ->setEditItems($editItems)
            ->setDeleteItems($deleteItems);
    }
    /**
     * Get UserId value
     * @return \StructType\EwsUserIdType
     */
    public function getUserId(): \StructType\EwsUserIdType
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param \StructType\EwsUserIdType $userId
     * @return \StructType\EwsBasePermissionType
     */
    public function setUserId(\StructType\EwsUserIdType $userId): self
    {
        $this->UserId = $userId;
        
        return $this;
    }
    /**
     * Get CanCreateItems value
     * @return bool|null
     */
    public function getCanCreateItems(): ?bool
    {
        return $this->CanCreateItems;
    }
    /**
     * Set CanCreateItems value
     * @param bool $canCreateItems
     * @return \StructType\EwsBasePermissionType
     */
    public function setCanCreateItems(?bool $canCreateItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canCreateItems) && !is_bool($canCreateItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canCreateItems, true), gettype($canCreateItems)), __LINE__);
        }
        $this->CanCreateItems = $canCreateItems;
        
        return $this;
    }
    /**
     * Get CanCreateSubFolders value
     * @return bool|null
     */
    public function getCanCreateSubFolders(): ?bool
    {
        return $this->CanCreateSubFolders;
    }
    /**
     * Set CanCreateSubFolders value
     * @param bool $canCreateSubFolders
     * @return \StructType\EwsBasePermissionType
     */
    public function setCanCreateSubFolders(?bool $canCreateSubFolders = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canCreateSubFolders) && !is_bool($canCreateSubFolders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canCreateSubFolders, true), gettype($canCreateSubFolders)), __LINE__);
        }
        $this->CanCreateSubFolders = $canCreateSubFolders;
        
        return $this;
    }
    /**
     * Get IsFolderOwner value
     * @return bool|null
     */
    public function getIsFolderOwner(): ?bool
    {
        return $this->IsFolderOwner;
    }
    /**
     * Set IsFolderOwner value
     * @param bool $isFolderOwner
     * @return \StructType\EwsBasePermissionType
     */
    public function setIsFolderOwner(?bool $isFolderOwner = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFolderOwner) && !is_bool($isFolderOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFolderOwner, true), gettype($isFolderOwner)), __LINE__);
        }
        $this->IsFolderOwner = $isFolderOwner;
        
        return $this;
    }
    /**
     * Get IsFolderVisible value
     * @return bool|null
     */
    public function getIsFolderVisible(): ?bool
    {
        return $this->IsFolderVisible;
    }
    /**
     * Set IsFolderVisible value
     * @param bool $isFolderVisible
     * @return \StructType\EwsBasePermissionType
     */
    public function setIsFolderVisible(?bool $isFolderVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFolderVisible) && !is_bool($isFolderVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFolderVisible, true), gettype($isFolderVisible)), __LINE__);
        }
        $this->IsFolderVisible = $isFolderVisible;
        
        return $this;
    }
    /**
     * Get IsFolderContact value
     * @return bool|null
     */
    public function getIsFolderContact(): ?bool
    {
        return $this->IsFolderContact;
    }
    /**
     * Set IsFolderContact value
     * @param bool $isFolderContact
     * @return \StructType\EwsBasePermissionType
     */
    public function setIsFolderContact(?bool $isFolderContact = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFolderContact) && !is_bool($isFolderContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFolderContact, true), gettype($isFolderContact)), __LINE__);
        }
        $this->IsFolderContact = $isFolderContact;
        
        return $this;
    }
    /**
     * Get EditItems value
     * @return string|null
     */
    public function getEditItems(): ?string
    {
        return $this->EditItems;
    }
    /**
     * Set EditItems value
     * @uses \EnumType\EwsPermissionActionType::valueIsValid()
     * @uses \EnumType\EwsPermissionActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $editItems
     * @return \StructType\EwsBasePermissionType
     */
    public function setEditItems(?string $editItems = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPermissionActionType::valueIsValid($editItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPermissionActionType', is_array($editItems) ? implode(', ', $editItems) : var_export($editItems, true), implode(', ', \EnumType\EwsPermissionActionType::getValidValues())), __LINE__);
        }
        $this->EditItems = $editItems;
        
        return $this;
    }
    /**
     * Get DeleteItems value
     * @return string|null
     */
    public function getDeleteItems(): ?string
    {
        return $this->DeleteItems;
    }
    /**
     * Set DeleteItems value
     * @uses \EnumType\EwsPermissionActionType::valueIsValid()
     * @uses \EnumType\EwsPermissionActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deleteItems
     * @return \StructType\EwsBasePermissionType
     */
    public function setDeleteItems(?string $deleteItems = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPermissionActionType::valueIsValid($deleteItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPermissionActionType', is_array($deleteItems) ? implode(', ', $deleteItems) : var_export($deleteItems, true), implode(', ', \EnumType\EwsPermissionActionType::getValidValues())), __LINE__);
        }
        $this->DeleteItems = $deleteItems;
        
        return $this;
    }
}
