<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUserConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateUserConfigurationType extends EwsBaseRequestType
{
    /**
     * The UserConfiguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserConfigurationType
     */
    public $UserConfiguration;
    /**
     * Constructor method for UpdateUserConfigurationType
     * @uses EwsUpdateUserConfigurationType::setUserConfiguration()
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
     * @return \Ews\StructType\EwsUpdateUserConfigurationType
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
     * @return \Ews\StructType\EwsUpdateUserConfigurationType
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
