<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsPersonaType[]
     */
    protected array $Persona = [];
    /**
     * Constructor method for People
     * @uses EwsPeople::setPersona()
     * @param \StructType\EwsPersonaType[] $persona
     */
    public function __construct(array $persona = [])
    {
        $this
            ->setPersona($persona);
    }
    /**
     * Get Persona value
     * @return \StructType\EwsPersonaType[]
     */
    public function getPersona(): array
    {
        return $this->Persona;
    }
    /**
     * This method is responsible for validating the values passed to the setPersona method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersona method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonaForArrayConstraintsFromSetPersona(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $peoplePersonaItem) {
            // validation for constraint: itemType
            if (!$peoplePersonaItem instanceof \StructType\EwsPersonaType) {
                $invalidValues[] = is_object($peoplePersonaItem) ? get_class($peoplePersonaItem) : sprintf('%s(%s)', gettype($peoplePersonaItem), var_export($peoplePersonaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Persona property can only contain items of type \StructType\EwsPersonaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Persona value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonaType[] $persona
     * @return \StructType\EwsPeople
     */
    public function setPersona(array $persona = []): self
    {
        // validation for constraint: array
        if ('' !== ($personaArrayErrorMessage = self::validatePersonaForArrayConstraintsFromSetPersona($persona))) {
            throw new InvalidArgumentException($personaArrayErrorMessage, __LINE__);
        }
        $this->Persona = $persona;
        
        return $this;
    }
    /**
     * Add item to Persona value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPersonaType $item
     * @return \StructType\EwsPeople
     */
    public function addToPersona(\StructType\EwsPersonaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPersonaType) {
            throw new InvalidArgumentException(sprintf('The Persona property can only contain items of type \StructType\EwsPersonaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Persona[] = $item;
        
        return $this;
    }
}
