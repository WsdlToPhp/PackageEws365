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
     * @var boolean
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
     * @var boolean
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
     * @param boolean $active
     * @param string $emailAddress
     * @param string $displayName
     * @param string $permissionLevel
     * @param boolean $readOnly
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
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Active value
     * @return boolean|null
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param boolean $active
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
     * @param string $permissionLevel
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function setPermissionLevel($permissionLevel = null)
    {
        if (!\Ews\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid($permissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $permissionLevel, implode(', ', \Ews\EnumType\EwsSharingInvitationPermissionLevel::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return boolean|null
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param boolean $readOnly
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
