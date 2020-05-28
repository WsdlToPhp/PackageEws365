<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for People StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPeople extends AbstractStructBase
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaType[]
     */
    public $Persona;
    /**
     * Constructor method for People
     * @uses EwsPeople::setPersona()
     * @param \Ews\StructType\EwsPersonaType[] $persona
     */
    public function __construct(array $persona = array())
    {
        $this
            ->setPersona($persona);
    }
    /**
     * Get Persona value
     * @return \Ews\StructType\EwsPersonaType[]|null
     */
    public function getPersona()
    {
        return $this->Persona;
    }
    /**
     * This method is responsible for validating the values passed to the setPersona method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersona method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonaForArrayConstraintsFromSetPersona(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $peoplePersonaItem) {
            // validation for constraint: itemType
            if (!$peoplePersonaItem instanceof \Ews\StructType\EwsPersonaType) {
                $invalidValues[] = is_object($peoplePersonaItem) ? get_class($peoplePersonaItem) : sprintf('%s(%s)', gettype($peoplePersonaItem), var_export($peoplePersonaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Persona property can only contain items of type \Ews\StructType\EwsPersonaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Persona value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPersonaType[] $persona
     * @return \Ews\StructType\EwsPeople
     */
    public function setPersona(array $persona = array())
    {
        // validation for constraint: array
        if ('' !== ($personaArrayErrorMessage = self::validatePersonaForArrayConstraintsFromSetPersona($persona))) {
            throw new \InvalidArgumentException($personaArrayErrorMessage, __LINE__);
        }
        $this->Persona = $persona;
        return $this;
    }
    /**
     * Add item to Persona value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPersonaType $item
     * @return \Ews\StructType\EwsPeople
     */
    public function addToPersona(\Ews\StructType\EwsPersonaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPersonaType) {
            throw new \InvalidArgumentException(sprintf('The Persona property can only contain items of type \Ews\StructType\EwsPersonaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Persona[] = $item;
        return $this;
    }
}
