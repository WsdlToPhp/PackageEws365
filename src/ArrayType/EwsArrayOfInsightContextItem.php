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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextForArrayConstraintsFromSetContext(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInsightContextItemContextItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsightContextItemContextItem instanceof \Ews\StructType\EwsInsightContextItem) {
                $invalidValues[] = is_object($arrayOfInsightContextItemContextItem) ? get_class($arrayOfInsightContextItemContextItem) : sprintf('%s(%s)', gettype($arrayOfInsightContextItemContextItem), var_export($arrayOfInsightContextItemContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Context property can only contain items of type \Ews\StructType\EwsInsightContextItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Context value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInsightContextItem[] $context
     * @return \Ews\ArrayType\EwsArrayOfInsightContextItem
     */
    public function setContext(array $context = array())
    {
        // validation for constraint: array
        if ('' !== ($contextArrayErrorMessage = self::validateContextForArrayConstraintsFromSetContext($context))) {
            throw new \InvalidArgumentException($contextArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Context property can only contain items of type \Ews\StructType\EwsInsightContextItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
