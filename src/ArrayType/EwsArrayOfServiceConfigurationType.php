<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var string
     */
    protected ?string $ConfigurationName = null;
    /**
     * Constructor method for ArrayOfServiceConfigurationType
     * @uses EwsArrayOfServiceConfigurationType::setConfigurationName()
     * @param array|string $configurationName
     */
    public function __construct($configurationName = [])
    {
        $this
            ->setConfigurationName($configurationName);
    }
    /**
     * Get ConfigurationName value
     * @return string
     */
    public function getConfigurationName(): ?string
    {
        return isset($this->ConfigurationName) ? $this->ConfigurationName : null;
    }
    /**
     * This method is responsible for validating the values passed to the setConfigurationName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConfigurationName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConfigurationNameForArrayConstraintsFromSetConfigurationName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceConfigurationTypeConfigurationNameItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsServiceConfigurationType::valueIsValid($arrayOfServiceConfigurationTypeConfigurationNameItem)) {
                $invalidValues[] = is_object($arrayOfServiceConfigurationTypeConfigurationNameItem) ? get_class($arrayOfServiceConfigurationTypeConfigurationNameItem) : sprintf('%s(%s)', gettype($arrayOfServiceConfigurationTypeConfigurationNameItem), var_export($arrayOfServiceConfigurationTypeConfigurationNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsServiceConfigurationType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsServiceConfigurationType::getValidValues()));
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
    public function validateConfigurationNameForChoiceConstraintsFromSetConfigurationName($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ConfigurationName can\'t be set as the property %s is already set. Only one property must be set among these properties: ConfigurationName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ConfigurationName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \EnumType\EwsServiceConfigurationType::valueIsValid()
     * @uses \EnumType\EwsServiceConfigurationType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $configurationName
     * @return \ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function setConfigurationName($configurationName = []): self
    {
        // validation for constraint: list
        if ('' !== ($configurationNameArrayErrorMessage = self::validateConfigurationNameForArrayConstraintsFromSetConfigurationName(is_string($configurationName) ? explode(' ', $configurationName) : $configurationName))) {
            throw new InvalidArgumentException($configurationNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(ConfigurationName)
        if ('' !== ($configurationNameChoiceErrorMessage = self::validateConfigurationNameForChoiceConstraintsFromSetConfigurationName($configurationName))) {
            throw new InvalidArgumentException($configurationNameChoiceErrorMessage, __LINE__);
        }
        if (is_null($configurationName) || (is_array($configurationName) && empty($configurationName))) {
            unset($this->ConfigurationName);
        } else {
            $this->ConfigurationName = is_array($configurationName) ? implode(' ', $configurationName) : $configurationName;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ArrayType\EwsArrayOfServiceConfigurationType
     */
    public function add(string $item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsServiceConfigurationType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsServiceConfigurationType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\EwsServiceConfigurationType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConfigurationName
     */
    public function getAttributeName(): string
    {
        return 'ConfigurationName';
    }
}
