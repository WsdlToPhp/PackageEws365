<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUMPinType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsValidateUMPinType extends EwsBaseRequestType
{
    /**
     * The UserUMMailboxPolicyGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $UserUMMailboxPolicyGuid;
    /**
     * The PinInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPinInfoType|null
     */
    protected ?\StructType\EwsPinInfoType $PinInfo = null;
    /**
     * Constructor method for ValidateUMPinType
     * @uses EwsValidateUMPinType::setUserUMMailboxPolicyGuid()
     * @uses EwsValidateUMPinType::setPinInfo()
     * @param string $userUMMailboxPolicyGuid
     * @param \StructType\EwsPinInfoType $pinInfo
     */
    public function __construct(string $userUMMailboxPolicyGuid, ?\StructType\EwsPinInfoType $pinInfo = null)
    {
        $this
            ->setUserUMMailboxPolicyGuid($userUMMailboxPolicyGuid)
            ->setPinInfo($pinInfo);
    }
    /**
     * Get UserUMMailboxPolicyGuid value
     * @return string
     */
    public function getUserUMMailboxPolicyGuid(): string
    {
        return $this->UserUMMailboxPolicyGuid;
    }
    /**
     * Set UserUMMailboxPolicyGuid value
     * @param string $userUMMailboxPolicyGuid
     * @return \StructType\EwsValidateUMPinType
     */
    public function setUserUMMailboxPolicyGuid(string $userUMMailboxPolicyGuid): self
    {
        // validation for constraint: string
        if (!is_null($userUMMailboxPolicyGuid) && !is_string($userUMMailboxPolicyGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userUMMailboxPolicyGuid, true), gettype($userUMMailboxPolicyGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($userUMMailboxPolicyGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $userUMMailboxPolicyGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($userUMMailboxPolicyGuid, true)), __LINE__);
        }
        $this->UserUMMailboxPolicyGuid = $userUMMailboxPolicyGuid;
        
        return $this;
    }
    /**
     * Get PinInfo value
     * @return \StructType\EwsPinInfoType|null
     */
    public function getPinInfo(): ?\StructType\EwsPinInfoType
    {
        return $this->PinInfo;
    }
    /**
     * Set PinInfo value
     * @param \StructType\EwsPinInfoType $pinInfo
     * @return \StructType\EwsValidateUMPinType
     */
    public function setPinInfo(?\StructType\EwsPinInfoType $pinInfo = null): self
    {
        $this->PinInfo = $pinInfo;
        
        return $this;
    }
}
