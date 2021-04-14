<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsDeletedOccurrenceInfoType[]
     */
    protected array $DeletedOccurrence = [];
    /**
     * Constructor method for NonEmptyArrayOfDeletedOccurrencesType
     * @uses EwsNonEmptyArrayOfDeletedOccurrencesType::setDeletedOccurrence()
     * @param \StructType\EwsDeletedOccurrenceInfoType[] $deletedOccurrence
     */
    public function __construct(array $deletedOccurrence = [])
    {
        $this
            ->setDeletedOccurrence($deletedOccurrence);
    }
    /**
     * Get DeletedOccurrence value
     * @return \StructType\EwsDeletedOccurrenceInfoType[]
     */
    public function getDeletedOccurrence(): array
    {
        return $this->DeletedOccurrence;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedOccurrence method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedOccurrence method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedOccurrenceForArrayConstraintsFromSetDeletedOccurrence(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem instanceof \StructType\EwsDeletedOccurrenceInfoType) {
                $invalidValues[] = is_object($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) ? get_class($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem), var_export($nonEmptyArrayOfDeletedOccurrencesTypeDeletedOccurrenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedOccurrence property can only contain items of type \StructType\EwsDeletedOccurrenceInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DeletedOccurrence value
     * @throws InvalidArgumentException
     * @param \StructType\EwsDeletedOccurrenceInfoType[] $deletedOccurrence
     * @return \ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     */
    public function setDeletedOccurrence(array $deletedOccurrence = []): self
    {
        // validation for constraint: array
        if ('' !== ($deletedOccurrenceArrayErrorMessage = self::validateDeletedOccurrenceForArrayConstraintsFromSetDeletedOccurrence($deletedOccurrence))) {
            throw new InvalidArgumentException($deletedOccurrenceArrayErrorMessage, __LINE__);
        }
        $this->DeletedOccurrence = $deletedOccurrence;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function current(): ?\StructType\EwsDeletedOccurrenceInfoType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function item($index): ?\StructType\EwsDeletedOccurrenceInfoType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function first(): ?\StructType\EwsDeletedOccurrenceInfoType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function last(): ?\StructType\EwsDeletedOccurrenceInfoType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsDeletedOccurrenceInfoType|null
     */
    public function offsetGet($offset): ?\StructType\EwsDeletedOccurrenceInfoType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsDeletedOccurrenceInfoType $item
     * @return \ArrayType\EwsNonEmptyArrayOfDeletedOccurrencesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsDeletedOccurrenceInfoType) {
            throw new InvalidArgumentException(sprintf('The DeletedOccurrence property can only contain items of type \StructType\EwsDeletedOccurrenceInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeletedOccurrence
     */
    public function getAttributeName(): string
    {
        return 'DeletedOccurrence';
    }
}
