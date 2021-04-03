<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SharingInvitation StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSharingInvitation extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Active = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The PermissionLevel
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $PermissionLevel = null;
    /**
     * The ReadOnly
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReadOnly = null;
    /**
     * Constructor method for SharingInvitation
     * @uses EwsSharingInvitation::setId()
     * @uses EwsSharingInvitation::setActive()
     * @uses EwsSharingInvitation::setEmailAddress()
     * @uses EwsSharingInvitation::setDisplayName()
     * @uses EwsSharingInvitation::setPermissionLevel()
     * @uses EwsSharingInvitation::setReadOnly()
     * @param string $id
     * @param bool $active
     * @param string $emailAddress
     * @param string $displayName
     * @param string $permissionLevel
     * @param bool $readOnly
     */
    public function __construct(?string $id = null, ?bool $active = null, ?string $emailAddress = null, ?string $displayName = null, ?string $permissionLevel = null, ?bool $readOnly = null)
    {
        $this
            ->setId($id)
            ->setActive($active)
            ->setEmailAddress($emailAddress)
            ->setDisplayName($displayName)
            ->setPermissionLevel($permissionLevel)
            ->setReadOnly($readOnly);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsSharingInvitation
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($id) && mb_strlen((string) $id) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \StructType\EwsSharingInvitation
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
        
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \StructType\EwsSharingInvitation
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($emailAddress) && mb_strlen((string) $emailAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsSharingInvitation
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($displayName) && mb_strlen((string) $displayName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
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
     * @return \StructType\EwsSharingInvitation
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
     * Get ReadOnly value
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \StructType\EwsSharingInvitation
     */
    public function setReadOnly(?bool $readOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readOnly, true), gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        
        return $this;
    }
}
