<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnknownEntriesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnknownEntriesType extends AbstractStructArrayBase
{
    /**
     * The UnknownEntry
     * Meta information extracted from the WSDL
     * - choice: UnknownEntry
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string|null
     */
    protected ?string $UnknownEntry = null;
    /**
     * Constructor method for ArrayOfUnknownEntriesType
     * @uses EwsArrayOfUnknownEntriesType::setUnknownEntry()
     * @param string $unknownEntry
     */
    public function __construct(?string $unknownEntry = null)
    {
        $this
            ->setUnknownEntry($unknownEntry);
    }
    /**
     * Get UnknownEntry value
     * @return string|null
     */
    public function getUnknownEntry(): ?string
    {
        return isset($this->UnknownEntry) ? $this->UnknownEntry : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnknownEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnknownEntry method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnknownEntryForChoiceConstraintsFromSetUnknownEntry($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnknownEntry can\'t be set as the property %s is already set. Only one property must be set among these properties: UnknownEntry, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnknownEntry value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $unknownEntry
     * @return \ArrayType\EwsArrayOfUnknownEntriesType
     */
    public function setUnknownEntry(?string $unknownEntry = null): self
    {
        // validation for constraint: string
        if (!is_null($unknownEntry) && !is_string($unknownEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unknownEntry, true), gettype($unknownEntry)), __LINE__);
        }
        // validation for constraint: choice(UnknownEntry)
        if ('' !== ($unknownEntryChoiceErrorMessage = self::validateUnknownEntryForChoiceConstraintsFromSetUnknownEntry($unknownEntry))) {
            throw new InvalidArgumentException($unknownEntryChoiceErrorMessage, __LINE__);
        }
        if (is_null($unknownEntry) || (is_array($unknownEntry) && empty($unknownEntry))) {
            unset($this->UnknownEntry);
        } else {
            $this->UnknownEntry = $unknownEntry;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnknownEntry
     */
    public function getAttributeName(): string
    {
        return 'UnknownEntry';
    }
}
