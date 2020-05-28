<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsUserConfigurationType
     */
    public $UserConfiguration;
    /**
     * Constructor method for CreateUserConfigurationType
     * @uses EwsCreateUserConfigurationType::setUserConfiguration()
     * @param \Ews\StructType\EwsUserConfigurationType $userConfiguration
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationType $userConfiguration = null)
    {
        $this
            ->setUserConfiguration($userConfiguration);
    }
    /**
     * Get UserConfiguration value
     * @return \Ews\StructType\EwsUserConfigurationType
     */
    public function getUserConfiguration()
    {
        return $this->UserConfiguration;
    }
    /**
     * Set UserConfiguration value
     * @param \Ews\StructType\EwsUserConfigurationType $userConfiguration
     * @return \Ews\StructType\EwsCreateUserConfigurationType
     */
    public function setUserConfiguration(\Ews\StructType\EwsUserConfigurationType $userConfiguration = null)
    {
        $this->UserConfiguration = $userConfiguration;
        return $this;
    }
}
