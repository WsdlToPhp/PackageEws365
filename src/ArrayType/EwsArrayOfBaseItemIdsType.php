<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBaseItemIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBaseItemIdsType extends AbstractStructArrayBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var array
     */
    public $ItemId;
    /**
     * Constructor method for ArrayOfBaseItemIdsType
     * @uses EwsArrayOfBaseItemIdsType::setItemId()
     * @param array $itemId
     */
    public function __construct(array $itemId = array())
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return array
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param array $itemId
     * @return \Ews\ArrayType\EwsArrayOfBaseItemIdsType
     */
    public function setItemId(array $itemId = array())
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemId
     */
    public function getAttributeName()
    {
        return 'ItemId';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfBaseItemIdsType
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
