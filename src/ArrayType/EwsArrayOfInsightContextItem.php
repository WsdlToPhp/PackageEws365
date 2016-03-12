<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsightContextItem ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfInsightContextItem extends AbstractStructArrayBase
{
    /**
     * The Context
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInsightContextItem[]
     */
    public $Context;
    /**
     * Constructor method for ArrayOfInsightContextItem
     * @uses EwsArrayOfInsightContextItem::setContext()
     * @param \Ews\StructType\EwsInsightContextItem[] $context
     */
    public function __construct(array $context = array())
    {
        $this
            ->setContext($context);
    }
    /**
     * Get Context value
     * @return \Ews\StructType\EwsInsightContextItem[]|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInsightContextItem[] $context
     * @return \Ews\ArrayType\EwsArrayOfInsightContextItem
     */
    public function setContext(array $context = array())
    {
        foreach ($context as $arrayOfInsightContextItemContextItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsightContextItemContextItem instanceof \Ews\StructType\EwsInsightContextItem) {
                throw new \InvalidArgumentException(sprintf('The Context property can only contain items of \Ews\StructType\EwsInsightContextItem, "%s" given', is_object($arrayOfInsightContextItemContextItem) ? get_class($arrayOfInsightContextItemContextItem) : gettype($arrayOfInsightContextItemContextItem)), __LINE__);
            }
        }
        $this->Context = $context;
        return $this;
    }
    /**
     * Add item to Context value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInsightContextItem $item
     * @return \Ews\ArrayType\EwsArrayOfInsightContextItem
     */
    public function addToContext(\Ews\StructType\EwsInsightContextItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsInsightContextItem) {
            throw new \InvalidArgumentException(sprintf('The Context property can only contain items of \Ews\StructType\EwsInsightContextItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Context[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsInsightContextItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsInsightContextItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsInsightContextItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsInsightContextItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsInsightContextItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Context
     */
    public function getAttributeName()
    {
        return 'Context';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfInsightContextItem
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
