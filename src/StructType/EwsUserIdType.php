<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserIdType extends AbstractStructBase
{
    /**
     * The SID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SID;
    /**
     * The PrimarySmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrimarySmtpAddress;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The DistinguishedUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DistinguishedUser;
    /**
     * The ExternalUserIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalUserIdentity;
    /**
     * Constructor method for UserIdType
     * @uses EwsUserIdType::setSID()
     * @uses EwsUserIdType::setPrimarySmtpAddress()
     * @uses EwsUserIdType::setDisplayName()
     * @uses EwsUserIdType::setDistinguishedUser()
     * @uses EwsUserIdType::setExternalUserIdentity()
     * @param string $sID
     * @param string $primarySmtpAddress
     * @param string $displayName
     * @param string $distinguishedUser
     * @param string $externalUserIdentity
     */
    public function __construct($sID = null, $primarySmtpAddress = null, $displayName = null, $distinguishedUser = null, $externalUserIdentity = null)
    {
        $this
            ->setSID($sID)
            ->setPrimarySmtpAddress($primarySmtpAddress)
            ->setDisplayName($displayName)
            ->setDistinguishedUser($distinguishedUser)
            ->setExternalUserIdentity($externalUserIdentity);
    }
    /**
     * Get SID value
     * @return string|null
     */
    public function getSID()
    {
        return $this->SID;
    }
    /**
     * Set SID value
     * @param string $sID
     * @return \Ews\StructType\EwsUserIdType
     */
    public function setSID($sID = null)
    {
        // validation for constraint: string
        if (!is_null($sID) && !is_string($sID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sID, true), gettype($sID)), __LINE__);
        }
        $this->SID = $sID;
        return $this;
    }
    /**
     * Get PrimarySmtpAddress value
     * @return string|null
     */
    public function getPrimarySmtpAddress()
    {
        return $this->PrimarySmtpAddress;
    }
    /**
     * Set PrimarySmtpAddress value
     * @param string $primarySmtpAddress
     * @return \Ews\StructType\EwsUserIdType
     */
    public function setPrimarySmtpAddress($primarySmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($primarySmtpAddress) && !is_string($primarySmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primarySmtpAddress, true), gettype($primarySmtpAddress)), __LINE__);
        }
        $this->PrimarySmtpAddress = $primarySmtpAddress;
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
     * @return \Ews\StructType\EwsUserIdType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get DistinguishedUser value
     * @return string|null
     */
    public function getDistinguishedUser()
    {
        return $this->DistinguishedUser;
    }
    /**
     * Set DistinguishedUser value
     * @uses \Ews\EnumType\EwsDistinguishedUserType::valueIsValid()
     * @uses \Ews\EnumType\EwsDistinguishedUserType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $distinguishedUser
     * @return \Ews\StructType\EwsUserIdType
     */
    public function setDistinguishedUser($distinguishedUser = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDistinguishedUserType::valueIsValid($distinguishedUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDistinguishedUserType', is_array($distinguishedUser) ? implode(', ', $distinguishedUser) : var_export($distinguishedUser, true), implode(', ', \Ews\EnumType\EwsDistinguishedUserType::getValidValues())), __LINE__);
        }
        $this->DistinguishedUser = $distinguishedUser;
        return $this;
    }
    /**
     * Get ExternalUserIdentity value
     * @return string|null
     */
    public function getExternalUserIdentity()
    {
        return $this->ExternalUserIdentity;
    }
    /**
     * Set ExternalUserIdentity value
     * @param string $externalUserIdentity
     * @return \Ews\StructType\EwsUserIdType
     */
    public function setExternalUserIdentity($externalUserIdentity = null)
    {
        // validation for constraint: string
        if (!is_null($externalUserIdentity) && !is_string($externalUserIdentity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalUserIdentity, true), gettype($externalUserIdentity)), __LINE__);
        }
        $this->ExternalUserIdentity = $externalUserIdentity;
        return $this;
    }
}
