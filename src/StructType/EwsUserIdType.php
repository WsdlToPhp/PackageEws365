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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SID;
    /**
     * The PrimarySmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrimarySmtpAddress;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The DistinguishedUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DistinguishedUser;
    /**
     * The ExternalUserIdentity
     * Meta informations extracted from the WSDL
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
     * @param string $distinguishedUser
     * @return \Ews\StructType\EwsUserIdType
     */
    public function setDistinguishedUser($distinguishedUser = null)
    {
        if (!\Ews\EnumType\EwsDistinguishedUserType::valueIsValid($distinguishedUser)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $distinguishedUser, implode(', ', \Ews\EnumType\EwsDistinguishedUserType::getValidValues())), __LINE__);
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
        $this->ExternalUserIdentity = $externalUserIdentity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserIdType
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
