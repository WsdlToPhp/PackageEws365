<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserConfigurationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserConfigurationType extends EwsBaseRequestType
{
    /**
     * The UserConfigurationName
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserConfigurationNameType
     */
    public $UserConfigurationName;
    /**
     * The UserConfigurationProperties
     * Meta information extracted from the WSDL
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
    public function __construct(\Ews\StructType\EwsUserConfigurationNameType $userConfigurationName = null, array $userConfigurationProperties = array())
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
     * This method is responsible for validating the values passed to the setUserConfigurationProperties method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserConfigurationProperties method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserConfigurationPropertiesForArrayConstraintsFromSetUserConfigurationProperties(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserConfigurationTypeUserConfigurationPropertiesItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsUserConfigurationPropertyType::valueIsValid($getUserConfigurationTypeUserConfigurationPropertiesItem)) {
                $invalidValues[] = is_object($getUserConfigurationTypeUserConfigurationPropertiesItem) ? get_class($getUserConfigurationTypeUserConfigurationPropertiesItem) : sprintf('%s(%s)', gettype($getUserConfigurationTypeUserConfigurationPropertiesItem), var_export($getUserConfigurationTypeUserConfigurationPropertiesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUserConfigurationPropertyType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsUserConfigurationPropertyType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserConfigurationProperties value
     * @uses \Ews\EnumType\EwsUserConfigurationPropertyType::valueIsValid()
     * @uses \Ews\EnumType\EwsUserConfigurationPropertyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $userConfigurationProperties
     * @return \Ews\StructType\EwsGetUserConfigurationType
     */
    public function setUserConfigurationProperties(array $userConfigurationProperties = array())
    {
        // validation for constraint: list
        if ('' !== ($userConfigurationPropertiesArrayErrorMessage = self::validateUserConfigurationPropertiesForArrayConstraintsFromSetUserConfigurationProperties($userConfigurationProperties))) {
            throw new \InvalidArgumentException($userConfigurationPropertiesArrayErrorMessage, __LINE__);
        }
        $this->UserConfigurationProperties = is_array($userConfigurationProperties) ? implode(' ', $userConfigurationProperties) : null;
        return $this;
    }
}
