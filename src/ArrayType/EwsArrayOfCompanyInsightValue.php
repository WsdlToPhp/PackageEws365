<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompanyInsightValue ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfCompanyInsightValue extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCompanyInsightValue[]
     */
    public $Item;
    /**
     * Constructor method for ArrayOfCompanyInsightValue
     * @uses EwsArrayOfCompanyInsightValue::setItem()
     * @param \Ews\StructType\EwsCompanyInsightValue[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \Ews\StructType\EwsCompanyInsightValue[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCompanyInsightValueItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompanyInsightValueItemItem instanceof \Ews\StructType\EwsCompanyInsightValue) {
                $invalidValues[] = is_object($arrayOfCompanyInsightValueItemItem) ? get_class($arrayOfCompanyInsightValueItemItem) : sprintf('%s(%s)', gettype($arrayOfCompanyInsightValueItemItem), var_export($arrayOfCompanyInsightValueItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \Ews\StructType\EwsCompanyInsightValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCompanyInsightValue[] $item
     * @return \Ews\ArrayType\EwsArrayOfCompanyInsightValue
     */
    public function setItem(array $item = array())
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new \InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCompanyInsightValue $item
     * @return \Ews\ArrayType\EwsArrayOfCompanyInsightValue
     */
    public function addToItem(\Ews\StructType\EwsCompanyInsightValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsCompanyInsightValue) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of type \Ews\StructType\EwsCompanyInsightValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCompanyInsightValue|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCompanyInsightValue|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCompanyInsightValue|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCompanyInsightValue|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCompanyInsightValue|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Item
     */
    public function getAttributeName()
    {
        return 'Item';
    }
}
