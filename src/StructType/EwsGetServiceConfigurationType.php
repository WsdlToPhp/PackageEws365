<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfServiceConfigurationType
     */
    protected \ArrayType\EwsArrayOfServiceConfigurationType $RequestedConfiguration;
    /**
     * The ActingAs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $ActingAs = null;
    /**
     * The ConfigurationRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsConfigurationRequestDetailsType|null
     */
    protected ?\StructType\EwsConfigurationRequestDetailsType $ConfigurationRequestDetails = null;
    /**
     * Constructor method for GetServiceConfigurationType
     * @uses EwsGetServiceConfigurationType::setRequestedConfiguration()
     * @uses EwsGetServiceConfigurationType::setActingAs()
     * @uses EwsGetServiceConfigurationType::setConfigurationRequestDetails()
     * @param \ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration
     * @param \StructType\EwsEmailAddressType $actingAs
     * @param \StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails
     */
    public function __construct(\ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration, ?\StructType\EwsEmailAddressType $actingAs = null, ?\StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails = null)
    {
        $this
            ->setRequestedConfiguration($requestedConfiguration)
            ->setActingAs($actingAs)
            ->setConfigurationRequestDetails($configurationRequestDetails);
    }
    /**
     * Get RequestedConfiguration value
     * @return \ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function getRequestedConfiguration(): \ArrayType\EwsArrayOfServiceConfigurationType
    {
        return $this->RequestedConfiguration;
    }
    /**
     * Set RequestedConfiguration value
     * @param \ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration
     * @return \StructType\EwsGetServiceConfigurationType
     */
    public function setRequestedConfiguration(\ArrayType\EwsArrayOfServiceConfigurationType $requestedConfiguration): self
    {
        $this->RequestedConfiguration = $requestedConfiguration;
        
        return $this;
    }
    /**
     * Get ActingAs value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getActingAs(): ?\StructType\EwsEmailAddressType
    {
        return $this->ActingAs;
    }
    /**
     * Set ActingAs value
     * @param \StructType\EwsEmailAddressType $actingAs
     * @return \StructType\EwsGetServiceConfigurationType
     */
    public function setActingAs(?\StructType\EwsEmailAddressType $actingAs = null): self
    {
        $this->ActingAs = $actingAs;
        
        return $this;
    }
    /**
     * Get ConfigurationRequestDetails value
     * @return \StructType\EwsConfigurationRequestDetailsType|null
     */
    public function getConfigurationRequestDetails(): ?\StructType\EwsConfigurationRequestDetailsType
    {
        return $this->ConfigurationRequestDetails;
    }
    /**
     * Set ConfigurationRequestDetails value
     * @param \StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails
     * @return \StructType\EwsGetServiceConfigurationType
     */
    public function setConfigurationRequestDetails(?\StructType\EwsConfigurationRequestDetailsType $configurationRequestDetails = null): self
    {
        $this->ConfigurationRequestDetails = $configurationRequestDetails;
        
        return $this;
    }
}
