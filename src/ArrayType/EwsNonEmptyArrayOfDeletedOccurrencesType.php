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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setDeletedOccurrence method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedOccurrence method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedOccurrenceForArrayConstraintsFromSetDeletedOccurrence(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem instanceof \Ews\StructType\EwsDeletedOccurrenceInfoType) {
                $invalidValues[] = is_object($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) ? get_class($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem), var_export($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedOccurrence property can only contain items of type \Ews\StructType\EwsDeletedOccurrenceInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeletedOccurrence value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeletedOccurrenceInfoType[] $deletedOccurrence
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     */
    public function setDeletedOccurrence(array $deletedOccurrence = array())
    {
        // validation for constraint: array
        if ('' !== ($deletedOccurrenceArrayErrorMessage = self::validateDeletedOccurrenceForArrayConstraintsFromSetDeletedOccurrence($deletedOccurrence))) {
            throw new \InvalidArgumentException($deletedOccurrenceArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The DeletedOccurrence property can only contain items of type \Ews\StructType\EwsDeletedOccurrenceInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
