<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEntityFeedbackEntry ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEntityFeedbackEntry extends AbstractStructArrayBase
{
    /**
     * The EntityFeedbackEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsEntityFeedbackEntryType[]
     */
    protected array $EntityFeedbackEntry = [];
    /**
     * Constructor method for ArrayOfEntityFeedbackEntry
     * @uses EwsArrayOfEntityFeedbackEntry::setEntityFeedbackEntry()
     * @param \StructType\EwsEntityFeedbackEntryType[] $entityFeedbackEntry
     */
    public function __construct(array $entityFeedbackEntry)
    {
        $this
            ->setEntityFeedbackEntry($entityFeedbackEntry);
    }
    /**
     * Get EntityFeedbackEntry value
     * @return \StructType\EwsEntityFeedbackEntryType[]
     */
    public function getEntityFeedbackEntry(): array
    {
        return $this->EntityFeedbackEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setEntityFeedbackEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityFeedbackEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityFeedbackEntryForArrayConstraintsFromSetEntityFeedbackEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfEntityFeedbackEntryEntityFeedbackEntryItem instanceof \StructType\EwsEntityFeedbackEntryType) {
                $invalidValues[] = is_object($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) ? get_class($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem) : sprintf('%s(%s)', gettype($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem), var_export($arrayOfEntityFeedbackEntryEntityFeedbackEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EntityFeedbackEntry property can only contain items of type \StructType\EwsEntityFeedbackEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EntityFeedbackEntry value
     * @throws InvalidArgumentException
     * @param \StructType\EwsEntityFeedbackEntryType[] $entityFeedbackEntry
     * @return \ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function setEntityFeedbackEntry(array $entityFeedbackEntry): self
    {
        // validation for constraint: array
        if ('' !== ($entityFeedbackEntryArrayErrorMessage = self::validateEntityFeedbackEntryForArrayConstraintsFromSetEntityFeedbackEntry($entityFeedbackEntry))) {
            throw new InvalidArgumentException($entityFeedbackEntryArrayErrorMessage, __LINE__);
        }
        $this->EntityFeedbackEntry = $entityFeedbackEntry;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsEntityFeedbackEntryType|null
     */
    public function current(): ?\StructType\EwsEntityFeedbackEntryType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsEntityFeedbackEntryType|null
     */
    public function item($index): ?\StructType\EwsEntityFeedbackEntryType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsEntityFeedbackEntryType|null
     */
    public function first(): ?\StructType\EwsEntityFeedbackEntryType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsEntityFeedbackEntryType|null
     */
    public function last(): ?\StructType\EwsEntityFeedbackEntryType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsEntityFeedbackEntryType|null
     */
    public function offsetGet($offset): ?\StructType\EwsEntityFeedbackEntryType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsEntityFeedbackEntryType $item
     * @return \ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function add(\StructType\EwsEntityFeedbackEntryType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EntityFeedbackEntry
     */
    public function getAttributeName(): string
    {
        return 'EntityFeedbackEntry';
    }
}
