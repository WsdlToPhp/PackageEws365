<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsUserConfigurationNameType
     */
    protected \StructType\EwsUserConfigurationNameType $UserConfigurationName;
    /**
     * The UserConfigurationProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $UserConfigurationProperties;
    /**
     * Constructor method for GetUserConfigurationType
     * @uses EwsGetUserConfigurationType::setUserConfigurationName()
     * @uses EwsGetUserConfigurationType::setUserConfigurationProperties()
     * @param \StructType\EwsUserConfigurationNameType $userConfigurationName
     * @param array|string $userConfigurationProperties
     */
    public function __construct(\StructType\EwsUserConfigurationNameType $userConfigurationName, $userConfigurationProperties)
    {
        $this
            ->setUserConfigurationName($userConfigurationName)
            ->setUserConfigurationProperties($userConfigurationProperties);
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
     * @return \StructType\EwsGetUserConfigurationType
     */
    public function setUserConfigurationName(\StructType\EwsUserConfigurationNameType $userConfigurationName): self
    {
        $this->UserConfigurationName = $userConfigurationName;
        
        return $this;
    }
    /**
     * Get UserConfigurationProperties value
     * @return string
     */
    public function getUserConfigurationProperties(): string
    {
        return $this->UserConfigurationProperties;
    }
    /**
     * This method is responsible for validating the values passed to the setUserConfigurationProperties method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserConfigurationProperties method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserConfigurationPropertiesForArrayConstraintsFromSetUserConfigurationProperties(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserConfigurationTypeUserConfigurationPropertiesItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsUserConfigurationPropertyType::valueIsValid($getUserConfigurationTypeUserConfigurationPropertiesItem)) {
                $invalidValues[] = is_object($getUserConfigurationTypeUserConfigurationPropertiesItem) ? get_class($getUserConfigurationTypeUserConfigurationPropertiesItem) : sprintf('%s(%s)', gettype($getUserConfigurationTypeUserConfigurationPropertiesItem), var_export($getUserConfigurationTypeUserConfigurationPropertiesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUserConfigurationPropertyType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsUserConfigurationPropertyType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserConfigurationProperties value
     * @uses \EnumType\EwsUserConfigurationPropertyType::valueIsValid()
     * @uses \EnumType\EwsUserConfigurationPropertyType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $userConfigurationProperties
     * @return \StructType\EwsGetUserConfigurationType
     */
    public function setUserConfigurationProperties($userConfigurationProperties): self
    {
        // validation for constraint: list
        if ('' !== ($userConfigurationPropertiesArrayErrorMessage = self::validateUserConfigurationPropertiesForArrayConstraintsFromSetUserConfigurationProperties(is_string($userConfigurationProperties) ? explode(' ', $userConfigurationProperties) : $userConfigurationProperties))) {
            throw new InvalidArgumentException($userConfigurationPropertiesArrayErrorMessage, __LINE__);
        }
        $this->UserConfigurationProperties = is_array($userConfigurationProperties) ? implode(' ', $userConfigurationProperties) : $userConfigurationProperties;
        
        return $this;
    }
}
