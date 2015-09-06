<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmRelationshipBaseType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfXrmRelationshipBaseType extends AbstractStructArrayBase
{
    /**
     * The XrmRelationshipBaseType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $XrmRelationshipBaseType;
    /**
     * Constructor method for ArrayOfXrmRelationshipBaseType
     * @uses EwsArrayOfXrmRelationshipBaseType::setXrmRelationshipBaseType()
     * @param array $xrmRelationshipBaseType
     */
    public function __construct(array $xrmRelationshipBaseType = array())
    {
        $this
            ->setXrmRelationshipBaseType($xrmRelationshipBaseType);
    }
    /**
     * Get XrmRelationshipBaseType value
     * @return array
     */
    public function getXrmRelationshipBaseType()
    {
        return $this->XrmRelationshipBaseType;
    }
    /**
     * Set XrmRelationshipBaseType value
     * @param array $xrmRelationshipBaseType
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
     */
    public function setXrmRelationshipBaseType(array $xrmRelationshipBaseType = array())
    {
        $this->XrmRelationshipBaseType = $xrmRelationshipBaseType;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsXrmRelationshipBaseType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmRelationshipBaseType
     */
    public function getAttributeName()
    {
        return 'XrmRelationshipBaseType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfXrmRelationshipBaseType
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
