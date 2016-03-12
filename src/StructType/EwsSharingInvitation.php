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
     * Meta informations extracted from the WSDL
     * - use: optional
     * - minLength: 1
     * @var string
     */
    public $Id;
    /**
     * The Active
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Active;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - use: optional
     * - minLength: 1
     * @var string
     */
    public $EmailAddress;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - use: optional
     * - minLength: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The PermissionLevel
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PermissionLevel;
    /**
     * The ReadOnly
     * Meta informations extracted from the WSDL
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
        // validation for constraint: minLength
        if ((is_scalar(id) && strlen(id) < 1) || (is_array(id) && count(id) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
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
        // validation for constraint: minLength
        if ((is_scalar(emailAddress) && strlen(emailAddress) < 1) || (is_array(emailAddress) && count(emailAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
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
        // validation for constraint: minLength
        if ((is_scalar(displayName) && strlen(displayName) < 1) || (is_array(displayName) && count(displayName) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $permissionLevel, implode(', ', \Ews\EnumType\EwsSharingInvitationPermissionLevel::getValidValues())), __LINE__);
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
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSharingInvitation
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
