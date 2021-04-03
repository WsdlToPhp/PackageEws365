<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsOccurrenceInfoType[]
     */
    protected array $Occurrence = [];
    /**
     * Constructor method for NonEmptyArrayOfOccurrenceInfoType
     * @uses EwsNonEmptyArrayOfOccurrenceInfoType::setOccurrence()
     * @param \StructType\EwsOccurrenceInfoType[] $occurrence
     */
    public function __construct(array $occurrence = [])
    {
        $this
            ->setOccurrence($occurrence);
    }
    /**
     * Get Occurrence value
     * @return \StructType\EwsOccurrenceInfoType[]
     */
    public function getOccurrence(): array
    {
        return $this->Occurrence;
    }
    /**
     * This method is responsible for validating the values passed to the setOccurrence method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOccurrence method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOccurrenceForArrayConstraintsFromSetOccurrence(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem instanceof \StructType\EwsOccurrenceInfoType) {
                $invalidValues[] = is_object($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) ? get_class($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem), var_export($nonEmptyArrayOfOccurrenceInfoTypeOccurrenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Occurrence property can only contain items of type \StructType\EwsOccurrenceInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Occurrence value
     * @throws InvalidArgumentException
     * @param \StructType\EwsOccurrenceInfoType[] $occurrence
     * @return \ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
     */
    public function setOccurrence(array $occurrence = []): self
    {
        // validation for constraint: array
        if ('' !== ($occurrenceArrayErrorMessage = self::validateOccurrenceForArrayConstraintsFromSetOccurrence($occurrence))) {
            throw new InvalidArgumentException($occurrenceArrayErrorMessage, __LINE__);
        }
        $this->Occurrence = $occurrence;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsOccurrenceInfoType|null
     */
    public function current(): ?\StructType\EwsOccurrenceInfoType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsOccurrenceInfoType|null
     */
    public function item($index): ?\StructType\EwsOccurrenceInfoType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsOccurrenceInfoType|null
     */
    public function first(): ?\StructType\EwsOccurrenceInfoType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsOccurrenceInfoType|null
     */
    public function last(): ?\StructType\EwsOccurrenceInfoType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsOccurrenceInfoType|null
     */
    public function offsetGet($offset): ?\StructType\EwsOccurrenceInfoType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsOccurrenceInfoType $item
     * @return \ArrayType\EwsNonEmptyArrayOfOccurrenceInfoType
     */
    public function add(\StructType\EwsOccurrenceInfoType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Occurrence
     */
    public function getAttributeName(): string
    {
        return 'Occurrence';
    }
}
