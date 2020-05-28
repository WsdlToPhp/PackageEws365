<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfProtectionRulesType
     */
    public $Rules;
    /**
     * The InternalDomains
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSmtpDomainList
     */
    public $InternalDomains;
    /**
     * The RefreshInterval
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    public $RefreshInterval;
    /**
     * Constructor method for ProtectionRulesServiceConfiguration
     * @uses EwsProtectionRulesServiceConfiguration::setRules()
     * @uses EwsProtectionRulesServiceConfiguration::setInternalDomains()
     * @uses EwsProtectionRulesServiceConfiguration::setRefreshInterval()
     * @param \Ews\ArrayType\EwsArrayOfProtectionRulesType $rules
     * @param \Ews\StructType\EwsSmtpDomainList $internalDomains
     * @param int $refreshInterval
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfProtectionRulesType $rules = null, \Ews\StructType\EwsSmtpDomainList $internalDomains = null, $refreshInterval = null)
    {
        $this
            ->setRules($rules)
            ->setInternalDomains($internalDomains)
            ->setRefreshInterval($refreshInterval);
    }
    /**
     * Get Rules value
     * @return \Ews\ArrayType\EwsArrayOfProtectionRulesType
     */
    public function getRules()
    {
        return $this->Rules;
    }
    /**
     * Set Rules value
     * @param \Ews\ArrayType\EwsArrayOfProtectionRulesType $rules
     * @return \Ews\StructType\EwsProtectionRulesServiceConfiguration
     */
    public function setRules(\Ews\ArrayType\EwsArrayOfProtectionRulesType $rules = null)
    {
        $this->Rules = $rules;
        return $this;
    }
    /**
     * Get InternalDomains value
     * @return \Ews\StructType\EwsSmtpDomainList
     */
    public function getInternalDomains()
    {
        return $this->InternalDomains;
    }
    /**
     * Set InternalDomains value
     * @param \Ews\StructType\EwsSmtpDomainList $internalDomains
     * @return \Ews\StructType\EwsProtectionRulesServiceConfiguration
     */
    public function setInternalDomains(\Ews\StructType\EwsSmtpDomainList $internalDomains = null)
    {
        $this->InternalDomains = $internalDomains;
        return $this;
    }
    /**
     * Get RefreshInterval value
     * @return int
     */
    public function getRefreshInterval()
    {
        return $this->RefreshInterval;
    }
    /**
     * Set RefreshInterval value
     * @param int $refreshInterval
     * @return \Ews\StructType\EwsProtectionRulesServiceConfiguration
     */
    public function setRefreshInterval($refreshInterval = null)
    {
        // validation for constraint: int
        if (!is_null($refreshInterval) && !(is_int($refreshInterval) || ctype_digit($refreshInterval))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refreshInterval, true), gettype($refreshInterval)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($refreshInterval) && $refreshInterval < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($refreshInterval, true)), __LINE__);
        }
        $this->RefreshInterval = $refreshInterval;
        return $this;
    }
}
