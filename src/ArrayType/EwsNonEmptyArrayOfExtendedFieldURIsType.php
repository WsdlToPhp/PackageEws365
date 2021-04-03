<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfExtendedFieldURIsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfExtendedFieldURIsType extends AbstractStructArrayBase
{
    /**
     * The ExtendedFieldURI
     * Meta information extracted from the WSDL
     * - choice: ExtendedFieldURI
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToExtendedFieldType|null
     */
    protected ?\StructType\EwsPathToExtendedFieldType $ExtendedFieldURI = null;
    /**
     * Constructor method for NonEmptyArrayOfExtendedFieldURIsType
     * @uses EwsNonEmptyArrayOfExtendedFieldURIsType::setExtendedFieldURI()
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setExtendedFieldURI($extendedFieldURI);
    }
    /**
     * Get ExtendedFieldURI value
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI(): ?\StructType\EwsPathToExtendedFieldType
    {
        return isset($this->ExtendedFieldURI) ? $this->ExtendedFieldURI : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExtendedFieldURI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedFieldURI method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExtendedFieldURIForChoiceConstraintsFromSetExtendedFieldURI($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ExtendedFieldURI can\'t be set as the property %s is already set. Only one property must be set among these properties: ExtendedFieldURI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ExtendedFieldURI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
     */
    public function setExtendedFieldURI(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null): self
    {
        // validation for constraint: choice(ExtendedFieldURI)
        if ('' !== ($extendedFieldURIChoiceErrorMessage = self::validateExtendedFieldURIForChoiceConstraintsFromSetExtendedFieldURI($extendedFieldURI))) {
            throw new InvalidArgumentException($extendedFieldURIChoiceErrorMessage, __LINE__);
        }
        if (is_null($extendedFieldURI) || (is_array($extendedFieldURI) && empty($extendedFieldURI))) {
            unset($this->ExtendedFieldURI);
        } else {
            $this->ExtendedFieldURI = $extendedFieldURI;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function current(): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function item($index): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function first(): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function last(): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPathToExtendedFieldType $item
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
     */
    public function add(\StructType\EwsPathToExtendedFieldType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedFieldURI
     */
    public function getAttributeName(): string
    {
        return 'ExtendedFieldURI';
    }
}
