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
     * Meta informations extracted from the WSDL
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
     * Set Rule value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsProtectionRuleType[] $rule
     * @return \Ews\ArrayType\EwsArrayOfProtectionRulesType
     */
    public function setRule(array $rule = array())
    {
        foreach ($rule as $arrayOfProtectionRulesTypeRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfProtectionRulesTypeRuleItem instanceof \Ews\StructType\EwsProtectionRuleType) {
                throw new \InvalidArgumentException(sprintf('The Rule property can only contain items of \Ews\StructType\EwsProtectionRuleType, "%s" given', is_object($arrayOfProtectionRulesTypeRuleItem) ? get_class($arrayOfProtectionRulesTypeRuleItem) : gettype($arrayOfProtectionRulesTypeRuleItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Rule property can only contain items of \Ews\StructType\EwsProtectionRuleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfProtectionRulesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
