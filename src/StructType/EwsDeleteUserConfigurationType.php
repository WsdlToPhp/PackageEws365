<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsUserConfigurationNameType
     */
    public $UserConfigurationName;
    /**
     * Constructor method for DeleteUserConfigurationType
     * @uses EwsDeleteUserConfigurationType::setUserConfigurationName()
     * @param \Ews\StructType\EwsUserConfigurationNameType $userConfigurationName
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null)
    {
        $this
            ->setUserConfigurationName($userConfigurationName);
    }
    /**
     * Get UserConfigurationName value
     * @return \Ews\StructType\EwsUserConfigurationNameType
     */
    public function getUserConfigurationName()
    {
        return $this->UserConfigurationName;
    }
    /**
     * Set UserConfigurationName value
     * @param \Ews\StructType\EwsUserConfigurationNameType $userConfigurationName
     * @return \Ews\StructType\EwsDeleteUserConfigurationType
     */
    public function setUserConfigurationName(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null)
    {
        $this->UserConfigurationName = $userConfigurationName;
        return $this;
    }
}
