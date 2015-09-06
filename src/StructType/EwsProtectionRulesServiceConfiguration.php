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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfProtectionRulesType
     */
    public $Rules;
    /**
     * The InternalDomains
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSmtpDomainList
     */
    public $InternalDomains;
    /**
     * The RefreshInterval
     * Meta informations extracted from the WSDL
     * - use: required
     * @var anonymous632
     */
    public $RefreshInterval;
    /**
     * Constructor method for ProtectionRulesServiceConfiguration
     * @uses EwsProtectionRulesServiceConfiguration::setRules()
     * @uses EwsProtectionRulesServiceConfiguration::setInternalDomains()
     * @uses EwsProtectionRulesServiceConfiguration::setRefreshInterval()
     * @param \Ews\ArrayType\EwsArrayOfProtectionRulesType $rules
     * @param \Ews\StructType\EwsSmtpDomainList $internalDomains
     * @param anonymous632 $refreshInterval
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfProtectionRulesType $rules = null, \Ews\StructType\EwsSmtpDomainList $internalDomains = null, anonymous632 $refreshInterval = null)
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
     * @return anonymous632
     */
    public function getRefreshInterval()
    {
        return $this->RefreshInterval;
    }
    /**
     * Set RefreshInterval value
     * @param anonymous632 $refreshInterval
     * @return \Ews\StructType\EwsProtectionRulesServiceConfiguration
     */
    public function setRefreshInterval(anonymous632 $refreshInterval = null)
    {
        $this->RefreshInterval = $refreshInterval;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProtectionRulesServiceConfiguration
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
