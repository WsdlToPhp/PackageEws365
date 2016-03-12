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
     * Meta informations extracted from the WSDL
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
     * Set Persona value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPersonaType[] $persona
     * @return \Ews\StructType\EwsPeople
     */
    public function setPersona(array $persona = array())
    {
        foreach ($persona as $peoplePersonaItem) {
            // validation for constraint: itemType
            if (!$peoplePersonaItem instanceof \Ews\StructType\EwsPersonaType) {
                throw new \InvalidArgumentException(sprintf('The Persona property can only contain items of \Ews\StructType\EwsPersonaType, "%s" given', is_object($peoplePersonaItem) ? get_class($peoplePersonaItem) : gettype($peoplePersonaItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Persona property can only contain items of \Ews\StructType\EwsPersonaType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Persona[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPeople
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
