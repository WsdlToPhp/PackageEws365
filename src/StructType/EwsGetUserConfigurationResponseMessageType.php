<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsUserConfigurationType|null
     */
    protected ?\StructType\EwsUserConfigurationType $UserConfiguration = null;
    /**
     * Constructor method for GetUserConfigurationResponseMessageType
     * @uses EwsGetUserConfigurationResponseMessageType::setUserConfiguration()
     * @param \StructType\EwsUserConfigurationType $userConfiguration
     */
    public function __construct(?\StructType\EwsUserConfigurationType $userConfiguration = null)
    {
        $this
            ->setUserConfiguration($userConfiguration);
    }
    /**
     * Get UserConfiguration value
     * @return \StructType\EwsUserConfigurationType|null
     */
    public function getUserConfiguration(): ?\StructType\EwsUserConfigurationType
    {
        return $this->UserConfiguration;
    }
    /**
     * Set UserConfiguration value
     * @param \StructType\EwsUserConfigurationType $userConfiguration
     * @return \StructType\EwsGetUserConfigurationResponseMessageType
     */
    public function setUserConfiguration(?\StructType\EwsUserConfigurationType $userConfiguration = null): self
    {
        $this->UserConfiguration = $userConfiguration;
        
        return $this;
    }
}
