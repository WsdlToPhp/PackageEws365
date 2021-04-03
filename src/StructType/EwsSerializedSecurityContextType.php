<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SerializedSecurityContextType StructType
 * Meta information extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSerializedSecurityContextType extends AbstractStructBase
{
    /**
     * The UserSid
     * @var string|null
     */
    protected ?string $UserSid = null;
    /**
     * The GroupSids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $GroupSids = null;
    /**
     * The RestrictedGroupSids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $RestrictedGroupSids = null;
    /**
     * The PrimarySmtpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrimarySmtpAddress = null;
    /**
     * Constructor method for SerializedSecurityContextType
     * @uses EwsSerializedSecurityContextType::setUserSid()
     * @uses EwsSerializedSecurityContextType::setGroupSids()
     * @uses EwsSerializedSecurityContextType::setRestrictedGroupSids()
     * @uses EwsSerializedSecurityContextType::setPrimarySmtpAddress()
     * @param string $userSid
     * @param \ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids
     * @param \ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids
     * @param string $primarySmtpAddress
     */
    public function __construct(?string $userSid = null, ?\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids = null, ?\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids = null, ?string $primarySmtpAddress = null)
    {
        $this
            ->setUserSid($userSid)
            ->setGroupSids($groupSids)
            ->setRestrictedGroupSids($restrictedGroupSids)
            ->setPrimarySmtpAddress($primarySmtpAddress);
    }
    /**
     * Get UserSid value
     * @return string|null
     */
    public function getUserSid(): ?string
    {
        return $this->UserSid;
    }
    /**
     * Set UserSid value
     * @param string $userSid
     * @return \StructType\EwsSerializedSecurityContextType
     */
    public function setUserSid(?string $userSid = null): self
    {
        // validation for constraint: string
        if (!is_null($userSid) && !is_string($userSid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userSid, true), gettype($userSid)), __LINE__);
        }
        $this->UserSid = $userSid;
        
        return $this;
    }
    /**
     * Get GroupSids value
     * @return \ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType|null
     */
    public function getGroupSids(): ?\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
    {
        return $this->GroupSids;
    }
    /**
     * Set GroupSids value
     * @param \ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids
     * @return \StructType\EwsSerializedSecurityContextType
     */
    public function setGroupSids(?\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids = null): self
    {
        $this->GroupSids = $groupSids;
        
        return $this;
    }
    /**
     * Get RestrictedGroupSids value
     * @return \ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType|null
     */
    public function getRestrictedGroupSids(): ?\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
    {
        return $this->RestrictedGroupSids;
    }
    /**
     * Set RestrictedGroupSids value
     * @param \ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids
     * @return \StructType\EwsSerializedSecurityContextType
     */
    public function setRestrictedGroupSids(?\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids = null): self
    {
        $this->RestrictedGroupSids = $restrictedGroupSids;
        
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
     * @return \StructType\EwsSerializedSecurityContextType
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
}
