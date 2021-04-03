<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfDiscoverySearchConfigurationType|null
     */
    protected ?\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $DiscoverySearchConfigurations = null;
    /**
     * Constructor method for GetDiscoverySearchConfigurationResponseMessageType
     * @uses EwsGetDiscoverySearchConfigurationResponseMessageType::setDiscoverySearchConfigurations()
     * @param \ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations
     */
    public function __construct(?\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations = null)
    {
        $this
            ->setDiscoverySearchConfigurations($discoverySearchConfigurations);
    }
    /**
     * Get DiscoverySearchConfigurations value
     * @return \ArrayType\EwsArrayOfDiscoverySearchConfigurationType|null
     */
    public function getDiscoverySearchConfigurations(): ?\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
    {
        return $this->DiscoverySearchConfigurations;
    }
    /**
     * Set DiscoverySearchConfigurations value
     * @param \ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations
     * @return \StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
     */
    public function setDiscoverySearchConfigurations(?\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations = null): self
    {
        $this->DiscoverySearchConfigurations = $discoverySearchConfigurations;
        
        return $this;
    }
}
