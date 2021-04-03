<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupDetailsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupDetailsType extends EwsUnifiedGroupBaseType
{
    /**
     * The UserGroupRelationship
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUserUnifiedGroupRelationshipType
     */
    protected \StructType\EwsUserUnifiedGroupRelationshipType $UserGroupRelationship;
    /**
     * The GroupResources
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupResourcesType|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupResourcesType $GroupResources = null;
    /**
     * The MailboxSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupMailboxSettingsType|null
     */
    protected ?\StructType\EwsUnifiedGroupMailboxSettingsType $MailboxSettings = null;
    /**
     * The OwnerCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OwnerCount = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The ExternalDirectoryObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalDirectoryObjectId = null;
    /**
     * Constructor method for UnifiedGroupDetailsType
     * @uses EwsUnifiedGroupDetailsType::setUserGroupRelationship()
     * @uses EwsUnifiedGroupDetailsType::setGroupResources()
     * @uses EwsUnifiedGroupDetailsType::setMailboxSettings()
     * @uses EwsUnifiedGroupDetailsType::setOwnerCount()
     * @uses EwsUnifiedGroupDetailsType::setDescription()
     * @uses EwsUnifiedGroupDetailsType::setExternalDirectoryObjectId()
     * @param \StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship
     * @param \ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources
     * @param \StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings
     * @param int $ownerCount
     * @param string $description
     * @param string $externalDirectoryObjectId
     */
    public function __construct(\StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship, ?\ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources = null, ?\StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings = null, ?int $ownerCount = null, ?string $description = null, ?string $externalDirectoryObjectId = null)
    {
        $this
            ->setUserGroupRelationship($userGroupRelationship)
            ->setGroupResources($groupResources)
            ->setMailboxSettings($mailboxSettings)
            ->setOwnerCount($ownerCount)
            ->setDescription($description)
            ->setExternalDirectoryObjectId($externalDirectoryObjectId);
    }
    /**
     * Get UserGroupRelationship value
     * @return \StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function getUserGroupRelationship(): \StructType\EwsUserUnifiedGroupRelationshipType
    {
        return $this->UserGroupRelationship;
    }
    /**
     * Set UserGroupRelationship value
     * @param \StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship
     * @return \StructType\EwsUnifiedGroupDetailsType
     */
    public function setUserGroupRelationship(\StructType\EwsUserUnifiedGroupRelationshipType $userGroupRelationship): self
    {
        $this->UserGroupRelationship = $userGroupRelationship;
        
        return $this;
    }
    /**
     * Get GroupResources value
     * @return \ArrayType\EwsArrayOfUnifiedGroupResourcesType|null
     */
    public function getGroupResources(): ?\ArrayType\EwsArrayOfUnifiedGroupResourcesType
    {
        return $this->GroupResources;
    }
    /**
     * Set GroupResources value
     * @param \ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources
     * @return \StructType\EwsUnifiedGroupDetailsType
     */
    public function setGroupResources(?\ArrayType\EwsArrayOfUnifiedGroupResourcesType $groupResources = null): self
    {
        $this->GroupResources = $groupResources;
        
        return $this;
    }
    /**
     * Get MailboxSettings value
     * @return \StructType\EwsUnifiedGroupMailboxSettingsType|null
     */
    public function getMailboxSettings(): ?\StructType\EwsUnifiedGroupMailboxSettingsType
    {
        return $this->MailboxSettings;
    }
    /**
     * Set MailboxSettings value
     * @param \StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings
     * @return \StructType\EwsUnifiedGroupDetailsType
     */
    public function setMailboxSettings(?\StructType\EwsUnifiedGroupMailboxSettingsType $mailboxSettings = null): self
    {
        $this->MailboxSettings = $mailboxSettings;
        
        return $this;
    }
    /**
     * Get OwnerCount value
     * @return int|null
     */
    public function getOwnerCount(): ?int
    {
        return $this->OwnerCount;
    }
    /**
     * Set OwnerCount value
     * @param int $ownerCount
     * @return \StructType\EwsUnifiedGroupDetailsType
     */
    public function setOwnerCount(?int $ownerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($ownerCount) && !(is_int($ownerCount) || ctype_digit($ownerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ownerCount, true), gettype($ownerCount)), __LINE__);
        }
        $this->OwnerCount = $ownerCount;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\EwsUnifiedGroupDetailsType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId(): ?string
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \StructType\EwsUnifiedGroupDetailsType
     */
    public function setExternalDirectoryObjectId(?string $externalDirectoryObjectId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDirectoryObjectId, true), gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        
        return $this;
    }
}
