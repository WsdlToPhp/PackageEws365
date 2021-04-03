<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRulesType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of rule objects
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRulesType extends AbstractStructArrayBase
{
    /**
     * The Rule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsRuleType[]
     */
    protected array $Rule = [];
    /**
     * Constructor method for ArrayOfRulesType
     * @uses EwsArrayOfRulesType::setRule()
     * @param \StructType\EwsRuleType[] $rule
     */
    public function __construct(array $rule = [])
    {
        $this
            ->setRule($rule);
    }
    /**
     * Get Rule value
     * @return \StructType\EwsRuleType[]
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
        foreach ($values as $arrayOfRulesTypeRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfRulesTypeRuleItem instanceof \StructType\EwsRuleType) {
                $invalidValues[] = is_object($arrayOfRulesTypeRuleItem) ? get_class($arrayOfRulesTypeRuleItem) : sprintf('%s(%s)', gettype($arrayOfRulesTypeRuleItem), var_export($arrayOfRulesTypeRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Rule property can only contain items of type \StructType\EwsRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Rule value
     * @throws InvalidArgumentException
     * @param \StructType\EwsRuleType[] $rule
     * @return \ArrayType\EwsArrayOfRulesType
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
     * @return \StructType\EwsRuleType|null
     */
    public function current(): ?\StructType\EwsRuleType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsRuleType|null
     */
    public function item($index): ?\StructType\EwsRuleType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsRuleType|null
     */
    public function first(): ?\StructType\EwsRuleType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsRuleType|null
     */
    public function last(): ?\StructType\EwsRuleType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsRuleType|null
     */
    public function offsetGet($offset): ?\StructType\EwsRuleType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsRuleType $item
     * @return \ArrayType\EwsArrayOfRulesType
     */
    public function add(\StructType\EwsRuleType $item): self
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
