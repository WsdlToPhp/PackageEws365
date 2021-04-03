<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRulesServiceConfiguration StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRulesServiceConfiguration extends EwsServiceConfiguration
{
    /**
     * The Rules
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfProtectionRulesType
     */
    protected \ArrayType\EwsArrayOfProtectionRulesType $Rules;
    /**
     * The InternalDomains
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsSmtpDomainList
     */
    protected \StructType\EwsSmtpDomainList $InternalDomains;
    /**
     * The RefreshInterval
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    protected int $RefreshInterval;
    /**
     * Constructor method for ProtectionRulesServiceConfiguration
     * @uses EwsProtectionRulesServiceConfiguration::setRules()
     * @uses EwsProtectionRulesServiceConfiguration::setInternalDomains()
     * @uses EwsProtectionRulesServiceConfiguration::setRefreshInterval()
     * @param \ArrayType\EwsArrayOfProtectionRulesType $rules
     * @param \StructType\EwsSmtpDomainList $internalDomains
     * @param int $refreshInterval
     */
    public function __construct(\ArrayType\EwsArrayOfProtectionRulesType $rules, \StructType\EwsSmtpDomainList $internalDomains, int $refreshInterval)
    {
        $this
            ->setRules($rules)
            ->setInternalDomains($internalDomains)
            ->setRefreshInterval($refreshInterval);
    }
    /**
     * Get Rules value
     * @return \ArrayType\EwsArrayOfProtectionRulesType
     */
    public function getRules(): \ArrayType\EwsArrayOfProtectionRulesType
    {
        return $this->Rules;
    }
    /**
     * Set Rules value
     * @param \ArrayType\EwsArrayOfProtectionRulesType $rules
     * @return \StructType\EwsProtectionRulesServiceConfiguration
     */
    public function setRules(\ArrayType\EwsArrayOfProtectionRulesType $rules): self
    {
        $this->Rules = $rules;
        
        return $this;
    }
    /**
     * Get InternalDomains value
     * @return \StructType\EwsSmtpDomainList
     */
    public function getInternalDomains(): \StructType\EwsSmtpDomainList
    {
        return $this->InternalDomains;
    }
    /**
     * Set InternalDomains value
     * @param \StructType\EwsSmtpDomainList $internalDomains
     * @return \StructType\EwsProtectionRulesServiceConfiguration
     */
    public function setInternalDomains(\StructType\EwsSmtpDomainList $internalDomains): self
    {
        $this->InternalDomains = $internalDomains;
        
        return $this;
    }
    /**
     * Get RefreshInterval value
     * @return int
     */
    public function getRefreshInterval(): int
    {
        return $this->RefreshInterval;
    }
    /**
     * Set RefreshInterval value
     * @param int $refreshInterval
     * @return \StructType\EwsProtectionRulesServiceConfiguration
     */
    public function setRefreshInterval(int $refreshInterval): self
    {
        // validation for constraint: int
        if (!is_null($refreshInterval) && !(is_int($refreshInterval) || ctype_digit($refreshInterval))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refreshInterval, true), gettype($refreshInterval)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($refreshInterval) && $refreshInterval < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($refreshInterval, true)), __LINE__);
        }
        $this->RefreshInterval = $refreshInterval;
        
        return $this;
    }
}
