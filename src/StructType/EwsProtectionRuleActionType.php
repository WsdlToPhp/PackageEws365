<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleActionType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The Argument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsProtectionRuleArgumentType[]
     */
    protected array $Argument = [];
    /**
     * Constructor method for ProtectionRuleActionType
     * @uses EwsProtectionRuleActionType::setName()
     * @uses EwsProtectionRuleActionType::setArgument()
     * @param string $name
     * @param \StructType\EwsProtectionRuleArgumentType[] $argument
     */
    public function __construct(string $name, array $argument = [])
    {
        $this
            ->setName($name)
            ->setArgument($argument);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \EnumType\EwsProtectionRuleActionKindType::valueIsValid()
     * @uses \EnumType\EwsProtectionRuleActionKindType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \StructType\EwsProtectionRuleActionType
     */
    public function setName(string $name): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsProtectionRuleActionKindType::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsProtectionRuleActionKindType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \EnumType\EwsProtectionRuleActionKindType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Argument value
     * @return \StructType\EwsProtectionRuleArgumentType[]
     */
    public function getArgument(): array
    {
        return $this->Argument;
    }
    /**
     * This method is responsible for validating the values passed to the setArgument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArgument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArgumentForArrayConstraintsFromSetArgument(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $protectionRuleActionTypeArgumentItem) {
            // validation for constraint: itemType
            if (!$protectionRuleActionTypeArgumentItem instanceof \StructType\EwsProtectionRuleArgumentType) {
                $invalidValues[] = is_object($protectionRuleActionTypeArgumentItem) ? get_class($protectionRuleActionTypeArgumentItem) : sprintf('%s(%s)', gettype($protectionRuleActionTypeArgumentItem), var_export($protectionRuleActionTypeArgumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Argument property can only contain items of type \StructType\EwsProtectionRuleArgumentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Argument value
     * @throws InvalidArgumentException
     * @param \StructType\EwsProtectionRuleArgumentType[] $argument
     * @return \StructType\EwsProtectionRuleActionType
     */
    public function setArgument(array $argument = []): self
    {
        // validation for constraint: array
        if ('' !== ($argumentArrayErrorMessage = self::validateArgumentForArrayConstraintsFromSetArgument($argument))) {
            throw new InvalidArgumentException($argumentArrayErrorMessage, __LINE__);
        }
        $this->Argument = $argument;
        
        return $this;
    }
    /**
     * Add item to Argument value
     * @throws InvalidArgumentException
     * @param \StructType\EwsProtectionRuleArgumentType $item
     * @return \StructType\EwsProtectionRuleActionType
     */
    public function addToArgument(\StructType\EwsProtectionRuleArgumentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsProtectionRuleArgumentType) {
            throw new InvalidArgumentException(sprintf('The Argument property can only contain items of type \StructType\EwsProtectionRuleArgumentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Argument[] = $item;
        
        return $this;
    }
}
