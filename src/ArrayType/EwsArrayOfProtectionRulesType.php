<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsProtectionRuleType[]
     */
    public $Rule;
    /**
     * Constructor method for ArrayOfProtectionRulesType
     * @uses EwsArrayOfProtectionRulesType::setRule()
     * @param \Ews\StructType\EwsProtectionRuleType[] $rule
     */
    public function __construct(array $rule = array())
    {
        $this
            ->setRule($rule);
    }
    /**
     * Get Rule value
     * @return \Ews\StructType\EwsProtectionRuleType[]|null
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
        foreach ($values as $arrayOfProtectionRulesTypeRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfProtectionRulesTypeRuleItem instanceof \Ews\StructType\EwsProtectionRuleType) {
                $invalidValues[] = is_object($arrayOfProtectionRulesTypeRuleItem) ? get_class($arrayOfProtectionRulesTypeRuleItem) : sprintf('%s(%s)', gettype($arrayOfProtectionRulesTypeRuleItem), var_export($arrayOfProtectionRulesTypeRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Rule property can only contain items of type \Ews\StructType\EwsProtectionRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Rule value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsProtectionRuleType[] $rule
     * @return \Ews\ArrayType\EwsArrayOfProtectionRulesType
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
     * @param \Ews\StructType\EwsProtectionRuleType $item
     * @return \Ews\ArrayType\EwsArrayOfProtectionRulesType
     */
    public function addToRule(\Ews\StructType\EwsProtectionRuleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsProtectionRuleType) {
            throw new \InvalidArgumentException(sprintf('The Rule property can only contain items of type \Ews\StructType\EwsProtectionRuleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Rule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsProtectionRuleType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsProtectionRuleType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsProtectionRuleType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsProtectionRuleType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsProtectionRuleType|null
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
