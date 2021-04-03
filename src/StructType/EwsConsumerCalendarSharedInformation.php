<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerCalendarSharedInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Shared information about a consumer calendar. This is reserved for a select number of server-2-server calls.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConsumerCalendarSharedInformation extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $FolderId = null;
    /**
     * The PermissionLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PermissionLevel = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for ConsumerCalendarSharedInformation
     * @uses EwsConsumerCalendarSharedInformation::setFolderId()
     * @uses EwsConsumerCalendarSharedInformation::setPermissionLevel()
     * @uses EwsConsumerCalendarSharedInformation::setDescription()
     * @param \StructType\EwsFolderIdType $folderId
     * @param string $permissionLevel
     * @param string $description
     */
    public function __construct(?\StructType\EwsFolderIdType $folderId = null, ?string $permissionLevel = null, ?string $description = null)
    {
        $this
            ->setFolderId($folderId)
            ->setPermissionLevel($permissionLevel)
            ->setDescription($description);
    }
    /**
     * Get FolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \StructType\EwsFolderIdType $folderId
     * @return \StructType\EwsConsumerCalendarSharedInformation
     */
    public function setFolderId(?\StructType\EwsFolderIdType $folderId = null): self
    {
        $this->FolderId = $folderId;
        
        return $this;
    }
    /**
     * Get PermissionLevel value
     * @return string|null
     */
    public function getPermissionLevel(): ?string
    {
        return $this->PermissionLevel;
    }
    /**
     * Set PermissionLevel value
     * @uses \EnumType\EwsSharingInvitationPermissionLevel::valueIsValid()
     * @uses \EnumType\EwsSharingInvitationPermissionLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $permissionLevel
     * @return \StructType\EwsConsumerCalendarSharedInformation
     */
    public function setPermissionLevel(?string $permissionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid($permissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSharingInvitationPermissionLevel', is_array($permissionLevel) ? implode(', ', $permissionLevel) : var_export($permissionLevel, true), implode(', ', \EnumType\EwsSharingInvitationPermissionLevel::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        
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
     * @return \StructType\EwsConsumerCalendarSharedInformation
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
}
