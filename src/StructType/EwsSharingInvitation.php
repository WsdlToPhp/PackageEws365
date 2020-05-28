<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Id;
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Active;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * @var string
     */
    public $EmailAddress;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: optional
     * @var string
     */
    public $DisplayName;
    /**
     * The PermissionLevel
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PermissionLevel;
    /**
     * The ReadOnly
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $ReadOnly;
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
    public function __construct($id = null, $active = null, $emailAddress = null, $displayName = null, $permissionLevel = null, $readOnly = null)
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
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($id) && mb_strlen($id) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($emailAddress) && mb_strlen($emailAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($displayName) && mb_strlen($displayName) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get PermissionLevel value
     * @return string|null
     */
    public function getPermissionLevel()
    {
        return $this->PermissionLevel;
    }
    /**
     * Set PermissionLevel value
     * @uses \Ews\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid()
     * @uses \Ews\EnumType\EwsSharingInvitationPermissionLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $permissionLevel
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function setPermissionLevel($permissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid($permissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSharingInvitationPermissionLevel', is_array($permissionLevel) ? implode(', ', $permissionLevel) : var_export($permissionLevel, true), implode(', ', \Ews\EnumType\EwsSharingInvitationPermissionLevel::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return bool|null
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readOnly, true), gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
}
