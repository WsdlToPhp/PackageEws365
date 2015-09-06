<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfArraysOfTrackingPropertiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfArraysOfTrackingPropertiesType extends AbstractStructArrayBase
{
    /**
     * The ArrayOfTrackingPropertiesType
     * @var array
     */
    public $ArrayOfTrackingPropertiesType;
    /**
     * Constructor method for ArrayOfArraysOfTrackingPropertiesType
     * @uses
     * EwsArrayOfArraysOfTrackingPropertiesType::setArrayOfTrackingPropertiesType()
     * @param array $arrayOfTrackingPropertiesType
     */
    public function __construct(array $arrayOfTrackingPropertiesType = array())
    {
        $this
            ->setArrayOfTrackingPropertiesType($arrayOfTrackingPropertiesType);
    }
    /**
     * Get ArrayOfTrackingPropertiesType value
     * @return array
     */
    public function getArrayOfTrackingPropertiesType()
    {
        return $this->ArrayOfTrackingPropertiesType;
    }
    /**
     * Set ArrayOfTrackingPropertiesType value
     * @param array $arrayOfTrackingPropertiesType
     * @return \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType
     */
    public function setArrayOfTrackingPropertiesType(array $arrayOfTrackingPropertiesType = array())
    {
        $this->ArrayOfTrackingPropertiesType = $arrayOfTrackingPropertiesType;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfTrackingPropertiesType
     */
    public function getAttributeName()
    {
        return 'ArrayOfTrackingPropertiesType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType
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
