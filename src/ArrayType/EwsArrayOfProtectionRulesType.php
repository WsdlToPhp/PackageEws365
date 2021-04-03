<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProtectionRulesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfProtectionRulesType extends AbstractStructArrayBase
{
    /**
     * The Rule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsProtectionRuleType[]
     */
    protected array $Rule = [];
    /**
     * Constructor method for ArrayOfProtectionRulesType
     * @uses EwsArrayOfProtectionRulesType::setRule()
     * @param \StructType\EwsProtectionRuleType[] $rule
     */
    public function __construct(array $rule = [])
    {
        $this
            ->setRule($rule);
    }
    /**
     * Get Rule value
     * @return \StructType\EwsProtectionRuleType[]
     */
    public function getRule(): array
    {
        return $this->Rule;
    }
    /**
     * This method is responsible for validating the values passed to the setRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleForArrayConstraintsFromSetRule(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProtectionRulesTypeRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfProtectionRulesTypeRuleItem instanceof \StructType\EwsProtectionRuleType) {
                $invalidValues[] = is_object($arrayOfProtectionRulesTypeRuleItem) ? get_class($arrayOfProtectionRulesTypeRuleItem) : sprintf('%s(%s)', gettype($arrayOfProtectionRulesTypeRuleItem), var_export($arrayOfProtectionRulesTypeRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Rule property can only contain items of type \StructType\EwsProtectionRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Rule value
     * @throws InvalidArgumentException
     * @param \StructType\EwsProtectionRuleType[] $rule
     * @return \ArrayType\EwsArrayOfProtectionRulesType
     */
    public function setRule(array $rule = []): self
    {
        // validation for constraint: array
        if ('' !== ($ruleArrayErrorMessage = self::validateRuleForArrayConstraintsFromSetRule($rule))) {
            throw new InvalidArgumentException($ruleArrayErrorMessage, __LINE__);
        }
        $this->Rule = $rule;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsProtectionRuleType|null
     */
    public function current(): ?\StructType\EwsProtectionRuleType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsProtectionRuleType|null
     */
    public function item($index): ?\StructType\EwsProtectionRuleType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsProtectionRuleType|null
     */
    public function first(): ?\StructType\EwsProtectionRuleType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsProtectionRuleType|null
     */
    public function last(): ?\StructType\EwsProtectionRuleType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsProtectionRuleType|null
     */
    public function offsetGet($offset): ?\StructType\EwsProtectionRuleType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsProtectionRuleType $item
     * @return \ArrayType\EwsArrayOfProtectionRulesType
     */
    public function add(\StructType\EwsProtectionRuleType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Rule
     */
    public function getAttributeName(): string
    {
        return 'Rule';
    }
}
