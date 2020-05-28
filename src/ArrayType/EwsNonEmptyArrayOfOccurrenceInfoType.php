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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setOccurrence method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOccurrence method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOccurrenceForArrayConstraintsFromSetOccurrence(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem instanceof \Ews\StructType\EwsOccurrenceInfoType) {
                $invalidValues[] = is_object($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) ? get_class($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem), var_export($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Occurrence property can only contain items of type \Ews\StructType\EwsOccurrenceInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Occurrence value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsOccurrenceInfoType[] $occurrence
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
     */
    public function setOccurrence(array $occurrence = array())
    {
        // validation for constraint: array
        if ('' !== ($occurrenceArrayErrorMessage = self::validateOccurrenceForArrayConstraintsFromSetOccurrence($occurrence))) {
            throw new \InvalidArgumentException($occurrenceArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Occurrence property can only contain items of type \Ews\StructType\EwsOccurrenceInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
