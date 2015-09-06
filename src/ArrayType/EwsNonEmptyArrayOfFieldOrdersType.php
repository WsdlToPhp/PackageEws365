<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfFieldOrdersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfFieldOrdersType extends AbstractStructArrayBase
{
    /**
     * The FieldOrder
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: t:Path
     * @var array
     */
    public $FieldOrder;
    /**
     * Constructor method for NonEmptyArrayOfFieldOrdersType
     * @uses EwsNonEmptyArrayOfFieldOrdersType::setFieldOrder()
     * @param array $fieldOrder
     */
    public function __construct(array $fieldOrder = array())
    {
        $this
            ->setFieldOrder($fieldOrder);
    }
    /**
     * Get FieldOrder value
     * @return array
     */
    public function getFieldOrder()
    {
        return $this->FieldOrder;
    }
    /**
     * Set FieldOrder value
     * @param array $fieldOrder
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public function setFieldOrder(array $fieldOrder = array())
    {
        $this->FieldOrder = $fieldOrder;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FieldOrder
     */
    public function getAttributeName()
    {
        return 'FieldOrder';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
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
