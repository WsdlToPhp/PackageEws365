<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContextProperty ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfContextProperty extends AbstractStructArrayBase
{
    /**
     * The ContextProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $ContextProperty;
    /**
     * Constructor method for ArrayOfContextProperty
     * @uses EwsArrayOfContextProperty::setContextProperty()
     * @param array $contextProperty
     */
    public function __construct(array $contextProperty = array())
    {
        $this
            ->setContextProperty($contextProperty);
    }
    /**
     * Get ContextProperty value
     * @return array
     */
    public function getContextProperty()
    {
        return $this->ContextProperty;
    }
    /**
     * Set ContextProperty value
     * @param array $contextProperty
     * @return \Ews\ArrayType\EwsArrayOfContextProperty
     */
    public function setContextProperty(array $contextProperty = array())
    {
        $this->ContextProperty = $contextProperty;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsContextPropertyType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContextProperty
     */
    public function getAttributeName()
    {
        return 'ContextProperty';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfContextProperty
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
