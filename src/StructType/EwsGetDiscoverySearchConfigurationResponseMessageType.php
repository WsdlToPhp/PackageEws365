<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDiscoverySearchConfigurationResponseMessageType
 * StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response message type for the GetDiscoverySearchConfiguration web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetDiscoverySearchConfigurationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DiscoverySearchConfigurations
     * Meta informations extracted from the WSDL
     * - documentation: Array of discovery search configuration.
     * @var \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     */
    public $DiscoverySearchConfigurations;
    /**
     * Constructor method for GetDiscoverySearchConfigurationResponseMessageType
     * @uses
     * EwsGetDiscoverySearchConfigurationResponseMessageType::setDiscoverySearchConfigu
     * rations()
     * @param \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     * $discoverySearchConfigurations
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
     * @param \Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType
     * $discoverySearchConfigurations
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
     */
    public function setDiscoverySearchConfigurations(\Ews\ArrayType\EwsArrayOfDiscoverySearchConfigurationType $discoverySearchConfigurations = null)
    {
        $this->DiscoverySearchConfigurations = $discoverySearchConfigurations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
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
