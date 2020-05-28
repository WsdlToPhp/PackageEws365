<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $UserSid;
    /**
     * The GroupSids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType
     */
    public $GroupSids;
    /**
     * The RestrictedGroupSids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public $RestrictedGroupSids;
    /**
     * The PrimarySmtpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PrimarySmtpAddress;
    /**
     * Constructor method for SerializedSecurityContextType
     * @uses EwsSerializedSecurityContextType::setUserSid()
     * @uses EwsSerializedSecurityContextType::setGroupSids()
     * @uses EwsSerializedSecurityContextType::setRestrictedGroupSids()
     * @uses EwsSerializedSecurityContextType::setPrimarySmtpAddress()
     * @param string $userSid
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids
     * @param string $primarySmtpAddress
     */
    public function __construct($userSid = null, \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids = null, \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids = null, $primarySmtpAddress = null)
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
    public function getUserSid()
    {
        return $this->UserSid;
    }
    /**
     * Set UserSid value
     * @param string $userSid
     * @return \Ews\StructType\EwsSerializedSecurityContextType
     */
    public function setUserSid($userSid = null)
    {
        // validation for constraint: string
        if (!is_null($userSid) && !is_string($userSid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userSid, true), gettype($userSid)), __LINE__);
        }
        $this->UserSid = $userSid;
        return $this;
    }
    /**
     * Get GroupSids value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType|null
     */
    public function getGroupSids()
    {
        return $this->GroupSids;
    }
    /**
     * Set GroupSids value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids
     * @return \Ews\StructType\EwsSerializedSecurityContextType
     */
    public function setGroupSids(\Ews\ArrayType\EwsNonEmptyArrayOfGroupIdentifiersType $groupSids = null)
    {
        $this->GroupSids = $groupSids;
        return $this;
    }
    /**
     * Get RestrictedGroupSids value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType|null
     */
    public function getRestrictedGroupSids()
    {
        return $this->RestrictedGroupSids;
    }
    /**
     * Set RestrictedGroupSids value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids
     * @return \Ews\StructType\EwsSerializedSecurityContextType
     */
    public function setRestrictedGroupSids(\Ews\ArrayType\EwsNonEmptyArrayOfRestrictedGroupIdentifiersType $restrictedGroupSids = null)
    {
        $this->RestrictedGroupSids = $restrictedGroupSids;
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
     * @return \Ews\StructType\EwsSerializedSecurityContextType
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
}
