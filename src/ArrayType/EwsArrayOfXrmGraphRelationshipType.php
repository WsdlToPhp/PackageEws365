<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXrmGraphRelationshipType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfXrmGraphRelationshipType extends AbstractStructArrayBase
{
    /**
     * The XrmGraphRelationshipType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $XrmGraphRelationshipType;
    /**
     * Constructor method for ArrayOfXrmGraphRelationshipType
     * @uses EwsArrayOfXrmGraphRelationshipType::setXrmGraphRelationshipType()
     * @param array $xrmGraphRelationshipType
     */
    public function __construct(array $xrmGraphRelationshipType = array())
    {
        $this
            ->setXrmGraphRelationshipType($xrmGraphRelationshipType);
    }
    /**
     * Get XrmGraphRelationshipType value
     * @return array
     */
    public function getXrmGraphRelationshipType()
    {
        return $this->XrmGraphRelationshipType;
    }
    /**
     * Set XrmGraphRelationshipType value
     * @param array $xrmGraphRelationshipType
     * @return \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType
     */
    public function setXrmGraphRelationshipType(array $xrmGraphRelationshipType = array())
    {
        $this->XrmGraphRelationshipType = $xrmGraphRelationshipType;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @uses \Ews\EnumType\EwsXrmGraphRelationshipType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType|bool
     */
    public function add($item)
    {
        return \Ews\EnumType\EwsXrmGraphRelationshipType::valueIsValid($item) ? parent::add($item) : false;
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XrmGraphRelationshipType
     */
    public function getAttributeName()
    {
        return 'XrmGraphRelationshipType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType
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
