<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserConfigurationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUserConfigurationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The UserConfiguration
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserConfigurationResponseMessageType
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
