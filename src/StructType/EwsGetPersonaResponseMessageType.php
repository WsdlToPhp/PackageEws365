<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsPersonaType|null
     */
    protected ?\StructType\EwsPersonaType $Persona = null;
    /**
     * Constructor method for GetPersonaResponseMessageType
     * @uses EwsGetPersonaResponseMessageType::setPersona()
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
        return $this->Persona;
    }
    /**
     * Set Persona value
     * @param \StructType\EwsPersonaType $persona
     * @return \StructType\EwsGetPersonaResponseMessageType
     */
    public function setPersona(?\StructType\EwsPersonaType $persona = null): self
    {
        $this->Persona = $persona;
        
        return $this;
    }
}
