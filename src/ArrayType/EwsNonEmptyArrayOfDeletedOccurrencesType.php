<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfDeletedOccurrencesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfDeletedOccurrencesType extends AbstractStructArrayBase
{
    /**
     * The DeletedOccurrence
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsDeletedOccurrenceInfoType[]
     */
    public $DeletedOccurrence;
    /**
     * Constructor method for NonEmptyArrayOfDeletedOccurrencesType
     * @uses EwsNonEmptyArrayOfDeletedOccurrencesType::setDeletedOccurrence()
     * @param \Ews\StructType\EwsDeletedOccurrenceInfoType[] $deletedOccurrence
     */
    public function __construct(array $deletedOccurrence = array())
    {
        $this
            ->setDeletedOccurrence($deletedOccurrence);
    }
    /**
     * Get DeletedOccurrence value
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType[]|null
     */
    public function getDeletedOccurrence()
    {
        return $this->DeletedOccurrence;
    }
    /**
     * Set DeletedOccurrence value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeletedOccurrenceInfoType[] $deletedOccurrence
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     */
    public function setDeletedOccurrence(array $deletedOccurrence = array())
    {
        foreach ($deletedOccurrence as $nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem instanceof \Ews\StructType\EwsDeletedOccurrenceInfoType) {
                throw new \InvalidArgumentException(sprintf('The DeletedOccurrence property can only contain items of \Ews\StructType\EwsDeletedOccurrenceInfoType, "%s" given', is_object($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) ? get_class($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) : gettype($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem)), __LINE__);
            }
        }
        $this->DeletedOccurrence = $deletedOccurrence;
        return $this;
    }
    /**
     * Add item to DeletedOccurrence value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeletedOccurrenceInfoType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     */
    public function addToDeletedOccurrence(\Ews\StructType\EwsDeletedOccurrenceInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsDeletedOccurrenceInfoType) {
            throw new \InvalidArgumentException(sprintf('The DeletedOccurrence property can only contain items of \Ews\StructType\EwsDeletedOccurrenceInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeletedOccurrence[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeletedOccurrence
     */
    public function getAttributeName()
    {
        return 'DeletedOccurrence';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
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
