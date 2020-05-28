<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceConfigurationType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfServiceConfigurationType extends AbstractStructArrayBase
{
    /**
     * The ConfigurationName
     * Meta information extracted from the WSDL
     * - choice: ConfigurationName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var string[]
     */
    public $ConfigurationName;
    /**
     * Constructor method for ArrayOfServiceConfigurationType
     * @uses EwsArrayOfServiceConfigurationType::setConfigurationName()
     * @param string[] $configurationName
     */
    public function __construct(array $configurationName = array())
    {
        $this
            ->setConfigurationName($configurationName);
    }
    /**
     * Get ConfigurationName value
     * @return string[]|null
     */
    public function getConfigurationName()
    {
        return isset($this->ConfigurationName) ? $this->ConfigurationName : null;
    }
    /**
     * This method is responsible for validating the values passed to the setConfigurationName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConfigurationName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConfigurationNameForArrayConstraintsFromSetConfigurationName(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceConfigurationTypeConfigurationNameItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsServiceConfigurationType::valueIsValid($arrayOfServiceConfigurationTypeConfigurationNameItem)) {
                $invalidValues[] = is_object($arrayOfServiceConfigurationTypeConfigurationNameItem) ? get_class($arrayOfServiceConfigurationTypeConfigurationNameItem) : sprintf('%s(%s)', gettype($arrayOfServiceConfigurationTypeConfigurationNameItem), var_export($arrayOfServiceConfigurationTypeConfigurationNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsServiceConfigurationType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsServiceConfigurationType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setConfigurationName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConfigurationName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateConfigurationNameForChoiceConstraintsFromSetConfigurationName($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ConfigurationName can\'t be set as the property %s is already set. Only one property must be set among these properties: ConfigurationName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ConfigurationName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @uses \Ews\EnumType\EwsServiceConfigurationType::valueIsValid()
     * @uses \Ews\EnumType\EwsServiceConfigurationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $configurationName
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function setConfigurationName(array $configurationName = array())
    {
        // validation for constraint: list
        if ('' !== ($configurationNameArrayErrorMessage = self::validateConfigurationNameForArrayConstraintsFromSetConfigurationName($configurationName))) {
            throw new \InvalidArgumentException($configurationNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(ConfigurationName)
        if ('' !== ($configurationNameChoiceErrorMessage = self::validateConfigurationNameForChoiceConstraintsFromSetConfigurationName($configurationName))) {
            throw new \InvalidArgumentException($configurationNameChoiceErrorMessage, __LINE__);
        }
        if (is_null($configurationName) || (is_array($configurationName) && empty($configurationName))) {
            unset($this->ConfigurationName);
        } else {
            $this->ConfigurationName = is_array($configurationName) ? implode(' ', $configurationName) : null;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Ews\EnumType\EwsServiceConfigurationType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsServiceConfigurationType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsServiceConfigurationType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Ews\EnumType\EwsServiceConfigurationType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConfigurationName
     */
    public function getAttributeName()
    {
        return 'ConfigurationName';
    }
}
