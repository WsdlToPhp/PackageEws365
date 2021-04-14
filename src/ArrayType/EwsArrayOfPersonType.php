<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPersonType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPersonType extends AbstractStructArrayBase
{
    /**
     * The Person
     * Meta information extracted from the WSDL
     * - choice: Person
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsPersonType|null
     */
    protected ?\StructType\EwsPersonType $Person = null;
    /**
     * Constructor method for ArrayOfPersonType
     * @uses EwsArrayOfPersonType::setPerson()
     * @param \StructType\EwsPersonType $person
     */
    public function __construct(?\StructType\EwsPersonType $person = null)
    {
        $this
            ->setPerson($person);
    }
    /**
     * Get Person value
     * @return \StructType\EwsPersonType|null
     */
    public function getPerson(): ?\StructType\EwsPersonType
    {
        return isset($this->Person) ? $this->Person : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePersonForChoiceConstraintsFromSetPerson($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Person can\'t be set as the property %s is already set. Only one property must be set among these properties: Person, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Person value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonType $person
     * @return \ArrayType\EwsArrayOfPersonType
     */
    public function setPerson(?\StructType\EwsPersonType $person = null): self
    {
        // validation for constraint: choice(Person)
        if ('' !== ($personChoiceErrorMessage = self::validatePersonForChoiceConstraintsFromSetPerson($person))) {
            throw new InvalidArgumentException($personChoiceErrorMessage, __LINE__);
        }
        if (is_null($person) || (is_array($person) && empty($person))) {
            unset($this->Person);
        } else {
            $this->Person = $person;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPersonType|null
     */
    public function current(): ?\StructType\EwsPersonType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPersonType|null
     */
    public function item($index): ?\StructType\EwsPersonType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPersonType|null
     */
    public function first(): ?\StructType\EwsPersonType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPersonType|null
     */
    public function last(): ?\StructType\EwsPersonType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPersonType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPersonType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonType $item
     * @return \ArrayType\EwsArrayOfPersonType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPersonType) {
            throw new InvalidArgumentException(sprintf('The Person property can only contain items of type \StructType\EwsPersonType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Person
     */
    public function getAttributeName(): string
    {
        return 'Person';
    }
}
