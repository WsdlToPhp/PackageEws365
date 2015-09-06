<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfItemChangesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfItemChangesType extends AbstractStructArrayBase
{
    /**
     * The ItemChange
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var array
     */
    public $ItemChange;
    /**
     * Constructor method for NonEmptyArrayOfItemChangesType
     * @uses EwsNonEmptyArrayOfItemChangesType::setItemChange()
     * @param array $itemChange
     */
    public function __construct(array $itemChange = array())
    {
        $this
            ->setItemChange($itemChange);
    }
    /**
     * Get ItemChange value
     * @return array
     */
    public function getItemChange()
    {
        return $this->ItemChange;
    }
    /**
     * Set ItemChange value
     * @param array $itemChange
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType
     */
    public function setItemChange(array $itemChange = array())
    {
        $this->ItemChange = $itemChange;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemChange
     */
    public function getAttributeName()
    {
        return 'ItemChange';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType
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
