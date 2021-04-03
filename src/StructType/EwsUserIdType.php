<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $SID = null;
    /**
     * The PrimarySmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrimarySmtpAddress = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The DistinguishedUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DistinguishedUser = null;
    /**
     * The ExternalUserIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalUserIdentity = null;
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
    public function __construct(?string $sID = null, ?string $primarySmtpAddress = null, ?string $displayName = null, ?string $distinguishedUser = null, ?string $externalUserIdentity = null)
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
    public function getSID(): ?string
    {
        return $this->SID;
    }
    /**
     * Set SID value
     * @param string $sID
     * @return \StructType\EwsUserIdType
     */
    public function setSID(?string $sID = null): self
    {
        // validation for constraint: string
        if (!is_null($sID) && !is_string($sID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sID, true), gettype($sID)), __LINE__);
        }
        $this->SID = $sID;
        
        return $this;
    }
    /**
     * Get PrimarySmtpAddress value
     * @return string|null
     */
    public function getPrimarySmtpAddress(): ?string
    {
        return $this->PrimarySmtpAddress;
    }
    /**
     * Set PrimarySmtpAddress value
     * @param string $primarySmtpAddress
     * @return \StructType\EwsUserIdType
     */
    public function setPrimarySmtpAddress(?string $primarySmtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($primarySmtpAddress) && !is_string($primarySmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primarySmtpAddress, true), gettype($primarySmtpAddress)), __LINE__);
        }
        $this->PrimarySmtpAddress = $primarySmtpAddress;
        
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
     * @return \StructType\EwsUserIdType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get DistinguishedUser value
     * @return string|null
     */
    public function getDistinguishedUser(): ?string
    {
        return $this->DistinguishedUser;
    }
    /**
     * Set DistinguishedUser value
     * @uses \EnumType\EwsDistinguishedUserType::valueIsValid()
     * @uses \EnumType\EwsDistinguishedUserType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $distinguishedUser
     * @return \StructType\EwsUserIdType
     */
    public function setDistinguishedUser(?string $distinguishedUser = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDistinguishedUserType::valueIsValid($distinguishedUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDistinguishedUserType', is_array($distinguishedUser) ? implode(', ', $distinguishedUser) : var_export($distinguishedUser, true), implode(', ', \EnumType\EwsDistinguishedUserType::getValidValues())), __LINE__);
        }
        $this->DistinguishedUser = $distinguishedUser;
        
        return $this;
    }
    /**
     * Get ExternalUserIdentity value
     * @return string|null
     */
    public function getExternalUserIdentity(): ?string
    {
        return $this->ExternalUserIdentity;
    }
    /**
     * Set ExternalUserIdentity value
     * @param string $externalUserIdentity
     * @return \StructType\EwsUserIdType
     */
    public function setExternalUserIdentity(?string $externalUserIdentity = null): self
    {
        // validation for constraint: string
        if (!is_null($externalUserIdentity) && !is_string($externalUserIdentity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalUserIdentity, true), gettype($externalUserIdentity)), __LINE__);
        }
        $this->ExternalUserIdentity = $externalUserIdentity;
        
        return $this;
    }
}
