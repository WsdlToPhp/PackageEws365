<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDiscoverySearchConfigurationResponseMessageType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the GetDiscoverySearchConfiguration web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetDiscoverySearchConfigurationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DiscoverySearchConfigurations
     * @var \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     */
    public $DiscoverySearchConfigurations;
    /**
     * Constructor method for GetDiscoverySearchConfigurationResponseMessageType
     * @uses EwsGetDiscoverySearchConfigurationResponseMessageType::setDiscoverySearchConfigurations()
     * @param \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations = null)
    {
        $this
            ->setDiscoverySearchConfigurations($discoverySearchConfigurations);
    }
    /**
     * Get DiscoverySearchConfigurations value
     * @return \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType|null
     */
    public function getDiscoverySearchConfigurations()
    {
        return $this->DiscoverySearchConfigurations;
    }
    /**
     * Set DiscoverySearchConfigurations value
     * @param \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
     */
    public function setDiscoverySearchConfigurations(\Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations = null)
    {
        $this->DiscoverySearchConfigurations = $discoverySearchConfigurations;
        return $this;
    }
}
