<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUserConfigurationType extends EwsBaseRequestType
{
    /**
     * The UserConfigurationName
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserConfigurationNameType
     */
    public $UserConfigurationName;
    /**
     * The UserConfigurationProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string[]
     */
    public $UserConfigurationProperties;
    /**
     * Constructor method for GetUserConfigurationType
     * @uses EwsGetUserConfigurationType::setUserConfigurationName()
     * @uses EwsGetUserConfigurationType::setUserConfigurationProperties()
     * @param \Ews\StructType\EwsUserConfigurationNameType $userConfigurationName
     * @param string[] $userConfigurationProperties
     */
    public function __construct(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null, $userConfigurationProperties = null)
    {
        $this
            ->setUserConfigurationName($userConfigurationName)
            ->setUserConfigurationProperties($userConfigurationProperties);
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
     * @return \Ews\StructType\EwsGetUserConfigurationType
     */
    public function setUserConfigurationName(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null)
    {
        $this->UserConfigurationName = $userConfigurationName;
        return $this;
    }
    /**
     * Get UserConfigurationProperties value
     * @return string[]
     */
    public function getUserConfigurationProperties()
    {
        return $this->UserConfigurationProperties;
    }
    /**
     * Set UserConfigurationProperties value
     * @uses \Ews\EnumType\EwsUserConfigurationPropertyType::valueIsValid()
     * @uses \Ews\EnumType\EwsUserConfigurationPropertyType::getValidValues()
     * @param string[] $userConfigurationProperties
     * @return \Ews\StructType\EwsGetUserConfigurationType
     */
    public function setUserConfigurationProperties($userConfigurationProperties = null)
    {
        if (!\Ews\EnumType\EwsUserConfigurationPropertyType::valueIsValid($userConfigurationProperties)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $userConfigurationProperties, implode(', ', \Ews\EnumType\EwsUserConfigurationPropertyType::getValidValues())), __LINE__);
        }
        $this->UserConfigurationProperties = $userConfigurationProperties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUserConfigurationType
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
