<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleRecipientIsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleRecipientIsType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minLength: 1
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Value = [];
    /**
     * Constructor method for ProtectionRuleRecipientIsType
     * @uses EwsProtectionRuleRecipientIsType::setValue()
     * @param string[] $value
     */
    public function __construct(array $value)
    {
        $this
            ->setValue($value);
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
        foreach ($values as $protectionRuleRecipientIsTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($protectionRuleRecipientIsTypeValueItem)) {
                $invalidValues[] = is_object($protectionRuleRecipientIsTypeValueItem) ? get_class($protectionRuleRecipientIsTypeValueItem) : sprintf('%s(%s)', gettype($protectionRuleRecipientIsTypeValueItem), var_export($protectionRuleRecipientIsTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForMinLengthConstraintFromSetValue($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $protectionRuleRecipientIsTypeValueItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $protectionRuleRecipientIsTypeValueItem) < 1) {
                $invalidValues[] = var_export($protectionRuleRecipientIsTypeValueItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Value value
     * @throws InvalidArgumentException
     * @param string[] $value
     * @return \StructType\EwsProtectionRuleRecipientIsType
     */
    public function setValue(array $value): self
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($valueMinLengthErrorMessage = self::validateValueForMinLengthConstraintFromSetValue($value))) {
            throw new InvalidArgumentException($valueMinLengthErrorMessage, __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Add item to Value value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\EwsProtectionRuleRecipientIsType
     */
    public function addToValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen((string) $item) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $item)), __LINE__);
        }
        $this->Value[] = $item;
        
        return $this;
    }
}
