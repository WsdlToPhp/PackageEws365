<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserConfigurationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserConfigurationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UserConfiguration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUserConfigurationType
     */
    public $UserConfiguration;
    /**
     * Constructor method for GetUserConfigurationResponseMessageType
     * @uses EwsGetUserConfigurationResponseMessageType::setUserConfiguration()
     * @param \Ews\StructType\EwsUserConfigurationType $userConfiguration
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationType $userConfiguration = null)
    {
        $this
            ->setUserConfiguration($userConfiguration);
    }
    /**
     * Get UserConfiguration value
     * @return \Ews\StructType\EwsUserConfigurationType|null
     */
    public function getUserConfiguration()
    {
        return $this->UserConfiguration;
    }
    /**
     * Set UserConfiguration value
     * @param \Ews\StructType\EwsUserConfigurationType $userConfiguration
     * @return \Ews\StructType\EwsGetUserConfigurationResponseMessageType
     */
    public function setUserConfiguration(\Ews\StructType\EwsUserConfigurationType $userConfiguration = null)
    {
        $this->UserConfiguration = $userConfiguration;
        return $this;
    }
}
