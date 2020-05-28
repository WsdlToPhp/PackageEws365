<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Persona;
    /**
     * Constructor method for ArrayOfPeopleType
     * @uses EwsArrayOfPeopleType::setPersona()
     * @param \Ews\StructType\EwsPersonaType $persona
     */
    public function __construct(\Ews\StructType\EwsPersonaType $persona = null)
    {
        $this
            ->setPersona($persona);
    }
    /**
     * Get Persona value
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function getPersona()
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
    public function validatePersonaForChoiceConstraintsFromSetPersona($value)
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
                    throw new \InvalidArgumentException(sprintf('The property Persona can\'t be set as the property %s is already set. Only one property must be set among these properties: Persona, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Persona value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPersonaType $persona
     * @return \Ews\ArrayType\EwsArrayOfPeopleType
     */
    public function setPersona(\Ews\StructType\EwsPersonaType $persona = null)
    {
        // validation for constraint: choice(Persona)
        if ('' !== ($personaChoiceErrorMessage = self::validatePersonaForChoiceConstraintsFromSetPersona($persona))) {
            throw new \InvalidArgumentException($personaChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Persona
     */
    public function getAttributeName()
    {
        return 'Persona';
    }
}
