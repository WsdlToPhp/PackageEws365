<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUserConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteUserConfigurationType extends EwsBaseRequestType
{
    /**
     * The UserConfigurationName
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsUserConfigurationNameType
     */
    protected \StructType\EwsUserConfigurationNameType $UserConfigurationName;
    /**
     * Constructor method for DeleteUserConfigurationType
     * @uses EwsDeleteUserConfigurationType::setUserConfigurationName()
     * @param \StructType\EwsUserConfigurationNameType $userConfigurationName
     */
    public function __construct(\StructType\EwsUserConfigurationNameType $userConfigurationName)
    {
        $this
            ->setUserConfigurationName($userConfigurationName);
    }
    /**
     * Get UserConfigurationName value
     * @return \StructType\EwsUserConfigurationNameType
     */
    public function getUserConfigurationName(): \StructType\EwsUserConfigurationNameType
    {
        return $this->UserConfigurationName;
    }
    /**
     * Set UserConfigurationName value
     * @param \StructType\EwsUserConfigurationNameType $userConfigurationName
     * @return \StructType\EwsDeleteUserConfigurationType
     */
    public function setUserConfigurationName(\StructType\EwsUserConfigurationNameType $userConfigurationName): self
    {
        $this->UserConfigurationName = $userConfigurationName;
        
        return $this;
    }
}
