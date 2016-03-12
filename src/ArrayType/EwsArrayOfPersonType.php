<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPersonType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPersonType extends AbstractStructArrayBase
{
    /**
     * The Person
     * @var \Ews\StructType\EwsPersonType
     */
    public $Person;
    /**
     * Constructor method for ArrayOfPersonType
     * @uses EwsArrayOfPersonType::setPerson()
     * @param \Ews\StructType\EwsPersonType $person
     */
    public function __construct(\Ews\StructType\EwsPersonType $person = null)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get Person value
     * @return \Ews\StructType\EwsPersonType|null
     */
    public function getPerson()
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \Ews\StructType\EwsPersonType $person
     * @return \Ews\ArrayType\EwsArrayOfPersonType
     */
    public function setPerson(\Ews\StructType\EwsPersonType $person = null)
    {
        $this->Person = $person;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPersonType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPersonType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPersonType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPersonType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPersonType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Person
     */
    public function getAttributeName()
    {
        return 'Person';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfPersonType
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
