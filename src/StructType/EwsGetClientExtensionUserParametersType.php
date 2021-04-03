<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientExtensionUserParametersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientExtensionUserParametersType extends AbstractStructBase
{
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $UserId;
    /**
     * The UserEnabledExtensions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $UserEnabledExtensions = null;
    /**
     * The UserDisabledExtensions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $UserDisabledExtensions = null;
    /**
     * The EnabledOnly
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $EnabledOnly = null;
    /**
     * Constructor method for GetClientExtensionUserParametersType
     * @uses EwsGetClientExtensionUserParametersType::setUserId()
     * @uses EwsGetClientExtensionUserParametersType::setUserEnabledExtensions()
     * @uses EwsGetClientExtensionUserParametersType::setUserDisabledExtensions()
     * @uses EwsGetClientExtensionUserParametersType::setEnabledOnly()
     * @param string $userId
     * @param \ArrayType\EwsArrayOfStringsType $userEnabledExtensions
     * @param \ArrayType\EwsArrayOfStringsType $userDisabledExtensions
     * @param bool $enabledOnly
     */
    public function __construct(string $userId, ?\ArrayType\EwsArrayOfStringsType $userEnabledExtensions = null, ?\ArrayType\EwsArrayOfStringsType $userDisabledExtensions = null, ?bool $enabledOnly = null)
    {
        $this
            ->setUserId($userId)
            ->setUserEnabledExtensions($userEnabledExtensions)
            ->setUserDisabledExtensions($userDisabledExtensions)
            ->setEnabledOnly($enabledOnly);
    }
    /**
     * Get UserId value
     * @return string
     */
    public function getUserId(): string
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \StructType\EwsGetClientExtensionUserParametersType
     */
    public function setUserId(string $userId): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        
        return $this;
    }
    /**
     * Get UserEnabledExtensions value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getUserEnabledExtensions(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->UserEnabledExtensions;
    }
    /**
     * Set UserEnabledExtensions value
     * @param \ArrayType\EwsArrayOfStringsType $userEnabledExtensions
     * @return \StructType\EwsGetClientExtensionUserParametersType
     */
    public function setUserEnabledExtensions(?\ArrayType\EwsArrayOfStringsType $userEnabledExtensions = null): self
    {
        $this->UserEnabledExtensions = $userEnabledExtensions;
        
        return $this;
    }
    /**
     * Get UserDisabledExtensions value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getUserDisabledExtensions(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->UserDisabledExtensions;
    }
    /**
     * Set UserDisabledExtensions value
     * @param \ArrayType\EwsArrayOfStringsType $userDisabledExtensions
     * @return \StructType\EwsGetClientExtensionUserParametersType
     */
    public function setUserDisabledExtensions(?\ArrayType\EwsArrayOfStringsType $userDisabledExtensions = null): self
    {
        $this->UserDisabledExtensions = $userDisabledExtensions;
        
        return $this;
    }
    /**
     * Get EnabledOnly value
     * @return bool|null
     */
    public function getEnabledOnly(): ?bool
    {
        return $this->EnabledOnly;
    }
    /**
     * Set EnabledOnly value
     * @param bool $enabledOnly
     * @return \StructType\EwsGetClientExtensionUserParametersType
     */
    public function setEnabledOnly(?bool $enabledOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enabledOnly) && !is_bool($enabledOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enabledOnly, true), gettype($enabledOnly)), __LINE__);
        }
        $this->EnabledOnly = $enabledOnly;
        
        return $this;
    }
}
