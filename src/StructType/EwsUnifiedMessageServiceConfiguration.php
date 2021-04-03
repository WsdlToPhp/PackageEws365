<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedMessageServiceConfiguration StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedMessageServiceConfiguration extends EwsServiceConfiguration
{
    /**
     * The UmEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $UmEnabled;
    /**
     * The PlayOnPhoneDialString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $PlayOnPhoneDialString;
    /**
     * The PlayOnPhoneEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $PlayOnPhoneEnabled;
    /**
     * Constructor method for UnifiedMessageServiceConfiguration
     * @uses EwsUnifiedMessageServiceConfiguration::setUmEnabled()
     * @uses EwsUnifiedMessageServiceConfiguration::setPlayOnPhoneDialString()
     * @uses EwsUnifiedMessageServiceConfiguration::setPlayOnPhoneEnabled()
     * @param bool $umEnabled
     * @param string $playOnPhoneDialString
     * @param bool $playOnPhoneEnabled
     */
    public function __construct(bool $umEnabled, string $playOnPhoneDialString, bool $playOnPhoneEnabled)
    {
        $this
            ->setUmEnabled($umEnabled)
            ->setPlayOnPhoneDialString($playOnPhoneDialString)
            ->setPlayOnPhoneEnabled($playOnPhoneEnabled);
    }
    /**
     * Get UmEnabled value
     * @return bool
     */
    public function getUmEnabled(): bool
    {
        return $this->UmEnabled;
    }
    /**
     * Set UmEnabled value
     * @param bool $umEnabled
     * @return \StructType\EwsUnifiedMessageServiceConfiguration
     */
    public function setUmEnabled(bool $umEnabled): self
    {
        // validation for constraint: boolean
        if (!is_null($umEnabled) && !is_bool($umEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($umEnabled, true), gettype($umEnabled)), __LINE__);
        }
        $this->UmEnabled = $umEnabled;
        
        return $this;
    }
    /**
     * Get PlayOnPhoneDialString value
     * @return string
     */
    public function getPlayOnPhoneDialString(): string
    {
        return $this->PlayOnPhoneDialString;
    }
    /**
     * Set PlayOnPhoneDialString value
     * @param string $playOnPhoneDialString
     * @return \StructType\EwsUnifiedMessageServiceConfiguration
     */
    public function setPlayOnPhoneDialString(string $playOnPhoneDialString): self
    {
        // validation for constraint: string
        if (!is_null($playOnPhoneDialString) && !is_string($playOnPhoneDialString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($playOnPhoneDialString, true), gettype($playOnPhoneDialString)), __LINE__);
        }
        $this->PlayOnPhoneDialString = $playOnPhoneDialString;
        
        return $this;
    }
    /**
     * Get PlayOnPhoneEnabled value
     * @return bool
     */
    public function getPlayOnPhoneEnabled(): bool
    {
        return $this->PlayOnPhoneEnabled;
    }
    /**
     * Set PlayOnPhoneEnabled value
     * @param bool $playOnPhoneEnabled
     * @return \StructType\EwsUnifiedMessageServiceConfiguration
     */
    public function setPlayOnPhoneEnabled(bool $playOnPhoneEnabled): self
    {
        // validation for constraint: boolean
        if (!is_null($playOnPhoneEnabled) && !is_bool($playOnPhoneEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($playOnPhoneEnabled, true), gettype($playOnPhoneEnabled)), __LINE__);
        }
        $this->PlayOnPhoneEnabled = $playOnPhoneEnabled;
        
        return $this;
    }
}
