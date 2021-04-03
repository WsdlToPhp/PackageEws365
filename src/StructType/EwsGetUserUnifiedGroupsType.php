<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserUnifiedGroupsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserUnifiedGroupsType extends EwsBaseRequestType
{
    /**
     * The RequestedGroupsSets
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType|null
     */
    protected ?\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $RequestedGroupsSets = null;
    /**
     * The UserSmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserSmtpAddress = null;
    /**
     * Constructor method for GetUserUnifiedGroupsType
     * @uses EwsGetUserUnifiedGroupsType::setRequestedGroupsSets()
     * @uses EwsGetUserUnifiedGroupsType::setUserSmtpAddress()
     * @param \ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets
     * @param string $userSmtpAddress
     */
    public function __construct(?\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets = null, ?string $userSmtpAddress = null)
    {
        $this
            ->setRequestedGroupsSets($requestedGroupsSets)
            ->setUserSmtpAddress($userSmtpAddress);
    }
    /**
     * Get RequestedGroupsSets value
     * @return \ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType|null
     */
    public function getRequestedGroupsSets(): ?\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType
    {
        return $this->RequestedGroupsSets;
    }
    /**
     * Set RequestedGroupsSets value
     * @param \ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets
     * @return \StructType\EwsGetUserUnifiedGroupsType
     */
    public function setRequestedGroupsSets(?\ArrayType\EwsArrayOfRequestedUnifiedGroupsSetsType $requestedGroupsSets = null): self
    {
        $this->RequestedGroupsSets = $requestedGroupsSets;
        
        return $this;
    }
    /**
     * Get UserSmtpAddress value
     * @return string|null
     */
    public function getUserSmtpAddress(): ?string
    {
        return $this->UserSmtpAddress;
    }
    /**
     * Set UserSmtpAddress value
     * @param string $userSmtpAddress
     * @return \StructType\EwsGetUserUnifiedGroupsType
     */
    public function setUserSmtpAddress(?string $userSmtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($userSmtpAddress) && !is_string($userSmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userSmtpAddress, true), gettype($userSmtpAddress)), __LINE__);
        }
        $this->UserSmtpAddress = $userSmtpAddress;
        
        return $this;
    }
}
