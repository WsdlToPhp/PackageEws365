<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsRuleType[]
     */
    public $Rule;
    /**
     * Constructor method for ArrayOfRulesType
     * @uses EwsArrayOfRulesType::setRule()
     * @param \Ews\StructType\EwsRuleType[] $rule
     */
    public function __construct(array $rule = array())
    {
        $this
            ->setRule($rule);
    }
    /**
     * Get Rule value
     * @return \Ews\StructType\EwsRuleType[]|null
     */
    public function getRule()
    {
        return $this->Rule;
    }
    /**
     * This method is responsible for validating the values passed to the setRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleForArrayConstraintsFromSetRule(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRulesTypeRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfRulesTypeRuleItem instanceof \Ews\StructType\EwsRuleType) {
                $invalidValues[] = is_object($arrayOfRulesTypeRuleItem) ? get_class($arrayOfRulesTypeRuleItem) : sprintf('%s(%s)', gettype($arrayOfRulesTypeRuleItem), var_export($arrayOfRulesTypeRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Rule property can only contain items of type \Ews\StructType\EwsRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Rule value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRuleType[] $rule
     * @return \Ews\ArrayType\EwsArrayOfRulesType
     */
    public function setRule(array $rule = array())
    {
        // validation for constraint: array
        if ('' !== ($ruleArrayErrorMessage = self::validateRuleForArrayConstraintsFromSetRule($rule))) {
            throw new \InvalidArgumentException($ruleArrayErrorMessage, __LINE__);
        }
        $this->Rule = $rule;
        return $this;
    }
    /**
     * Add item to Rule value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRuleType $item
     * @return \Ews\ArrayType\EwsArrayOfRulesType
     */
    public function addToRule(\Ews\StructType\EwsRuleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsRuleType) {
            throw new \InvalidArgumentException(sprintf('The Rule property can only contain items of type \Ews\StructType\EwsRuleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Rule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRuleType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRuleType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRuleType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRuleType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRuleType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Rule
     */
    public function getAttributeName()
    {
        return 'Rule';
    }
}
