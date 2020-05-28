<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPersonaResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPersonaResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Persona
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Persona;
    /**
     * Constructor method for GetPersonaResponseMessageType
     * @uses EwsGetPersonaResponseMessageType::setPersona()
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
        return $this->Persona;
    }
    /**
     * Set Persona value
     * @param \Ews\StructType\EwsPersonaType $persona
     * @return \Ews\StructType\EwsGetPersonaResponseMessageType
     */
    public function setPersona(\Ews\StructType\EwsPersonaType $persona = null)
    {
        $this->Persona = $persona;
        return $this;
    }
}
