<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientExtensionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientExtensionType extends EwsBaseRequestType
{
    /**
     * The RequestedExtensionIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $RequestedExtensionIds = null;
    /**
     * The UserParameters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsGetClientExtensionUserParametersType|null
     */
    protected ?\StructType\EwsGetClientExtensionUserParametersType $UserParameters = null;
    /**
     * The IsDebug
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDebug = null;
    /**
     * Constructor method for GetClientExtensionType
     * @uses EwsGetClientExtensionType::setRequestedExtensionIds()
     * @uses EwsGetClientExtensionType::setUserParameters()
     * @uses EwsGetClientExtensionType::setIsDebug()
     * @param \ArrayType\EwsArrayOfStringsType $requestedExtensionIds
     * @param \StructType\EwsGetClientExtensionUserParametersType $userParameters
     * @param bool $isDebug
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $requestedExtensionIds = null, ?\StructType\EwsGetClientExtensionUserParametersType $userParameters = null, ?bool $isDebug = null)
    {
        $this
            ->setRequestedExtensionIds($requestedExtensionIds)
            ->setUserParameters($userParameters)
            ->setIsDebug($isDebug);
    }
    /**
     * Get RequestedExtensionIds value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getRequestedExtensionIds(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->RequestedExtensionIds;
    }
    /**
     * Set RequestedExtensionIds value
     * @param \ArrayType\EwsArrayOfStringsType $requestedExtensionIds
     * @return \StructType\EwsGetClientExtensionType
     */
    public function setRequestedExtensionIds(?\ArrayType\EwsArrayOfStringsType $requestedExtensionIds = null): self
    {
        $this->RequestedExtensionIds = $requestedExtensionIds;
        
        return $this;
    }
    /**
     * Get UserParameters value
     * @return \StructType\EwsGetClientExtensionUserParametersType|null
     */
    public function getUserParameters(): ?\StructType\EwsGetClientExtensionUserParametersType
    {
        return $this->UserParameters;
    }
    /**
     * Set UserParameters value
     * @param \StructType\EwsGetClientExtensionUserParametersType $userParameters
     * @return \StructType\EwsGetClientExtensionType
     */
    public function setUserParameters(?\StructType\EwsGetClientExtensionUserParametersType $userParameters = null): self
    {
        $this->UserParameters = $userParameters;
        
        return $this;
    }
    /**
     * Get IsDebug value
     * @return bool|null
     */
    public function getIsDebug(): ?bool
    {
        return $this->IsDebug;
    }
    /**
     * Set IsDebug value
     * @param bool $isDebug
     * @return \StructType\EwsGetClientExtensionType
     */
    public function setIsDebug(?bool $isDebug = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDebug) && !is_bool($isDebug)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDebug, true), gettype($isDebug)), __LINE__);
        }
        $this->IsDebug = $isDebug;
        
        return $this;
    }
}
