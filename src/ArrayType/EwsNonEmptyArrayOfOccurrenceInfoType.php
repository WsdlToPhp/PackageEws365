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
     * @var \Ews\StructType\EwsOccurrenceInfoType[]
     */
    public $Occurrence;
    /**
     * Constructor method for NonEmptyArrayOfOccurrenceInfoType
     * @uses EwsNonEmptyArrayOfOccurrenceInfoType::setOccurrence()
     * @param \Ews\StructType\EwsOccurrenceInfoType[] $occurrence
     */
    public function __construct(array $occurrence = array())
    {
        $this
            ->setOccurrence($occurrence);
    }
    /**
     * Get Occurrence value
     * @return \Ews\StructType\EwsOccurrenceInfoType[]|null
     */
    public function getOccurrence()
    {
        return $this->Occurrence;
    }
    /**
     * Set Occurrence value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsOccurrenceInfoType[] $occurrence
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
     */
    public function setOccurrence(array $occurrence = array())
    {
        foreach ($occurrence as $nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem instanceof \Ews\StructType\EwsOccurrenceInfoType) {
                throw new \InvalidArgumentException(sprintf('The Occurrence property can only contain items of \Ews\StructType\EwsOccurrenceInfoType, "%s" given', is_object($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) ? get_class($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) : gettype($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem)), __LINE__);
            }
        }
        $this->Occurrence = $occurrence;
        return $this;
    }
    /**
     * Add item to Occurrence value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsOccurrenceInfoType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
     */
    public function addToOccurrence(\Ews\StructType\EwsOccurrenceInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsOccurrenceInfoType) {
            throw new \InvalidArgumentException(sprintf('The Occurrence property can only contain items of \Ews\StructType\EwsOccurrenceInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Occurrence[] = $item;
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
