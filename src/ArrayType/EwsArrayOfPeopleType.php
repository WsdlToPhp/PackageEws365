<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPeopleType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPeopleType extends AbstractStructArrayBase
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - choice: Persona
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsPersonaType|null
     */
    protected ?\StructType\EwsPersonaType $Persona = null;
    /**
     * Constructor method for ArrayOfPeopleType
     * @uses EwsArrayOfPeopleType::setPersona()
     * @param \StructType\EwsPersonaType $persona
     */
    public function __construct(?\StructType\EwsPersonaType $persona = null)
    {
        $this
            ->setPersona($persona);
    }
    /**
     * Get Persona value
     * @return \StructType\EwsPersonaType|null
     */
    public function getPersona(): ?\StructType\EwsPersonaType
    {
        return isset($this->Persona) ? $this->Persona : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPersona method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersona method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePersonaForChoiceConstraintsFromSetPersona($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Persona can\'t be set as the property %s is already set. Only one property must be set among these properties: Persona, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Persona value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonaType $persona
     * @return \ArrayType\EwsArrayOfPeopleType
     */
    public function setPersona(?\StructType\EwsPersonaType $persona = null): self
    {
        // validation for constraint: choice(Persona)
        if ('' !== ($personaChoiceErrorMessage = self::validatePersonaForChoiceConstraintsFromSetPersona($persona))) {
            throw new InvalidArgumentException($personaChoiceErrorMessage, __LINE__);
        }
        if (is_null($persona) || (is_array($persona) && empty($persona))) {
            unset($this->Persona);
        } else {
            $this->Persona = $persona;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPersonaType|null
     */
    public function current(): ?\StructType\EwsPersonaType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPersonaType|null
     */
    public function item($index): ?\StructType\EwsPersonaType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPersonaType|null
     */
    public function first(): ?\StructType\EwsPersonaType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPersonaType|null
     */
    public function last(): ?\StructType\EwsPersonaType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPersonaType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPersonaType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonaType $item
     * @return \ArrayType\EwsArrayOfPeopleType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPersonaType) {
            throw new InvalidArgumentException(sprintf('The Persona property can only contain items of type \StructType\EwsPersonaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Persona
     */
    public function getAttributeName(): string
    {
        return 'Persona';
    }
}
