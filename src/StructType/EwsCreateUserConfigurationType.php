<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUserConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateUserConfigurationType extends EwsBaseRequestType
{
    /**
     * The UserConfiguration
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsUserConfigurationType
     */
    protected \StructType\EwsUserConfigurationType $UserConfiguration;
    /**
     * Constructor method for CreateUserConfigurationType
     * @uses EwsCreateUserConfigurationType::setUserConfiguration()
     * @param \StructType\EwsUserConfigurationType $userConfiguration
     */
    public function __construct(\StructType\EwsUserConfigurationType $userConfiguration)
    {
        $this
            ->setUserConfiguration($userConfiguration);
    }
    /**
     * Get UserConfiguration value
     * @return \StructType\EwsUserConfigurationType
     */
    public function getUserConfiguration(): \StructType\EwsUserConfigurationType
    {
        return $this->UserConfiguration;
    }
    /**
     * Set UserConfiguration value
     * @param \StructType\EwsUserConfigurationType $userConfiguration
     * @return \StructType\EwsCreateUserConfigurationType
     */
    public function setUserConfiguration(\StructType\EwsUserConfigurationType $userConfiguration): self
    {
        $this->UserConfiguration = $userConfiguration;
        
        return $this;
    }
}
