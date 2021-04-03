<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserConfigurationDictionaryObjectType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationDictionaryObjectType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Type;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Value = [];
    /**
     * Constructor method for UserConfigurationDictionaryObjectType
     * @uses EwsUserConfigurationDictionaryObjectType::setType()
     * @uses EwsUserConfigurationDictionaryObjectType::setValue()
     * @param string $type
     * @param string[] $value
     */
    public function __construct(string $type, array $value)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsUserConfigurationDictionaryObjectTypesType::valueIsValid()
     * @uses \EnumType\EwsUserConfigurationDictionaryObjectTypesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUserConfigurationDictionaryObjectTypesType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUserConfigurationDictionaryObjectTypesType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsUserConfigurationDictionaryObjectTypesType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string[]
     */
    public function getValue(): array
    {
        return $this->Value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $userConfigurationDictionaryObjectTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($userConfigurationDictionaryObjectTypeValueItem)) {
                $invalidValues[] = is_object($userConfigurationDictionaryObjectTypeValueItem) ? get_class($userConfigurationDictionaryObjectTypeValueItem) : sprintf('%s(%s)', gettype($userConfigurationDictionaryObjectTypeValueItem), var_export($userConfigurationDictionaryObjectTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Value value
     * @throws InvalidArgumentException
     * @param string[] $value
     * @return \StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function setValue(array $value): self
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Add item to Value value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\EwsUserConfigurationDictionaryObjectType
     */
    public function addToValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Value[] = $item;
        
        return $this;
    }
}
