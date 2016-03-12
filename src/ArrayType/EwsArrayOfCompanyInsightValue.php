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
     * Meta informations extracted from the WSDL
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
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCompanyInsightValue[] $item
     * @return \Ews\ArrayType\EwsArrayOfCompanyInsightValue
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $arrayOfCompanyInsightValueItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompanyInsightValueItemItem instanceof \Ews\StructType\EwsCompanyInsightValue) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Ews\StructType\EwsCompanyInsightValue, "%s" given', is_object($arrayOfCompanyInsightValueItemItem) ? get_class($arrayOfCompanyInsightValueItemItem) : gettype($arrayOfCompanyInsightValueItemItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Ews\StructType\EwsCompanyInsightValue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfCompanyInsightValue
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
