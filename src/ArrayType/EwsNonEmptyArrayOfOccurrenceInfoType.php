<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfOccurrenceInfoType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfOccurrenceInfoType extends AbstractStructArrayBase
{
    /**
     * The Occurrence
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var array
     */
    public $Occurrence;
    /**
     * Constructor method for NonEmptyArrayOfOccurrenceInfoType
     * @uses EwsNonEmptyArrayOfOccurrenceInfoType::setOccurrence()
     * @param array $occurrence
     */
    public function __construct(array $occurrence = array())
    {
        $this
            ->setOccurrence($occurrence);
    }
    /**
     * Get Occurrence value
     * @return array
     */
    public function getOccurrence()
    {
        return $this->Occurrence;
    }
    /**
     * Set Occurrence value
     * @param array $occurrence
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
     */
    public function setOccurrence(array $occurrence = array())
    {
        $this->Occurrence = $occurrence;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsOccurrenceInfoType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsOccurrenceInfoType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsOccurrenceInfoType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsOccurrenceInfoType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsOccurrenceInfoType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Occurrence
     */
    public function getAttributeName()
    {
        return 'Occurrence';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
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
