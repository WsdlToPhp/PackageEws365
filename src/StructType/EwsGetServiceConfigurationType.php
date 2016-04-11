<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetServiceConfigurationType extends EwsBaseRequestType
{
    /**
     * The RequestedConfiguration
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfServiceConfigurationType
     */
    public $RequestedConfiguration;
    /**
     * The ActingAs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $ActingAs;
    /**
     * The ConfigurationRequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsConfigurationRequestDetailsType
     */
    public $ConfigurationRequestDetails;
    /**
     * Constructor method for GetServiceConfigurationType
     * @uses EwsGetServiceConfigurationType::setRequestedConfiguration()
     * @uses EwsGetServiceConfigurationType::setActingAs()
     * @uses EwsGetServiceConfigurationType::setConfigurationRequestDetails()
     * @param \Ews\ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration
     * @param \Ews\StructType\EwsEmailAddressType $actingAs
     * @param \Ews\StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration = null, \Ews\StructType\EwsEmailAddressType $actingAs = null, \Ews\StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails = null)
    {
        $this
            ->setRequestedConfiguration($requestedConfiguration)
            ->setActingAs($actingAs)
            ->setConfigurationRequestDetails($configurationRequestDetails);
    }
    /**
     * Get RequestedConfiguration value
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function getRequestedConfiguration()
    {
        return $this->RequestedConfiguration;
    }
    /**
     * Set RequestedConfiguration value
     * @param \Ews\ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration
     * @return \Ews\StructType\EwsGetServiceConfigurationType
     */
    public function setRequestedConfiguration(\Ews\ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration = null)
    {
        $this->RequestedConfiguration = $requestedConfiguration;
        return $this;
    }
    /**
     * Get ActingAs value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getActingAs()
    {
        return $this->ActingAs;
    }
    /**
     * Set ActingAs value
     * @param \Ews\StructType\EwsEmailAddressType $actingAs
     * @return \Ews\StructType\EwsGetServiceConfigurationType
     */
    public function setActingAs(\Ews\StructType\EwsEmailAddressType $actingAs = null)
    {
        $this->ActingAs = $actingAs;
        return $this;
    }
    /**
     * Get ConfigurationRequestDetails value
     * @return \Ews\StructType\EwsConfigurationRequestDetailsType|null
     */
    public function getConfigurationRequestDetails()
    {
        return $this->ConfigurationRequestDetails;
    }
    /**
     * Set ConfigurationRequestDetails value
     * @param \Ews\StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails
     * @return \Ews\StructType\EwsGetServiceConfigurationType
     */
    public function setConfigurationRequestDetails(\Ews\StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails = null)
    {
        $this->ConfigurationRequestDetails = $configurationRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetServiceConfigurationType
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
